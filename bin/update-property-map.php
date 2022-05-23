#!/usr/bin/env php
<?php

declare(strict_types=1);

// Original Idea for the code in here came from:
// https://github.com/phan/phan/blob/93c1c2/src/Phan/Language/Internal/PropertyMap.php#L49
// We differ however:
// 1. we parse the XML and extract original class and property names instead of the normalized identifiers.
// 2. We ignore non-parsable files.
//
// What we are currently missing is properly parsing of <xi:include> directives.

set_error_handler(function ($num, $str, $file, $line, $context = null): void {
    throw new ErrorException($str, 0, $num, $file, $line);
});

$docDir = realpath(__DIR__ . '/../build/doc-en');

if (false === $docDir) {
    echo 'PHP doc not found!' . PHP_EOL;
    echo 'Please execute: git clone git@github.com:php/doc-en.git ' . dirname(__DIR__) . '/build/doc-en';
}

$files = iterator_to_array(
    new RegexIterator(
        new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(
                $docDir,
                FilesystemIterator::CURRENT_AS_PATHNAME|FilesystemIterator::SKIP_DOTS
            ),
            RecursiveIteratorIterator::LEAVES_ONLY
        ),
        '/.*.xml$/'
    )
);

$classes = require_once dirname(__DIR__) . '/dictionaries/ManualPropertyMap.php';
libxml_use_internal_errors(true);
foreach ($files as $file) {
    $contents = file_get_contents($file);
    // FIXME: find a way to ignore custom entities, for now we strip them.
    $contents = preg_replace('#&[a-zA-Z\d.\-_]+;#', '', $contents);
    $contents = preg_replace('#%[a-zA-Z\d.\-_]+;#', '', $contents);
    $contents = preg_replace('#<!ENTITY[^>]+>#', '', $contents);
    try {
        $simple = new SimpleXMLElement($contents);
    } catch (Throwable $exception) {
        // FIXME: we ignore files with XML errors at the moment because the input XML is not always sober.
        //        Examples are rpminfo/entities.functions.xml, wkhtmltox/wkhtmltox/bits/web.xml,
        //        wkhtmltox/wkhtmltox/bits/load.xml
        echo sprintf(
            "%1\$s: Ignoring %2\$s: %3\$s\n%4\$s",
            $file,
            get_class($exception),
            $exception->getMessage(),
            implode("\n", array_map(function (LibXMLError $error): string {
                return $error->message;
            }, libxml_get_errors()))
        );
        libxml_clear_errors();
        continue;
    }

    $namespaces = $simple->getNamespaces();
    $simple->registerXPathNamespace('docbook', 'http://docbook.org/ns/docbook');
    foreach ($simple->xpath('//docbook:classsynopsis') as $classSynopsis) {
        $classSynopsis->registerXPathNamespace('docbook', 'http://docbook.org/ns/docbook');
        $class = strtolower((string) $classSynopsis->xpath('./docbook:ooclass/docbook:classname')[0]);
        foreach ($classSynopsis->xpath('//docbook:fieldsynopsis') as $item) {
            assert($item instanceof SimpleXMLElement);
            $property = strtolower((string) $item->varname);
            if (isset($classes[$class][$property])) {
                continue;
            }

            $type = $item->type[0];
            if (null === $type) {
                continue;
            }
            assert($type instanceof SimpleXMLElement);
            $typeClass = $type->attributes(/*'http://docbook.org/ns/docbook'*/)->class;
            if (null === $typeClass) {
                $type = (string) $type;
            } elseif ('union' === (string) $typeClass) {
                $types = [];
                foreach ($type as $subType) {
                    $types[] = (string) $subType;
                }
                $type = implode('|', $types);
            }
            switch ($type) {
                case '':
                    // Some properties are not properly defined - we ignore them then.
                    continue 2;
                // case 'integer':
                //     $type = 'int';
                default:
            }
            $modifier = (string) $item->modifier;
            // We do not want to handle constants... I guess?!
            if ('const' === $modifier) {
                continue;
            }

            $classes[$class][$property] = $type;
        }
    }
}

function serializeArray(array $array, string $prefix): string
{
    uksort($array, function (string $first, string $second): int {
        return strtolower($first) <=> strtolower($second);
    });
    $result = "[\n";
    $localPrefix = $prefix . '    ';
    foreach ($array as $key => $value) {
        $result .= $localPrefix . var_export((string) $key, true) . ' => ' .
            (is_array($value)
            ? serializeArray($value, $localPrefix)
            : var_export($value, true)) . ",\n";
    }
    $result .= $prefix . ']';

    return $result;
}

$serialized = serializeArray($classes, '');
file_put_contents(
    dirname(__DIR__) . '/dictionaries/PropertyMap.php',
    <<<EOF
<?php
namespace Psalm\Internal;

/**
 * Automatically created by bin/update-property-map.php
 *
 * Please do not modify - adapt the override constants in above file instead.
 */

return $serialized;

EOF
);
