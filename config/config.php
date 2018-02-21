<?php
use Framework\Renderer\RendererInterface;
use Framework\Renderer\SmartyRendererFactory;

require(dirname(__DIR__, 1).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

return [
    'database.host'=>'localhost',
    'database.user'=>'root',
    'database.password'=>'admin120324',
    'database.name'=>'development_db',
    'database.port'=>'3306',
    'templates'=> dirname(__DIR__, 1).'/templates/',
    'templates_c'=> dirname(__DIR__, 1).'/cache/templates_c/',
    'cache'=> dirname(__DIR__, 1).'/cache/',
    \Framework\Router::class=>\DI\object(),
    RendererInterface::class=> \DI\factory(SmartyRendererFactory::class),
    \PDO::class=>new \PDO('mysql:host='.'localhost'.
                        ';dbname='.'development_db',
                         'root',
                         'admin120324',
                         [
                            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                        ])
];
