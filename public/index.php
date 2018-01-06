<?php

define ('DS',DIRECTORY_SEPARATOR);
define ('VENDOR', dirname(__DIR__,1).DS.'vendor'.DS.'autoload.php');
require( VENDOR );
$app = new \Framework\App();
$app->run();
