<?php
namespace App\Auth\Actions;

use Framework\Router;
use App\Auth\DatabaseAuth;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface;

class LogoutAction
{

  /**
   * @var string
   */
    protected $pathView = '@Auth/';

    private $auth;

    private $renderer;

    private $flash;

    public function __construct(
        RendererInterface $renderer,
        DatabaseAuth $auth,
        FlashService $flash
    ) {
        $this->renderer = $renderer;
        $this->auth = $auth;
        $this->flash = $flash;
    }
    public function __invoke(ServerRequestInterface $request)
    {
        $this->auth->logout();
        $this->flash->success('Saliendo..');
        return new RedirectResponse('/');
    }
}
