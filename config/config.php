<?php
use Framework\Router;
use Framework\Session\PHPSession;
use Framework\Session\ArraySession;
use Framework\Session\FlashService;
use Framework\Session\SessionInterface;
use Framework\Renderer\RendererInterface;
use Framework\Renderer\Plugins\SmartyFlash;
use Framework\Renderer\Plugins\SmartyRouter;
use Framework\Renderer\Plugins\SmartyPagination;
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
    'smarty.plugins'=>[
        \DI\get(SmartyFlash::class),
        \DI\get(SmartyPagination::class),
        \DI\get(SmartyRouter::class)
    ],
    SessionInterface::class=>\DI\object(ArraySession::class),
    Router::class=>\DI\object(),
    RendererInterface::class=> \DI\factory(SmartyRendererFactory::class),
    \PDO::class=>function(\Psr\Container\ContainerInterface $c){
        return new \PDO('mysql:host='.$c->get('database.host').
                        ';dbname='.$c->get('database.name'),
                         $c->get('database.user'),
                         $c->get('database.password'),
                         [
                            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                        ]);
    }
];
