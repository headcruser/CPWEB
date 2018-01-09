<?php namespace Framework;

use App\CPWEB\CPWEBModule;
use App\CPWEB\Actions\CPWEBAction;
use GuzzleHttp\Psr7\Response;
use function Http\Response\send;
use Framework\Renderer\SmartyRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App
{
    /**
     * Modules for Application
     * @var array
     */
    private $modules=[];
    /**
     * Reference Router Class
     * @var Router
     */
    private $router;
    /**
     * App Constructor.
     *
     * Buiulder Container References
     */
    public function __construct()
    {
        $this->router=new Router();

        $renderer=new SmartyRenderer(TEMPLATE, TEMP_C, CACHE);
        $renderer->addGlobal('router', $this->router);

        $this->modules[]=new CPWEBModule($this->router, $renderer);
    }

    public function run(ServerRequestInterface $request):ResponseInterface
    {
        try {
            $uri=$request->getUri()->getPath();
            if ($this->isIndexPath($uri)) {
                return (new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
            }
            $route=$this->router->match($request);

            if (is_null($route)) {
                return (new Response(404, [], '<h1> ERROR 404</h1>'));
            }
            $params=$route ->getParams();
            $request=array_reduce(array_keys($params), function ($request, $key) use ($params) {
                return $request->withAttribute($key, $params[$key]);
            }, $request);

            $response=call_user_func_array($route->getCallback(), [$request]);

            return $this->responseType($response);
        } catch (\Exception $e) {
            return (new Response(500, [], '<h3>' .$e->getMessage().'</h3>'));
        }
    }

    private function isIndexPath(string $http):bool
    {
        return!empty($http && $http[-1]==='/');
    }

    private function responseType($response):ResponseInterface
    {
        if (is_string($response)) {
            return (new Response(200, [], $response));
        }
        if ($response instanceof ResponseInterface) {
            return $response;
        }
        return (new Response(500, [], 'The response is not a string instance of Respnse interface'));
    }
}
