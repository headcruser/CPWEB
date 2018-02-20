<?php
namespace App\CPWEB;

use Framework\Router;
use Framework\Module;
use App\CPWEB\Actions\CPWEBAction;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CPWEBModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';

    public function __construct(string $prefix,Router $router, RendererInterface $renderer)
    {
        $renderer->addPath('CPWEB', self::VIEWS);
        $router->get('/CPWEB',CPWEBAction::class, 'CPWEB.index');
        $router->get('/CPWEB/{slug:[a-z\-0-9]+}', CPWEBAction::class, 'CPWEB.show');
        $renderer->addGlobal('router', $router);
    }
}
