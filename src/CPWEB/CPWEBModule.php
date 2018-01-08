<?php
namespace App\CPWEB;

use Framework\Router;
use Framework\Renderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CPWEBModule
{
    private $renderer;
    public function __construct(Router $router, Renderer $renderer)
    {
        $this->renderer=$renderer;
        $this->renderer->addPath('CPWEB', __DIR__.DS.'views');
        $router->get('/CPWEB', [ $this,'index'], 'CPWEB.index');
        $router->get('/CPWEB/{slug:[a-z\-0-9]+}', [ $this,'show'], 'CPWEB.show');
    }

    public function index(Request $request):string
    {
        return $this->renderer->render('@CPWEB/index');
    }

    public function show(Request $request):string
    {
        return $this->renderer->render('@CPWEB/show', [
            'slug'=>$request->getAttribute('slug')
        ]);
    }
}
