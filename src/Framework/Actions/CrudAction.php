<?php
namespace Framework\Actions;

use Framework\Router;
use Framework\Session\FlashService;
use Framework\Renderer\RendererInterface;
use Framework\Actions\RouterAwareAction;
use Psr\Http\Message\ServerRequestInterface as Request;

class CrudAction
{
    /**
     * @var RendererInterface
     */
    private $renderer;
    /**
     * @var mixed
     */
    private $table;
    /**
     * @var Router
     */
    private $router;
    /**
     * @var FlashService
     */
    private $flash;
    /**
     * example (@ADMIN)
     * @var string
     */
    protected $pathView;
    /**
     * example (admin.clientes smarty)
     * @var string
     */
    protected $routerPrefix;
    /**
     * @var array
     */
    protected $messages = [
        'create' =>'Elemento creado Correctamente',
        'edit' =>'Elemento Actualizado Correctamente'
    ];

    use RouterAwareAction;

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
           return $this->update($request);
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
        $params = $request->getQueryParams();
        $items = $this->table->findPaginated(10,$params['p']?? 1);
        $this->renderer->assign('items',$items);
        return $this->renderer->render($this->pathView.'index');
    }
    /**
     * update Elements Table in database
     *
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        $item = $this->table->find($request->getAttribute('id'));
        $this->renderer->assign('item',$item);

        if( $request->getMethod()=='POST' )
        {
            $params = $this->getParams($request);
            $id = $this->table->getID();
            $this->table->update($item->$id,$params);
            return $this->redirect($this->routerPrefix.'.index');
        }
        return $this->renderer->render($this->pathView.'edit');
    }
    /**
     * create a element in database
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        if( $request->getMethod()=='POST' )
        {
            $params = $this->getParams($request);

            $this->table->insert($params);

            return $this->redirect($this->routerPrefix.'.index');
        }
         return $this->renderer->render($this->pathView.'create');
    }
    /**
     * delete elements in Database
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $this->table->delete($request->getAttribute('id'));
        return $this->redirect($this->routerPrefix.'.index');
    }

    protected function getParams(Request $request)
    {
        return array_filter($request->getParsedBody(),function($key){
            return in_array($key,[]);
        },ARRAY_FILTER_USE_KEY);
    }
}
