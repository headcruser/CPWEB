<?php
namespace App\CPWEB\widgets;

use App\Admin\AdminWidgetInterface;
use App\CPWEB\Table\ClienteRepository;
use Framework\Renderer\RendererInterface;

class ClienteWidget implements AdminWidgetInterface
{
  /**
   * @var undefined
   */
    private $renderer;

    private $clientes;
  /**
   * @var string
   */
    protected $pathView = '@ADMIN/widgets/';

    public function __construct(RendererInterface $renderer, ClienteRepository $clientes)
    {
        $this->renderer = $renderer;
        $this->clientes = $clientes;
    }

    public function render():string
    {
        $count = $this->clientes->count();
        $this->renderer->assign('noClientes', $count);
        return $this->renderer->render($this->pathView.'ClienteWidget');
    }
}
