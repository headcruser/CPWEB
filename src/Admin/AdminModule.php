<?php
namespace App\Admin;

use App\Admin\Actions\DashBoardAction;
use App\Admin\Actions\TipoCrudActions;
use App\Admin\Actions\EstadoCrudActions;
use App\Admin\Actions\ClientesCrudActions;
use App\Admin\Actions\UsuariosCrudActions;
use Framework\Module;
use Framework\Router;
use Framework\Renderer\RendererInterface;
use Psr\Container\ContainerInterface;

class AdminModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';

    public function __construct(
        ContainerInterface $container,
        RendererInterface $renderer,
        Router $router,
        string $prefix
    ) {
        $renderer->addPath('ADMIN', self::VIEWS);
        $router->get($prefix, DashBoardAction::class, 'admin');

        if ($container->has('admin.prefix')) {
            $prefix = $container->get('admin.prefix');
            $router->crud("$prefix/clientes", ClientesCrudActions::class, 'admin.clientes');
            $router->crud("$prefix/usuarios", UsuariosCrudActions::class, 'admin.usuarios');
            $router->crud("$prefix/tipo", TipoCrudActions::class, 'admin.tipo');
            $router->crud("$prefix/estado", EstadoCrudActions::class, 'admin.estado');
        }
    }
}
