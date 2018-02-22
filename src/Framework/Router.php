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
    public function get(string $path, $callable, ?string $name = null)
    {
        $this->router->addRoute(new ZendRouter($path, $callable, ['GET'], $name));
    }
     /**
     * @param string $path
     * @param string|callable $callable
     * @param string  $name
     * @return mixed
     */
    public function post(string $path, $callable, ?string $name = null)
    {
        $this->router->addRoute(new ZendRouter($path, $callable, ['POST'], $name));
    }
     /**
     * @param string $path
     * @param string|callable $callable
     * @param string  $name
     * @return mixed
     */
    public function delete(string $path, $callable, ?string $name = null)
    {
        $this->router->addRoute(new ZendRouter($path, $callable, ['DELETE'], $name));
    }
    /**
     * crud Basic method
     * @param string $prefixPath name Component system
     * @param callback $callable executable methods
     * @param string $prefix Name method action
     * @return void
     */
    public function crud(string $prefixPath,$callable,string $prefix)
    {
        $this->get("$prefixPath", $callable, "$prefix.index");
        $this->get("$prefixPath/new", $callable, "$prefix.create");
        $this->post("$prefixPath/new", $callable);
        $this->get("$prefixPath/{id:\d+}", $callable, "$prefix.edit");
        $this->post("$prefixPath/{id:\d+}", $callable);
        $this->delete("$prefixPath/{id:\d+}", $callable,"$prefix.delete");
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
    /**
     * generateUri
     * @param string $name Method action name
     * @param array $Params assign for url
     * @return null|string
     */
    public function generateUri(string $name, array $params = []):?string
    {
         return $this->router->generateUri($name, $params);
    }
}
