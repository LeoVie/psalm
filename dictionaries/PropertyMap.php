<?php
namespace Psalm\Internal;

/**
 * Automatically created by bin/update-property-map.php
 *
 * Please do not modify - adapt the override constants in above file instead.
 */

return [
    'commonmark\\node' => [
        'endcolumn' => 'int',
        'endline' => 'int',
        'firstchild' => 'Node|null',
        'lastchild' => 'Node|null',
        'next' => 'Node|null',
        'parent' => 'Node|null',
        'previous' => 'Node|null',
        'startcolumn' => 'int',
        'startline' => 'int',
    ],
    'commonmark\\node\\bulletlist' => [
        'delimiter' => 'int',
        'tight' => 'bool',
    ],
    'commonmark\\node\\codeblock' => [
        'fence' => 'string|null',
    ],
    'commonmark\\node\\customblock' => [
        'onenter' => 'string|null',
        'onleave' => 'string|null',
    ],
    'commonmark\\node\\custominline' => [
        'onenter' => 'string|null',
        'onleave' => 'string|null',
    ],
    'commonmark\\node\\heading' => [
        'level' => 'int',
    ],
    'commonmark\\node\\image' => [
        'title' => 'string|null',
        'url' => 'string|null',
    ],
    'commonmark\\node\\link' => [
        'title' => 'string|null',
        'url' => 'string|null',
    ],
    'commonmark\\node\\orderedlist' => [
        'delimiter' => 'int',
        'start' => 'int',
        'tight' => 'bool',
    ],
    'commonmark\\node\\text' => [
        'literal' => 'string|null',
    ],
    'curlfile' => [
        'mime' => 'string',
        'name' => 'string',
        'postname' => 'string',
    ],
    'curlstringfile' => [
        'data' => 'string',
        'mime' => 'string',
        'postname' => 'string',
    ],
    'dateinterval' => [
        'd' => 'int',
        'days' => 'false|int',
        'f' => 'float',
        'h' => 'int',
        'i' => 'int',
        'invert' => 'int',
        'm' => 'int',
        's' => 'int',
        'y' => 'int',
    ],
    'dateperiod' => [
        'current' => 'DateTimeInterface',
        'end' => 'DateTimeInterface',
        'include_start_date' => 'bool',
        'interval' => 'DateInterval',
        'recurrences' => 'int',
        'start' => 'DateTimeInterface',
    ],
    'directory' => [
        'handle' => 'resource',
        'path' => 'string',
    ],
    'domattr' => [
        'name' => 'string',
        'ownerelement' => 'DOMElement|null',
        'schematypeinfo' => 'mixed',
        'specified' => 'bool',
        'value' => 'string',
    ],
    'domcharacterdata' => [
        'data' => 'string',
        'length' => 'int',
        'nextelementsibling' => 'DOMElement|null',
        'previouselementsibling' => 'DOMElement|null',
    ],
    'domdocument' => [
        'actualencoding' => 'string|null',
        'childelementcount' => 'int',
        'config' => 'mixed',
        'doctype' => 'DOMDocumentType|null',
        'documentelement' => 'DOMElement|null',
        'documenturi' => 'string|null',
        'encoding' => 'string|null',
        'firstelementchild' => 'DOMElement|null',
        'formatoutput' => 'bool',
        'implementation' => 'DOMImplementation',
        'lastelementchild' => 'DOMElement|null',
        'preservewhitespace' => 'bool',
        'recover' => 'bool',
        'resolveexternals' => 'bool',
        'standalone' => 'bool',
        'stricterrorchecking' => 'bool',
        'substituteentities' => 'bool',
        'validateonparse' => 'bool',
        'version' => 'string|null',
        'xmlencoding' => 'string|null',
        'xmlstandalone' => 'bool',
        'xmlversion' => 'string|null',
    ],
    'domdocumentfragment' => [
        'childelementcount' => 'int',
        'firstelementchild' => 'DOMElement|null',
        'lastelementchild' => 'DOMElement|null',
    ],
    'domdocumenttype' => [
        'entities' => 'DOMNamedNodeMap',
        'internalsubset' => 'string|null',
        'name' => 'string',
        'notations' => 'DOMNamedNodeMap',
        'publicid' => 'string',
        'systemid' => 'string',
    ],
    'domelement' => [
        'childelementcount' => 'int',
        'firstelementchild' => 'DOMElement|null',
        'lastelementchild' => 'DOMElement|null',
        'nextelementsibling' => 'DOMElement|null',
        'previouselementsibling' => 'DOMElement|null',
        'schematypeinfo' => 'mixed',
        'tagname' => 'string',
    ],
    'domentity' => [
        'actualencoding' => 'string|null',
        'encoding' => 'string|null',
        'notationname' => 'string|null',
        'publicid' => 'string|null',
        'systemid' => 'string|null',
        'version' => 'string|null',
    ],
    'domexception' => [
        'code' => 'int',
    ],
    'domnamednodemap' => [
        'length' => 'int',
    ],
    'domnode' => [
        'attributes' => 'DOMNamedNodeMap|null',
        'baseuri' => 'string|null',
        'childnodes' => 'DomNodeList<DomNode>',
        'firstchild' => 'DOMNode|null',
        'lastchild' => 'DOMNode|null',
        'localname' => 'string|null',
        'namespaceuri' => 'string|null',
        'nextsibling' => 'DOMNode|null',
        'nodename' => 'string',
        'nodetype' => 'int',
        'nodevalue' => 'string|null',
        'ownerdocument' => 'DOMDocument|null',
        'parentnode' => 'DOMNode|null',
        'prefix' => 'string',
        'previoussibling' => 'DOMNode|null',
        'textcontent' => 'string',
    ],
    'domnodelist' => [
        'length' => 'int',
    ],
    'domnotation' => [
        'publicid' => 'string',
        'systemid' => 'string',
    ],
    'domprocessinginstruction' => [
        'data' => 'string',
        'target' => 'string',
    ],
    'domtext' => [
        'wholetext' => 'string',
    ],
    'domxpath' => [
        'document' => 'DOMDocument',
        'registernodenamespaces' => 'bool',
    ],
    'error' => [
        'code' => 'int',
        'file' => 'string',
        'line' => 'int',
        'message' => 'string',
        'previous' => 'Throwable|null',
        'string' => 'string',
        'trace' => 'array',
    ],
    'errorexception' => [
        'severity' => 'int',
    ],
    'event' => [
        'pending' => 'bool',
    ],
    'eventbuffer' => [
        'contiguous_space' => 'int',
        'length' => 'int',
    ],
    'eventbufferevent' => [
        'fd' => 'int',
        'input' => 'EventBuffer',
        'output' => 'EventBuffer',
        'priority' => 'int',
    ],
    'eventlistener' => [
        'fd' => 'int',
    ],
    'eventsslcontext' => [
        'local_cert' => 'string',
        'local_pk' => 'string',
    ],
    'exception' => [
        'code' => 'int',
        'file' => 'string',
        'line' => 'int',
        'message' => 'string',
        'previous' => 'Throwable|null',
        'string' => 'string',
        'trace' => 'array',
    ],
    'libxmlerror' => [
        'code' => 'int',
        'column' => 'int',
        'file' => 'string',
        'level' => 'int',
        'line' => 'int',
        'message' => 'string',
    ],
    'mongoclient' => [
        'connected' => 'boolean',
        'status' => 'string',
    ],
    'mongocollection' => [
        'db' => 'MongoDB',
        'w' => 'integer',
        'wtimeout' => 'integer',
    ],
    'mongocursor' => [
        'slaveokay' => 'boolean',
        'timeout' => 'integer',
    ],
    'mongodb' => [
        'w' => 'integer',
        'wtimeout' => 'integer',
    ],
    'mongodb-driver-exception-writeexception' => [
        'writeresult' => 'MongoDBDriverWriteResult',
    ],
    'mongodb\\driver\\exception\\commandexception' => [
        'resultdocument' => 'object',
    ],
    'mongodb\\driver\\exception\\runtimeexception' => [
        'errorlabels' => 'array|null',
    ],
    'mongodb\\driver\\exception\\writeexception' => [
        'writeresult' => 'MongoDB\\Driver\\WriteResult',
    ],
    'mongoid' => [
        'id' => 'string',
    ],
    'mongoint32' => [
        'value' => 'string',
    ],
    'mongoint64' => [
        'value' => 'string',
    ],
    'mysqli' => [
        'affected_rows' => 'int|string',
        'client_info' => 'string',
        'client_version' => 'int',
        'connect_errno' => 'int',
        'connect_error' => 'string|null',
        'errno' => 'int',
        'error' => 'string',
        'error_list' => 'array',
        'field_count' => 'int',
        'host_info' => 'string',
        'info' => 'string|null',
        'insert_id' => 'int|string',
        'protocol_version' => 'int',
        'server_info' => 'string',
        'server_version' => 'int',
        'sqlstate' => 'string',
        'thread_id' => 'int',
        'warning_count' => 'int',
    ],
    'mysqli_driver' => [
        'client_info' => 'string',
        'client_version' => 'int',
        'driver_version' => 'int',
        'embedded' => 'bool',
        'reconnect' => 'bool',
        'report_mode' => 'int',
    ],
    'mysqli_result' => [
        'current_field' => 'int',
        'field_count' => 'int',
        'lengths' => 'array|null',
        'num_rows' => 'int|string',
        'type' => 'int',
    ],
    'mysqli_sql_exception' => [
        'sqlstate' => 'string',
    ],
    'mysqli_stmt' => [
        'affected_rows' => 'int|string',
        'errno' => 'int',
        'error' => 'string',
        'error_list' => 'array',
        'field_count' => 'int',
        'id' => 'int',
        'insert_id' => 'int|string',
        'num_rows' => 'int|string',
        'param_count' => 'int',
        'sqlstate' => 'string',
    ],
    'mysqli_warning' => [
        'errno' => 'int',
        'message' => 'string',
        'sqlstate' => 'string',
    ],
    'parallel\\events\\event' => [
        'object' => 'object',
        'source' => 'string',
        'type' => 'int',
    ],
    'parle\\errorinfo' => [
        'id' => 'int',
        'position' => 'int',
        'token' => 'mixed',
    ],
    'parle\\lexer' => [
        'bol' => 'bool',
        'cursor' => 'int',
        'flags' => 'int',
        'marker' => 'int',
        'state' => 'int',
    ],
    'parle\\parser' => [
        'action' => 'int',
        'reduceid' => 'int',
    ],
    'parle\\rlexer' => [
        'bol' => 'bool',
        'cursor' => 'int',
        'flags' => 'int',
        'marker' => 'int',
        'state' => 'int',
    ],
    'parle\\rparser' => [
        'action' => 'int',
        'reduceid' => 'int',
    ],
    'parle\\stack' => [
        'empty' => 'bool',
        'size' => 'int',
        'top' => 'mixed',
    ],
    'parle\\token' => [
        'id' => 'int',
        'value' => 'string',
    ],
    'pdoexception' => [
        'code' => 'int|string',
        'errorinfo' => 'array|null',
    ],
    'pdostatement' => [
        'querystring' => 'string',
    ],
    'php_user_filter' => [
        'filtername' => 'string',
        'params' => 'mixed',
        'stream' => 'resource|null',
    ],
    'phpparser\\node\\expr\\array_' => [
        'items' => 'array<int, PhpParser\\Node\\Expr\\ArrayItem|null>',
    ],
    'phpparser\\node\\expr\\arrowfunction' => [
        'params' => 'list<PhpParser\\Node\\Param>',
    ],
    'phpparser\\node\\expr\\closure' => [
        'params' => 'list<PhpParser\\Node\\Param>',
    ],
    'phpparser\\node\\expr\\list_' => [
        'items' => 'array<int, PhpParser\\Node\\Expr\\ArrayItem|null>',
    ],
    'phpparser\\node\\expr\\shellexec' => [
        'parts' => 'list<PhpParser\\Node>',
    ],
    'phpparser\\node\\matcharm' => [
        'conds' => 'null|non-empty-list<PhpParser\\Node\\Expr>',
    ],
    'phpparser\\node\\name' => [
        'parts' => 'non-empty-list<non-empty-string>',
    ],
    'phpparser\\node\\stmt\\case_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\catch_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\class_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\do_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\else_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\elseif_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\finally_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\for_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\foreach_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\if_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\interface_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\namespace_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\trait_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\trycatch' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phpparser\\node\\stmt\\while_' => [
        'stmts' => 'list<PhpParser\\Node\\Stmt>',
    ],
    'phptoken' => [
        'id' => 'int',
        'line' => 'int',
        'pos' => 'int',
        'text' => 'string',
    ],
    'rdkafka\\message' => [
        'err' => 'int',
        'headers' => 'array<string, string>|null',
        'key' => 'string|null',
        'offset' => 'int',
        'partition' => 'int',
        'payload' => 'string',
        'timestamp' => 'int',
        'topic_name' => 'string',
    ],
    'reflectionclass' => [
        'name' => 'string',
    ],
    'reflectionclassconstant' => [
        'class' => 'string',
        'name' => 'string',
    ],
    'reflectionextension' => [
        'name' => 'string',
    ],
    'reflectionfunctionabstract' => [
        'name' => 'string',
    ],
    'reflectionmethod' => [
        'class' => 'string',
    ],
    'reflectionparameter' => [
        'name' => 'string',
    ],
    'reflectionproperty' => [
        'class' => 'string',
        'name' => 'string',
    ],
    'reflectionzendextension' => [
        'name' => 'string',
    ],
    'regexiterator' => [
        'replacement' => 'string|null',
    ],
    'snmp' => [
        'enum_print' => 'bool',
        'exceptions_enabled' => 'int',
        'info' => 'array',
        'max_oids' => 'int|null',
        'oid_increasing_check' => 'bool',
        'oid_output_format' => 'int',
        'quick_print' => 'bool',
        'valueretrieval' => 'int',
    ],
    'snmpexception' => [
        'code' => 'string',
    ],
    'soapclient' => [
        '__default_headers' => 'array|null',
        '__last_request' => 'string|null',
        '__last_request_headers' => 'string|null',
        '__last_response' => 'string|null',
        '__last_response_headers' => 'string|null',
        '__soap_fault' => 'SoapFault|null',
        '_classmap' => 'array|null',
        '_connection_timeout' => 'int',
        '_cookies' => 'array',
        '_digest' => 'string|null',
        '_encoding' => 'string|null',
        '_exceptions' => 'bool',
        '_features' => 'int|null',
        '_keep_alive' => 'bool',
        '_login' => 'string|null',
        '_password' => 'string|null',
        '_proxy_host' => 'string|null',
        '_proxy_login' => 'string|null',
        '_proxy_password' => 'string|null',
        '_proxy_port' => 'int|null',
        '_soap_version' => 'int',
        '_ssl_method' => 'int|null',
        '_stream_context' => 'resource|null',
        '_use_digest' => 'bool',
        '_use_proxy' => 'int|null',
        '_user_agent' => 'string|null',
        'compression' => 'int|null',
        'httpsocket' => 'resource|null',
        'httpurl' => 'resource|null',
        'location' => 'string|null',
        'sdl' => 'resource|null',
        'style' => 'int|null',
        'trace' => 'bool',
        'typemap' => 'resource|null',
        'uri' => 'string|null',
        'use' => 'int|null',
    ],
    'soapfault' => [
        '_name' => 'string|null',
        'detail' => 'mixed',
        'faultactor' => 'string|null',
        'faultcode' => 'string|null',
        'faultcodens' => 'string|null',
        'faultstring' => 'string',
        'headerfault' => 'mixed',
    ],
    'soapheader' => [
        'actor' => 'string|int|null',
        'data' => 'mixed',
        'mustunderstand' => 'bool',
        'name' => 'string',
        'namespace' => 'string',
    ],
    'soapparam' => [
        'param_data' => 'mixed',
        'param_name' => 'string',
    ],
    'soapserver' => [
        '__soap_fault' => 'SoapFault|null',
        'service' => 'resource',
    ],
    'soapvar' => [
        'enc_name' => 'string|null',
        'enc_namens' => 'string|null',
        'enc_ns' => 'string|null',
        'enc_stype' => 'string|null',
        'enc_type' => 'int',
        'enc_value' => 'mixed',
    ],
    'solrdocumentfield' => [
        'boost' => 'float',
        'name' => 'string',
        'values' => 'array',
    ],
    'solrexception' => [
        'sourcefile' => 'string',
        'sourceline' => 'int',
        'zif_name' => 'string',
    ],
    'solrresponse' => [
        'http_digested_response' => 'string',
        'http_raw_request' => 'string',
        'http_raw_request_headers' => 'string',
        'http_raw_response' => 'string',
        'http_raw_response_headers' => 'string',
        'http_request_url' => 'string',
        'http_status' => 'int',
        'http_status_message' => 'string',
        'parser_mode' => 'int',
        'success' => 'bool',
    ],
    'streamwrapper' => [
        'context' => 'resource',
    ],
    'tidy' => [
        'errorbuffer' => 'string',
    ],
    'tidynode' => [
        'attribute' => 'array',
        'child' => 'array',
        'column' => 'int',
        'id' => 'int',
        'line' => 'int',
        'name' => 'string',
        'proprietary' => 'bool',
        'type' => 'int',
        'value' => 'string',
    ],
    'tokyotyrantexception' => [
        'code' => 'int',
    ],
    'transliterator' => [
        'id' => 'string',
    ],
    'xmlreader' => [
        'attributecount' => 'int',
        'baseuri' => 'string',
        'depth' => 'int',
        'hasattributes' => 'bool',
        'hasvalue' => 'bool',
        'isdefault' => 'bool',
        'isemptyelement' => 'bool',
        'localname' => 'string',
        'name' => 'string',
        'namespaceuri' => 'string',
        'nodetype' => 'int',
        'prefix' => 'string',
        'value' => 'string',
        'xmllang' => 'string',
    ],
    'ziparchive' => [
        'comment' => 'string',
        'filename' => 'string',
        'lastid' => 'int',
        'numfiles' => 'int',
        'status' => 'int',
        'statussys' => 'int',
    ],
];
