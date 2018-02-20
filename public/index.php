<?php
require(dirname(__DIR__, 1).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');
// SYSTEM
define('DS', DIRECTORY_SEPARATOR);
define('PATH', dirname(__DIR__, 1).DS);

//PUBLIC RESOURCES
define('CSS', '.'.DS.'css'.DS);
define('JS', '.'.DS.'js'.DS);
define('IMG', '.'.DS.'image'.DS);
define('TEMPLATES', '.'.DS.'templates'.DS);

$modules = [
    \App\CPWEB\CPWEBModule::class
];

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(dirname(__DIR__).'/config/config.php');
$builder->addDefinitions(dirname(__DIR__).'/config.php');
foreach($modules as $module)
{
    if($module::DEFINITIONS){
        $builder->addDefinitions($module::DEFINITIONS);
    }
}
$container = $builder->build();

$app = new \Framework\App($container, $modules);

if(php_sapi_name()!=='cli'){
    $response =$app->run(\GuzzleHttp\Psr7\ServerRequest ::fromGlobals());
    \Http\Response\send($response); //Send Response
}
