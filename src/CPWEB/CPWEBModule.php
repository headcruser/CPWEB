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
    const VIEWS= __DIR__.DS.'views';

    public function __construct(Router $router, RendererInterface $renderer)
    {
        $renderer->addPath('CPWEB', self::VIEWS);
        $action=new CPWEBAction($renderer);
        $router->get('/CPWEB', [ $action,'index'], 'CPWEB.index');
        //$router->get('/CPWEB/{slug:[a-z\-0-9]+}', [ $action,'show'], 'CPWEB.show');
        $router->get('/CPWEB/{id:\d+}', [ $action,'show'], 'CPWEB.show');
        $router->get('/CPWEB/alianzas', [ $action,'alianzas'], 'CPWEB.alianzas');
        $router->get('/CPWEB/asesoria', [ $action,'asesoria'], 'CPWEB.asesoria');
        $router->get('/CPWEB/auditoria', [ $action,'auditoria'], 'CPWEB.auditoria');
        $router->get('/CPWEB/bolsa', [ $action,'bolsa'], 'CPWEB.bolsa');
        $router->get('/CPWEB/contabilidad', [ $action,'contabilidad'], 'CPWEB.contabilidad');
        $router->get('/CPWEB/contacto', [ $action,'contacto'], 'CPWEB.contacto');
        $router->get('/CPWEB/nomina', [ $action,'nomina'], 'CPWEB.nomina');
        $router->get('/CPWEB/planeacion', [ $action,'planeacion'], 'CPWEB.planeacion');
        $router->get('/CPWEB/quienes', [ $action,'quienes'], 'CPWEB.quienes');
    }
}
