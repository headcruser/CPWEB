<?php
namespace App\CPWEB;

use App\CPWEB\Actions\CPWEBAction;
use App\Admin\Actions\ClientesCrudActions;
use Framework\Router;
use Framework\Module;
use Psr\Container\ContainerInterface;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CPWEBModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';
    const MIGRATIONS=__DIR__.'/db/migrations';
    const SEEDS=__DIR__.'/db/seeds';

    public function __construct(ContainerInterface $container)
    {
        $renderer=$container->get(RendererInterface::class);
        $router=$container->get(Router::class);

        // /{slug:[a-z\-0-9]+}/{id:[0-9]+}
        $router->get($container->get('cpweb.prefix'), CPWEBAction::class, 'CPWEB.index');
        $router->get($container->get('cpweb.prefix').'/{slug:[a-z\-0-9]+}', CPWEBAction::class, 'CPWEB.show');

        $renderer->addPath('CPWEB', self::VIEWS);
        $renderer->addGlobal('router', $router);

        if($container->has('admin.prefix'))
        {
            $prefix=$container->get('admin.prefix');
            $router->crud("$prefix/clientes", ClientesCrudActions::class, 'admin.clientes');
        }
    }
}
