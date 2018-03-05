<?php
namespace App\Admin;

use Framework\Module;
use Framework\Router;
use App\Admin\Actions\DashBoardAction;
use Framework\Renderer\RendererInterface;

class AdminModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';

    public function __construct(
        RendererInterface $renderer,
        Router $router,
        string $prefix)
    {
        $renderer->addPath('ADMIN', self::VIEWS);
        $router->get($prefix,DashBoardAction::class,'admin');
    }
}