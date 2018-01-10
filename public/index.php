<?php
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

$app = new \Framework\App();
$response =$app->run(\GuzzleHttp\Psr7\ServerRequest ::fromGlobals());
\Http\Response\send($response); //Send Response
