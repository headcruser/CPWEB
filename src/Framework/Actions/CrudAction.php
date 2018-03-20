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
    protected $renderer;
    /**
     * @var mixed
     */
    protected $table;
    /**
     * @var Router
     */
    protected $router;
    /**
     * @var FlashService
     */
    protected $flash;
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
    ) {
        $this->renderer = $renderer;
        $this->table = $table;
        $this->router = $router;
        $this->flash = $flash;
    }

    public function __invoke(Request $request)
    {
        $this->renderer->addGlobal('viewPrefix', $this->pathView);
        $this->renderer->addGlobal('routerPrefix', $this->routerPrefix);

        if ($request->getMethod()==='DELETE') {
            return $this->delete($request);
        }
        if (substr((string)$request->getUri(), -3)==='new') {
            return $this->create($request);
        }
        if ($request->getAttribute('id')) {
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
        $items = $this->table->findPaginated(10, $params['p']?? 1);
        $this->renderer->assign('items', $items);
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
        $this->renderer->assign('item', $item);

        if ($request->getMethod()=='POST') {
            $params = $this->getParams($request, $item);
            $id = $this->table->getID();
            $this->table->update($item->$id, $params);
            $this->flash->success($this->messages['edit']);
            return $this->redirect($this->routerPrefix.'.index');
        }
        $params = $this->formParams();
        $this->renderer->assign('params', $params);
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
        $item = $this->getNewEntity();
        if ($request->getMethod()=='POST') {
            $this->table->insert($this->getParams($request, $item));
            $this->flash->success($this->messages['create']);
            return $this->redirect($this->routerPrefix.'.index');
        }
        $params = $this->formParams();
        $this->renderer->assign('params', $params);
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

    protected function getParams(Request $request, $item)
    {
        return array_filter($request->getParsedBody(), function ($key) {
            return in_array($key, []);
        }, ARRAY_FILTER_USE_KEY);
    }

    protected function getValidator(Request $request)
    {
        $gump = new \GUMP();
        $data = $gump->sanitize($request->getParsedBody());
        $gump->validation_rules(array([]));
        return $gump;
    }

    protected function getNewEntity()
    {
        return [];
    }

    protected function formParams(array $items = []):array
    {
        return $items;
    }
}
