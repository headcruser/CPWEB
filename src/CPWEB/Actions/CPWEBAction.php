<?php
namespace App\CPWEB\Actions;

use Psr\Http\Message\ServerRequestInterface as Request;
use Framework\Renderer\RendererInterface;

class CPWEBAction
{
    private $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer=$renderer;
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
        return 'hi';
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
