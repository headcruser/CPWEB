<?php
namespace App\CPWEB\widgets;

use App\Admin\AdminWidgetInterface;
use App\CPWEB\Table\TipoRepository;
use Framework\Renderer\RendererInterface;

class TipoWidget implements AdminWidgetInterface
{
  /**
   * @var undefined
   */
    private $renderer;

    private $tipo;
  /**
   * @var string
   */
    protected $pathView = '@ADMIN/widgets/';

    public function __construct(RendererInterface $renderer, TipoRepository $tipo)
    {
        $this->renderer = $renderer;
        $this->tipo = $tipo;
    }

    public function render():string
    {
        $count = $this->tipo->count();
        $this->renderer->assign('noTipo', $count);
        return $this->renderer->render($this->pathView.'tipoWidget');
    }
}
