<?php
namespace App\Admin\Actions;

use Framework\Router;
use Framework\Actions\CrudAction;
use Framework\Session\FlashService;
use App\CPWEB\Table\ClienteRepository;
use Framework\Renderer\RendererInterface;
use Framework\Actions\RouterAwareAction;
use Psr\Http\Message\ServerRequestInterface as Request;

class ClientesCrudActions extends CrudAction
{
    protected $pathView = '@ADMIN/cliente/';

    protected $routerPrefix = 'admin.clientes';

    public function __construct(
        RendererInterface $renderer,
        Router $router,
        ClienteRepository $cliente,
        FlashService $flash
    ){
        parent::__construct($renderer, $router,$cliente,$flash);
    }

    protected function getParams(Request $request)
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
