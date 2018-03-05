<?php
namespace App\CPWEB;

use App\Admin\AdminWidgetInterface;
use App\CPWEB\Table\ClienteRepository;
use Framework\Renderer\RendererInterface;

class CpwebWidget implements AdminWidgetInterface
{
  /**
   * @var undefined
   */
  private $renderer;

  private $clientes;
  /**
   * @var string
   */
  protected $pathView = '@CPWEB/';

  public function __construct(RendererInterface $renderer, ClienteRepository $clientes){
    $this->renderer = $renderer;
    $this->clientes = $clientes;
  }

  public function render():string
  {
    $count = $this->clientes->count();
    $this->renderer->assign('noClientes',$count);
    return $this->renderer->render($this->pathView.'widget');
  }
}
