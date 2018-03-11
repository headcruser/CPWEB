<?php
namespace App\Admin\Actions;

use Framework\Router;
use Framework\Actions\CrudAction;
use Framework\Session\FlashService;
use App\CPWEB\Table\UsuarioRepository;
use Framework\Renderer\RendererInterface;
use Framework\Actions\RouterAwareAction;
use Psr\Http\Message\ServerRequestInterface as Request;

class UsuariosCrudActions extends CrudAction
{
    protected $pathView = '@ADMIN/usuarios/';

    protected $routerPrefix = 'admin.usuarios';

    public function __construct(
        RendererInterface $renderer,
        Router $router,
        UsuarioRepository $cliente,
        FlashService $flash
    ){
        parent::__construct($renderer, $router,$cliente,$flash);
    }

    protected function getParams(Request $request)
    {
        return array_filter($request->getParsedBody(),function($key){
            return in_array($key,[
                'email',
                'contrasena',
                'clave',
                'fecha_clave',
                'nombres',
                'apellidos',
                'nacimiento',
                'foto'
            ]);
        },ARRAY_FILTER_USE_KEY);
    }

    protected function getValidator(Request $request)
    {
        $gump = new \GUMP();
        $params = $gump->sanitize($this->getParams($request));
        $gump->validation_rules( array(
                'email'    => 'required|valid_email|max_len,100',
                'contrasena'       => 'required|alpha_numeric|max_len,32|min_len,8',
                'clave'    => 'required|max_len,64',
                'fecha_clave'    => 'required',
                'nombres'    => 'required',
                'apellidos'    => 'required',
                'nacimiento'    => 'required',
                'foto'    => 'required|min_len,4',
            ));

        $gump->filter_rules(array(
            'email' => 'trim|sanitize_email',
            'contrasena' => 'trim',
            'clave'    => 'trim',
            'fecha_clave'   => 'trim',
            'nombres'   => 'trim',
            'apellidos'   => 'trim',
            'nacimiento'   => 'trim',
            'foto'   => 'trim',
        ));

        $validated_data = $gump->run($params);
        if(!$validated_data) {
            return $gump;
        }
        return $validated_data;
    }
}
