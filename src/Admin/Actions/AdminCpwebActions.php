<?php
namespace App\Admin\Actions;

use Framework\Router;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\CPWEB\Table\ClienteRepository;
use Framework\Actions\RouterAwareAction;
class AdminCpwebActions
{
    use RouterAwareAction;

    private $renderer;
    private $cliente;
    private $router;

    public function __construct(RendererInterface $renderer,Router $router, ClienteRepository $cliente)
    {
        $this->renderer=$renderer;
        $this->cliente=$cliente;
        $this->router=$router;
    }

    public function __invoke(Request $request)
    {
        if($request->getMethod()==='DELETE'){
            return $this->delete($request);
        }
        if(substr((string)$request->getUri(),-3 )==='new'){
           return $this->create($request);
        }
       if($request->getAttribute('id')){
           return $this->editar($request);
       }
       return $this->index();
    }

    public function index():string
    {
        $this->renderer->assign('clientes',$this->cliente->findPaginated());
        return $this->renderer->render('@ADMIN/listarClientes');
    }

    public function editar(Request $request)
    {
        $cliente = $this->cliente->find($request->getAttribute('id'));
        $this->renderer->assign('cliente',$cliente);

        if( $request->getMethod()=='POST' )
        {
            $params = $this->getParams($request);

            $this->cliente->update($cliente->id_cliente,$params);

            return $this->redirect('admin.clientes.index');
        }
        return $this->renderer->render('@ADMIN/editar');
    }

    public function create(Request $request)
    {
        if( $request->getMethod()=='POST' )
        {
            $params = $this->getParams($request);

            $this->cliente->insert($params);

            return $this->redirect('admin.clientes.index');
        }
         return $this->renderer->render('@ADMIN/crear');
    }
    public function delete(Request $request)
    {
        $this->cliente->delete($request->getAttribute('id'));
        return $this->redirect('admin.clientes.index');
    }

    private function getParams(Request $request)
    {
        return array_filter($request->getParsedBody(),function($key){
            return in_array($key,[
                'razon_social',
                'rfc',
                'domicilio',
                'correo',
                'telefono',
                'id_tipo',
                'id_estado',
                'id_usuario'
            ]);
        },ARRAY_FILTER_USE_KEY);
    }
}
