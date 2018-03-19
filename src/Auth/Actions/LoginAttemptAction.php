<?php
namespace App\Auth\Actions;

use Framework\Router;
use App\Auth\DatabaseAuth;
use Framework\Actions\RouterAwareAction;
use Framework\Renderer\RendererInterface;
use Psr\Http\Message\ServerRequestInterface;

class LoginAttemptAction
{
  private $renderer;
   /**
   * @var string
   */
    protected $pathView = '@Auth/';

    private $auth;

    private $router;

    use RouterAwareAction;

  public function __construct(
    RendererInterface $renderer,
    DatabaseAuth $auth,
    Router $router )
  {
    $this->renderer = $renderer;
    $this->auth = $auth;
    $this->router = $router;
  }
  public function __invoke(ServerRequestInterface $request)
  {
    $params = $request->getParsedBody();
    $user = $this->auth->login($params['email'],$params['password']);

    if($user){
       return $this->redirect('admin');
    }else{
       return $this->redirect('auth.login');
    }
  }

}