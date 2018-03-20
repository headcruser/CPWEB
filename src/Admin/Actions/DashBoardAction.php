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

    public function __construct(RendererInterface $renderer, array $widgets)
    {
        $this->renderer = $renderer;
        $this->widgets = $widgets;
    }
    public function __invoke()
    {
        $this->renderer->assign('widgets', $this->buildWidgets());
        return $this->renderer->render($this->pathView.'dashboard');
    }

    /**
     * Render Widgets for template
     *
     * @return void
     */
    private function buildWidgets():string
    {
        $widgets ='';
        foreach ($this->widgets as $widget) {
            $widgets.= $widget->render();
        }
        return $widgets;
    }
}
