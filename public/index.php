<?php
define('DS', DIRECTORY_SEPARATOR);
define('DIR_SYSTEM', dirname(__DIR__, 1).DS);
define('VENDOR', DIR_SYSTEM.'vendor'.DS.'autoload.php');
define('DOCUMENT_ROOT', dirname('..').DS);

//SMARTY
define('TEMPLATE', DIR_SYSTEM.'templates'.DS);
define('TEMP_C', TEMPLATE."templates_c".DS);
define('CACHE', DIR_SYSTEM.'cache'.DS);

//PUBLIC RESOURCES
define('CSS', DOCUMENT_ROOT.'css'.DS);
define('JS', DOCUMENT_ROOT.'js'.DS);
define('IMG', DOCUMENT_ROOT.'image'.DS);
define('TEMPLATES', DOCUMENT_ROOT.'templates'.DS);

require(VENDOR);
use GuzzleHttp\Psr7\ServerRequest;
use function Http\Response\send;
use App\CPWEB\CPWEBModule;
use Framework\Renderer\SmartyRenderer;

$renderer=new \Framework\Renderer\SmartyRenderer();


//Default Rute Smarty
$renderer->addPath(TEMPLATE);
$app = new \Framework\App(
    [CPWEBModule::class],
    ['renderer'=>$renderer]
);
$response =$app->run(ServerRequest ::fromGlobals());

// Send Response
send($response);
