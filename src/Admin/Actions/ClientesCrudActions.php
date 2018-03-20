<?php
namespace App\Admin\Actions;

use Framework\Router;
use App\CPWEB\Entity\Cliente;
use Framework\Actions\CrudAction;
use Framework\Session\FlashService;
use App\CPWEB\Table\TipoRepository;
use App\CPWEB\Table\EstadoRepository;
use App\CPWEB\Table\ClienteRepository;
use App\CPWEB\Table\UsuarioRepository;
use Framework\Actions\RouterAwareAction;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface as Request;

class ClientesCrudActions extends CrudAction
{
    protected $pathView = '@ADMIN/cliente/';

    protected $routerPrefix = 'admin.clientes';

    private $tipo;

    private $estado;

    private $usuario;

    public function __construct(
        RendererInterface $renderer,
        Router $router,
        ClienteRepository $cliente,
        FlashService $flash,
        TipoRepository $tipo,
        EstadoRepository $estado,
        UsuarioRepository $usuario
    ) {
        parent::__construct($renderer, $router, $cliente, $flash);
        $this->tipo = $tipo;
        $this->estado = $estado;
        $this->usuario = $usuario;
    }

    protected function getParams(Request $request, $item)
    {
        return array_filter($request->getParsedBody(), function ($key) {
            return in_array($key, [
                'razon_social',
                'rfc',
                'domicilio',
                'correo',
                'telefono',
                'id_tipo',
                'id_estado',
                'id_usuario'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    protected function getValidator(Request $request)
    {
        $gump = new \GUMP();
        $params = $gump->sanitize($this->getParams($request));
        $gump->validation_rules(array(
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
        if (!$validated_data) {
            return $gump;
        }
        return $validated_data;
    }

    protected function getNewEntity()
    {
        $usuario = new Cliente();
        return $usuario;
    }

    protected function formParams(array $items = []):array
    {
        $params['usuario']= $this->usuario->findList();
        $params['tipo']= $this->tipo->findList();
        $params['estado']= $this->estado->findList();
        return $params;
    }
}
