<?php
namespace Framework\Middleware;

use Framework\Router;
use GuzzleHttp\Psr7\Response;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class DispacherMiddleware
{
  /**
   * @var ContainerInterface
   */
  private $container;

  public function __construct(ContainerInterface $container) {
    $this->container = $container;
  }

   public function __invoke(ServerRequestInterface $request , callable $next)
   {
    $route = $request->getAttribute(Router\Route::class);

    if(is_null($route)) {
      return $next($request);
     }
     $callback = $route->getCallback();

    if(is_string($callback)) {
      $callback = $this->container->get($callback);
    }

    $response = call_user_func_array($callback, [$request]);

    if (is_string($response)) {
      return (new Response(200, [], $response));
    }

    if ($response instanceof ResponseInterface) {
      return $response;
    }
     throw new \Exception("The Response is not String or an instance of Response interface");
  }


}
