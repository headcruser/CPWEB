<?php
namespace App\CPWEB;

use Framework\Router;
use Framework\Module;
use Framework\Renderer\RendererInterface;
use App\CPWEB\Actions\CPWEBAction;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CPWEBModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';
    const MIGRATIONS=__DIR__.'/db/migrations';
    const SEEDS=__DIR__.'/db/seeds';

    public function __construct(
        ContainerInterface $container,
        Router $router,
        RendererInterface $renderer
    ) {
        $router->get($container->get('cpweb.prefix'), CPWEBAction::class, 'CPWEB.index');
        $router->get($container->get('cpweb.prefix').'/{slug:[a-z\-0-9]+}', CPWEBAction::class, 'CPWEB.show');

        $renderer->addPath('CPWEB', self::VIEWS);
    }
}
