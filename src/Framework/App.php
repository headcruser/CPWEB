<?php namespace Framework;

use PDO;
use App\CPWEB\CPWEBModule;
use GuzzleHttp\Psr7\Response;
use function Http\Response\send;
use App\CPWEB\Actions\CPWEBAction;
use Middlewares\Utils\RequestHandler;
use Framework\Renderer\SmartyRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Interop\Http\Server\RequestHandlerInterface;

class App
{
    /**
     * Modules for Application
     * @var array
     */
    private $modules=[];
    /**
     * $definition configutation
     *
     * @var string
     */
    private $definition;

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var string[]
     */
    private $middlewares;

    /**
     * @var integer
     */
    private $index = 0;

    /**
     * __construct App
     *
     * @param string $definition
     */
    public function __construct(string $definition)
    {
        $this->definition = $definition;
    }

    /**
     * addModule
     * Add Module to app
     *
     * @param string $module
     * @return App
     */
    public function addModule(string $module):self
    {
        $this->modules[] = $module;
        return $this;
    }

    /**
     * pipe
     *
     * Adding Middleware to app
     * @param string $middleware
     * @return App
     */
    public function pipe(string $middleware):self
    {
        $this->middlewares[] = $middleware;
        return $this;
    }

    /**
     * run
     *
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function run(ServerRequestInterface $request):ResponseInterface
    {
        foreach ($this->modules as $module) {
            $this->getContainer()->get($module);
        }
        return $this->process($request);
    }

     /**
     * getContainer
     *
     * @return Container
     */
    public function getContainer()
    {
        if ($this->container === null) {
            $builder = new \DI\ContainerBuilder();
            $builder->writeProxiesToFile(true, dirname(__DIR__, 2).'/cache/temp/proxies');
            $builder->addDefinitions($this->definition);
            foreach ($this->modules as $module) {
                if ($module::DEFINITIONS) {
                    $builder->addDefinitions($module::DEFINITIONS);
                }
            }
            $this->container = $builder->build();
        }
        return $this->container;
    }

    /**
     * process executor
     *
     * @param ServerRequestInterface $request
     * @return void
     */
    public function process(ServerRequestInterface $request): ResponseInterface
    {
        $middleware = $this->getMiddleware();
        if (is_null($middleware)) {
            throw new Exception("Middleware does not Exist", 1);
        } elseif (is_callable($middleware)) {
            call_user_func_array($middleware, [$request,[$this,'process']]);
        } elseif ($middleware instanceof MiddlewareInterface) {
            return $middleware->process($request, new RequestHandler([$this,'process']));
        }
        return $this->consume($request);
    }

    /**
     * LiFO Despacher for middlewares
     * Extract first Element for next Callable worflow
     * @return void
     */
    private function consume(ServerRequestInterface $request)
    {
        $copyAppClass = $this->clone();
        $copyAppClass->removeMiddleware();
        $copyAppClass->resetIndexMiddlewares();
        $middleware = $copyAppClass->getMiddleware();
        return call_user_func_array($middleware, [$request,[$copyAppClass,'process']]);
    }

    /**
     * getMiddleware
     *
     * @return callable | null
     */
    private function getMiddleware()
    {
        if (array_key_exists($this->index, $this->middlewares)) {
            $middleware = $this->container->get($this->middlewares[$this->index]);
            $this->index++;
            return $middleware;
        }
        return null;
    }

    /**
     * Get Copy Reference This Class
     *
     * @return self
     */
    public function clone():self
    {
        $stack = clone $this;
        return $stack;
    }

    /**
     * remove Frist Middleware Element
     *
     * @return void
     */
    public function removeMiddleware()
    {
        array_shift($this->middlewares);
    }

    /**
     * Get modules for Application
     *
     * @return  array
     */
    public function getModules():array
    {
        return $this->modules;
    }

    /**
     * get List Middlewares
     *
     * @return array
     */
    public function getMiddlewares()
    {
        return $this->middlewares;
    }

    /**
     * reset Index reference for Middlweares
     *
     * @return void
     */
    public function resetIndexMiddlewares()
    {
        $this->index = 0;
    }
}
