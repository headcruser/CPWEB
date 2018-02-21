<?php
namespace App\CPWEB\Actions;

use Framework\Router;
use Framework\RouterAwareAction;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\CPWEB\Table\ClienteRepository;

class CPWEBAction
{
    private $renderer;

    private $cliente;

    public function __construct(RendererInterface $renderer,Router $router, ClienteRepository $cliente)
    {
        $this->renderer=$renderer;
        $this->cliente=$cliente;
    }

    public function __invoke(Request $request)
    {
        $method=$request->getAttribute('slug');
        if(!$method)
            return $this->index();

        if (method_exists($this,$method)) {
            return $this->$method($request);
        }
        return '404';
    }

    public function index():string
    {
        return $this->renderer->render('@CPWEB/index');
    }

    public function show(Request $request):string
    {
        echo '<pre>';
        print_r($this->cliente->findPaginated());
        return '';
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
