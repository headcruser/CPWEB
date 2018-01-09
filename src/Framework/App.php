<?php namespace Framework;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use function Http\Response\send;
use App\CPWEB\CPWEBModule;
use App\CPWEB\Actions\CPWEBAction;

class App
{
    /**
     *
     * @var mixed
     */
    private $modules=[];

    private $router;
    /**
     * App Constructor.
     * __construct
     * @param string[] $modules List of Modules to load
     */
    public function __construct()
    {
        $this->router=new Router();

        $renderer=new \Framework\Renderer\SmartyRenderer();
        $renderer->addPath(TEMPLATE);

        $this->modules[]=new CPWEBModule($this->router, $renderer);
        // if (array_key_exists('renderer', $dependencies)) {
        //     $dependencies['renderer']->addGlobal('router', $this->router);
        // }
        // if (array_key_exists('action', $dependencies)) {
        //     $action=$dependencies['action'];
        // }
        // foreach ($modules as $module) {
        //     $this->modules[]=new $module($this->router, $dependencies['renderer'],$action );
        // }
    }

    public function run(ServerRequestInterface $request):ResponseInterface
    {
        $uri=$request->getUri()->getPath();
        if (!empty($uri && $uri[-1]==='/')) {
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

        if (is_string($response)) {
            return (new Response(200, [], $response));
        } elseif ($response instanceof ResponseInterface) {
            return $response;
        } else {
            throw new \Exception('The response is not a string instance of Respnse interface', 1);
        }
    }
}
