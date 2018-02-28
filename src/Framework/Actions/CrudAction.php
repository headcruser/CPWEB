<?php
namespace Framework\Actions;

use Framework\Router;
use Framework\Session\FlashService;
use Framework\Renderer\RendererInterface;
use Framework\Actions\RouterAwareAction;
use Psr\Http\Message\ServerRequestInterface as Request;

class CrudAction
{
    use RouterAwareAction;

    private $renderer;
    private $table;
    private $router;
    private $flash;

    protected $pathView; //@ADMIN

    protected $routerPrefix; //admin.clientes smarty

    protected $messages = [
        'create' =>'Elemento creado Correctamente',
        'edit' =>'Elemento Actualizado Correctamente'
    ];

    public function __construct(
        RendererInterface $renderer,
        Router $router,
        $table,
        FlashService $flash
    ){
        $this->renderer = $renderer;
        $this->table = $table;
        $this->router = $router;
        $this->flash = $flash;
    }

    public function __invoke(Request $request)
    {
        $this->renderer->addGlobal('viewPrefix',$this->pathView);
        $this->renderer->addGlobal('routerPrefix',$this->routerPrefix);

        if($request->getMethod()==='DELETE'){
            return $this->delete($request);
        }
        if(substr((string)$request->getUri(),-3 )==='new'){
           return $this->create($request);
        }
       if($request->getAttribute('id')){
           return $this->editar($request);
       }
       return $this->index($request);
    }

    /**
     * List Elements
     * @param Request $request
     * @return string
     */
    public function index(Request $request):string
    {
        $params=$request->getQueryParams();
        $clientes=$this->cliente->findPaginated(10,$params['p']?? 1);
        $paginacion = new TwitterBootstrap4View();

        $route='admin.clientes.index';
        $queryArgs=$params;
        $html=$paginacion->render($clientes,function(int $page) use ($route,$queryArgs){
            if($page==1)
            {
                $queryArgs=[];
            }
            if($page>1)
            {
                $queryArgs['p']=$page;
            }
            return $this->router->generateUri($route,[],$queryArgs);
        });
        $this->renderer->assign('clientes',$clientes);
        $this->renderer->assign('html',$html);
        return $this->renderer->render($this->$pathView.'index');
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
        return $this->renderer->render($this->$pathView.'edit');
    }

    public function create(Request $request)
    {
        if( $request->getMethod()=='POST' )
        {
            $params = $this->getParams($request);

            $this->cliente->insert($params);

            return $this->redirect('admin.clientes.index');
        }
         return $this->renderer->render($this->$pathView.'create');
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
