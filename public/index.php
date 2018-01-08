<?php
define('DS', DIRECTORY_SEPARATOR);
define('VENDOR', dirname(__DIR__, 1).DS.'vendor'.DS.'autoload.php');
require(VENDOR);

use GuzzleHttp\Psr7\ServerRequest;
use function Http\Response\send;
use App\CPWEB\CPWEBModule;

$renderer=new \Framework\Renderer();
$renderer->addPath(dirname(__DIR__).'/views');
$app = new \Framework\App(
    [CPWEBModule::class],
    ['renderer'=>$renderer]
);
$response =$app->run(ServerRequest ::fromGlobals());

// Send Response
send($response);
