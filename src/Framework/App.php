<?php namespace Framework;

use PDO;
use App\CPWEB\CPWEBModule;
use GuzzleHttp\Psr7\Response;
use function Http\Response\send;
use App\CPWEB\Actions\CPWEBAction;
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
            throw new Exception("El middleware no ha sido requerido", 1);
        }
        return call_user_func_array($middleware, [$request,[$this,'process']]);
    }

    /**
     * getMiddleware
     *
     * @return callable | null
     */
    private function getMiddleware():?callable
    {
        if (array_key_exists($this->index, $this->middlewares)) {
            $middleware = $this->container->get($this->middlewares[$this->index]);
            $this->index++;
            return $middleware;
        }
        return null;
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
}
