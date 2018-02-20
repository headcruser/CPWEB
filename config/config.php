<?php
use Framework\Renderer\RendererInterface;
use Framework\Renderer\SmartyRendererFactory;


// //DATABASE
// define('PORT', '3306');
// define('HOST', 'localhost');
// define('NAME', 'development_db');
// define('USER', 'root');
// define('PASS', 'admin120324');
// define('ENGINE', 'mysql');
// define('CHARSET', 'utf8');

require(dirname(__DIR__, 1).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

return [
    'templates'=> dirname(__DIR__, 1).'/templates/',
    'templates_c'=> dirname(__DIR__, 1).'/cache/templates_c/',
    'cache'=> dirname(__DIR__, 1).'/cache/',
    'pdo'=>new PDO('mysql:host=localhost;dbname=blog', 'root','admin120324',[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]),
    \Framework\Router::class=>\DI\object(),
    RendererInterface::class=> \DI\factory(SmartyRendererFactory::class)
];
