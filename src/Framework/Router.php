<?php
namespace Framework;

use Framework\Router\Route;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Expressive\Router\FastRouteRouter;
use Zend\Expressive\Router\Route as ZendRouter;

/**
 * Class Router
 *
 * Register and match Router
 *
 * @package Framework
 */
class Router
{
    /**
     * @var FastRouteRouter
     */
    private $router;

    public function __construct()
    {
        $this->router=new FastRouteRouter();
    }
    /**
     * get
     * @param string $path
     * @param string|callable $callable
     * @param string  $name
     * @return mixed
     */
    public function get(string $path, $callable, string $name)
    {
        $this->router->addRoute(new ZendRouter($path, $callable, ['GET'], $name));
    }

    /**
     * match
     * @param ServerRequestInterface $request
     * @return Route|null
     */
    public function match(ServerRequestInterface $request):?Route
    {
        $result=$this->router->match($request);
        if ($result->isSuccess()) {
            return new Route(
                $result->getMatchedRouteName(),
                $result->getMatchedMiddleware(),
                $result->getMatchedParams()
            );
        }
        return null;
    }

    public function generateUri(string $name, array $params = []):?string
    {
         return $this->router->generateUri($name, $params);
    }
}
