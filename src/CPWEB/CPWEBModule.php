<?php
namespace App\CPWEB;

use Framework\Router;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CPWEBModule
{
    private $renderer;
    public function __construct(Router $router, RendererInterface $renderer)
    {
        $this->renderer=$renderer;
        $this->renderer->addPath('CPWEB', __DIR__.DS.'views');
        $router->get('/CPWEB', [ $this,'index'], 'CPWEB.index');
        // $router->get('/CPWEB', [ $this,'index'], 'CPWEB.index');
        //$router->get('/CPWEB/{slug:[a-z\-0-9]+}', [ $this,'show'], 'CPWEB.show');
        $router->get('/CPWEB/{id:\d+}', [ $this,'show'], 'CPWEB.show');
        $router->get('/CPWEB/alianzas', [ $this,'alianzas'], 'CPWEB.alianzas');
        $router->get('/CPWEB/asesoria', [ $this,'asesoria'], 'CPWEB.asesoria');
        $router->get('/CPWEB/auditoria', [ $this,'auditoria'], 'CPWEB.auditoria');
        $router->get('/CPWEB/bolsa', [ $this,'bolsa'], 'CPWEB.bolsa');
        $router->get('/CPWEB/contabilidad', [ $this,'contabilidad'], 'CPWEB.contabilidad');
        $router->get('/CPWEB/contacto', [ $this,'contacto'], 'CPWEB.contacto');
        $router->get('/CPWEB/nomina', [ $this,'nomina'], 'CPWEB.nomina');
        $router->get('/CPWEB/planeacion', [ $this,'planeacion'], 'CPWEB.planeacion');
        $router->get('/CPWEB/quienes', [ $this,'quienes'], 'CPWEB.quienes');

    }

    public function index():string
    {
        return $this->renderer->render('@CPWEB/index');
    }

    public function show(Request $request):string
    {
        // return $this->renderer->render('@CPWEB/show', [
        //     'slug'=>$request->getAttribute('slug')
        // ]);
        return 'hi '.$request->getAttribute('id');
    }

    public function alianzas():string
    {
        return $this->renderer->render('@CPWEB/alianzas');
    }

    public function asesoria():string
    {
        return $this->renderer->render('@CPWEB/asesoriaLegal');
    }

    public function auditoria():string
    {
        return $this->renderer->render('@CPWEB/auditoria');
    }

    public function bolsa():string
    {
        return $this->renderer->render('@CPWEB/bolsaTrabajo');
    }

    public function contabilidad():string
    {
        return $this->renderer->render('@CPWEB/contabilidad');
    }

    public function contacto():string
    {
        return $this->renderer->render('@CPWEB/contacto');
    }

    public function nomina():string
    {
        return $this->renderer->render('@CPWEB/nomina');
    }

    public function planeacion():string
    {
        return $this->renderer->render('@CPWEB/planeacionFinanciera');
    }

    public function quienes():string
    {
        return $this->renderer->render('@CPWEB/quienes');
    }
}
