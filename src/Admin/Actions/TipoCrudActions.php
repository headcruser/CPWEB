<?php
namespace App\Admin\Actions;

use Framework\Router;
use App\CPWEB\Entity\Tipo;
use App\CPWEB\Entity\Usuario;
use Framework\Actions\CrudAction;
use Framework\Session\FlashService;
use App\CPWEB\Table\TipoRepository;
use Framework\Actions\RouterAwareAction;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface as Request;

class TipoCrudActions extends CrudAction
{
    protected $pathView = '@ADMIN/tipo/';

    protected $routerPrefix = 'admin.tipo';


    public function __construct(
        RendererInterface $renderer,
        Router $router,
        TipoRepository $cliente,
        FlashService $flash
    ) {
        parent::__construct($renderer, $router, $cliente, $flash);
    }

    protected function getParams(Request $request, $item)
    {
        return array_filter($request->getParsedBody(), function ($key) {
            return in_array($key, [
                'descripcion'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    protected function getValidator(Request $request)
    {
        $gump = new \GUMP();
        $params = $gump->sanitize($request->getParsedBody());
        $gump->validation_rules(array(
                'descripcion'    => 'required|max_len,100'
            ));

        $gump->filter_rules(array(
            'descripcion' => 'trim'
        ));
        $validated_data = $gump->run($params);
        if (!$validated_data) {
            return $gump;
        }
        return $validated_data;
    }
    protected function getNewEntity()
    {
        return new Tipo();
    }
}
