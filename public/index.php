<?php
// SYSTEM
define('DS', DIRECTORY_SEPARATOR);
//PUBLIC RESOURCES
define('CSS', '.'.DS.'css'.DS);
define('JS', '.'.DS.'js'.DS);
define('IMG', '.'.DS.'image'.DS);

chdir(dirname(__DIR__));
require('vendor/autoload.php');

use Framework\Middleware\MethodMiddleware;
use Framework\Middleware\RouterMiddleware;
use Framework\Middleware\NotFoundMiddleware;
use Framework\Middleware\DispacherMiddleware;
use Framework\Middleware\TrailingSlashMiddleware;

$app = (new \Framework\App('config/config.php'))
    ->addModule(\App\Admin\AdminModule::class)
    ->addModule(\App\CPWEB\CPWEBModule::class)
    ->addModule(\App\Auth\AuthModule::class)
        ->pipe(TrailingSlashMiddleware::class)
        ->pipe(MethodMiddleware::class)
        ->pipe(RouterMiddleware::class)
        ->pipe(DispacherMiddleware::class)
        ->pipe(NotFoundMiddleware::class);

if (php_sapi_name()!=='cli') {
    $response =$app->run(\GuzzleHttp\Psr7\ServerRequest ::fromGlobals());
    \Http\Response\send($response); //Send Response
}
