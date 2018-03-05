<?php
namespace App\Admin\Actions;

use App\Admin\AdminWidgetInterface;
use Framework\Renderer\RendererInterface;

class DashBoardAction
{
  /**
   * @var RendererInterface
   */
  private $renderer;

  /**
   * @var AdminWidgedInterface
   */
  private $widgets;

  /**
   * @var string
   */
  protected $pathView = '@ADMIN/';

  public function __construct(RendererInterface $renderer , array $widgets){
    $this->renderer = $renderer;
    $this->widgets = $widgets;
  }
  public function __invoke()
  {
    $this->renderer->assign('widgetCliente',$this->widgets[0]->render());
    return $this->renderer->render($this->pathView.'dashboard');
  }
}
