<?php
namespace App\CPWEB\widgets;

use App\Admin\AdminWidgetInterface;
use App\CPWEB\Table\EstadoRepository;
use Framework\Renderer\RendererInterface;

class EstadoWidget implements AdminWidgetInterface
{
  /**
   * @var undefined
   */
    private $renderer;

    private $estado;
  /**
   * @var string
   */
    protected $pathView = '@ADMIN/widgets/';

    public function __construct(RendererInterface $renderer, EstadoRepository $estado)
    {
        $this->renderer = $renderer;
        $this->estado = $estado;
    }

    public function render():string
    {
        $count = $this->estado->count();
        $this->renderer->assign('noEstado', $count);
        return $this->renderer->render($this->pathView.'estadoWidget');
    }
}
