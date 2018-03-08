<?php
// SYSTEM
define('DS', DIRECTORY_SEPARATOR);
define('PATH', dirname(__DIR__, 1).DS);
//PUBLIC RESOURCES
define('CSS', '.'.DS.'css'.DS);
define('JS', '.'.DS.'js'.DS);
define('IMG', '.'.DS.'image'.DS);

require(PATH.'vendor'.DS.'autoload.php');

use Framework\Middleware\{
    MethodMiddleware,
    RouterMiddleware,
    NotFoundMiddleware,
    DispacherMiddleware,
    TrailingSlashMiddleware
};

$app = (new \Framework\App(PATH.'config/config.php'))
    ->addModule(\App\Admin\AdminModule::class)
    ->addModule(\App\CPWEB\CPWEBModule::class)
        ->pipe(TrailingSlashMiddleware::class)
        ->pipe(MethodMiddleware::class)
        ->pipe(RouterMiddleware::class)
        ->pipe(DispacherMiddleware::class)
        ->pipe(NotFoundMiddleware::class);

if (php_sapi_name()!=='cli') {
    $response =$app->run(\GuzzleHttp\Psr7\ServerRequest ::fromGlobals());
    \Http\Response\send($response); //Send Response
}
