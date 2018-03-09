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

    protected function getValidator(Request $request)
    {
        $gump = new \GUMP();
        $params = $gump->sanitize($this->getParams($request));
        $gump->validation_rules( array(
                'razon_social'    => 'required|max_len,255',
                'rfc'       => 'required|alpha_numeric|max_len,13|min_len,8',
                'domicilio'    => 'required|max_len,255',
                'correo'    => 'required|valid_email',
                'telefono'    => 'required|max_len,10|min_len,10',
                'id_tipo'    => 'required|max_len,11|min_len,1',
                'id_estado'    => 'required|max_len,11|min_len,1',
                'id_usuario'    => 'required|max_len,11|min_len,1',

            ));

        $gump->filter_rules(array(
            'razon_social' => 'trim|sanitize_string',
            'rfc' => 'trim',
            'domicilio'    => 'trim',
            'correo'   => 'trim|sanitize_email',
            'telefono'   => 'trim',
            'id_tipo'   => 'trim',
            'id_estado'   => 'trim',
            'id_usuario'   => 'trim',
        ));

        $validated_data = $gump->run($params);
        if(!$validated_data) {
            return $gump;
        }
        return $validated_data;
    }
}