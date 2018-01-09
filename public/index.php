<?php
define('DS', DIRECTORY_SEPARATOR);
define('DIR_SYSTEM', dirname(__DIR__, 1).DS);
define('VENDOR', DIR_SYSTEM.'vendor'.DS.'autoload.php');
define('DOCUMENT_ROOT', dirname('.').DS);
define('INDEX', 'http://localhost:8090/CPWEB'.'/');

//SMARTY
define('TEMPLATE', DIR_SYSTEM.'templates'.DS);
define('TEMP_C', DIR_SYSTEM.'cache'.DS."templates_c".DS);
define('CACHE', DIR_SYSTEM.'cache'.DS);
//PUBLIC RESOURCES
define('CSS', DOCUMENT_ROOT.'css'.DS);
define('JS', DOCUMENT_ROOT.'js'.DS);
define('IMG', DOCUMENT_ROOT.'image'.DS);
define('TEMPLATES', DOCUMENT_ROOT.'templates'.DS);

require(VENDOR);

$app = new \Framework\App();
$response =$app->run(\GuzzleHttp\Psr7\ServerRequest ::fromGlobals());
\Http\Response\send($response); //Send Response
