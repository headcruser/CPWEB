<?php
namespace App\Admin\Actions;

use Framework\Router;
use App\CPWEB\Entity\Usuario;
use App\Admin\ImageUserUpload;
use Framework\Actions\CrudAction;
use Framework\Session\FlashService;
use App\CPWEB\Table\UsuarioRepository;
use Framework\Actions\RouterAwareAction;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface as Request;

class UsuariosCrudActions extends CrudAction
{
    protected $pathView = '@ADMIN/usuarios/';

    protected $routerPrefix = 'admin.usuarios';

    private $imageUserUpload;

    public function __construct(
        RendererInterface $renderer,
        Router $router,
        UsuarioRepository $cliente,
        FlashService $flash,
        ImageUserUpload $imageUserUpload
    ){
        parent::__construct($renderer, $router,$cliente,$flash);
        $this->imageUserUpload = $imageUserUpload;
    }

    protected function getParams(Request $request, $item)
    {
        $uploadPicture = $request->getUploadedFiles();
        $params = array_merge($request->getParsedBody(),$uploadPicture);

        //Refactor Class Validation item
        $isUploadFile = $params['foto']->getError()===UPLOAD_ERR_OK;

        if($isUploadFile) {
            $params['foto'] = $this->imageUserUpload->upload($params['foto'],$item->foto);
        }else{
            if(!$item->foto){
                throw new \Exception("No has subido foto");
            }
            $params['foto'] = $item->foto;
        }

        $params = array_filter($params,function($key){
            return in_array($key,[
                'email',
                'contrasena',
                'nombres',
                'apellidos',
                'nacimiento',
                'foto'
            ]);
        },ARRAY_FILTER_USE_KEY);

        return array_merge($params,[
            'clave'=>$item->clave,
            'fecha_clave'=>$item->fecha_clave]);
    }

    protected function getValidator(Request $request)
    {
        $gump = new \GUMP();
        $params = $gump->sanitize($request->getParsedBody());
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
    protected function getNewEntity(){
        $usuario = new Usuario();
        $usuario->clave = '_clave';
        $usuario->fecha_clave = date("Y-m-d H:i:s");
        return $usuario;
    }
}
