<?php
define('DS', DIRECTORY_SEPARATOR);
define('VENDOR', dirname(__DIR__, 1).DS.'vendor'.DS.'autoload.php');
require(VENDOR);

use GuzzleHttp\Psr7\ServerRequest;
use function Http\Response\send;

$app = new \Framework\App();
$response =$app->run(ServerRequest ::fromGlobals());

// Send Response
send($response);
