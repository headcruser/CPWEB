<?php
namespace App\CPWEB\widgets;

use App\Admin\AdminWidgetInterface;

use App\CPWEB\Table\UsuarioRepository;
use Framework\Renderer\RendererInterface;

class UsuarioWidget implements AdminWidgetInterface
{
  /**
   * @var undefined
   */
    private $renderer;

    private $usuarios;
  /**
   * @var string
   */
    protected $pathView = '@ADMIN/widgets/';

    public function __construct(RendererInterface $renderer, UsuarioRepository $usuario)
    {
        $this->renderer = $renderer;
        $this->usuario = $usuario;
    }

    public function render():string
    {
        $count = $this->usuario->count();
        $this->renderer->assign('noUsuarios', $count);
        return $this->renderer->render($this->pathView.'usuarioWidget');
    }
}
