<?php
namespace App\Auth;

use Framework\Module;
use Framework\Router;
use App\Auth\LoginAction;
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
      Router $router ,
      RendererInterface $renderer,
      string $prefix
      )
    {
      $renderer->addPath('Auth', self::VIEWS);
    }
}
