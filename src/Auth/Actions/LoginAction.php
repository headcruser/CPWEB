<?php
namespace App\Auth\Actions;

use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface;

class LoginAction
{
  private $renderer;
   /**
   * @var string
   */
    protected $pathView = '@Auth/';

  public function __construct(RendererInterface $renderer)
  {
    $this->renderer = $renderer;
  }
  public function __invoke(ServerRequestInterface $request)
  {
     return $this->renderer->render($this->pathView.'login');

  }

}