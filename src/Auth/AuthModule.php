<?php
namespace App\Auth;

use Framework\Module;
use Framework\Router;

use App\Auth\Actions\LoginAction;
use App\Auth\Actions\LoginAttemptAction;
use App\Auth\Actions\LogoutAction;

use Psr\Container\ContainerInterface;
use Framework\Renderer\RendererInterface;

class AuthModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';
    const MIGRATIONS=__DIR__.'/db/migrations';
    const SEEDS=__DIR__.'/db/seeds';

    public function __construct(
        ContainerInterface $container,
        Router $router,
        RendererInterface $renderer,
        string $prefix
    ) {
        $renderer->addPath('Auth', self::VIEWS);
        if ($container->has('auth.login')) {
            $prefix = $container->get('auth.login');
            $router->get($prefix, LoginAction::class, 'auth.login');
            $router->post($prefix, LoginAttemptAction::class);
            $router->post('/logout', LogoutAction::class, 'auth.logout');
        }
    }
}
