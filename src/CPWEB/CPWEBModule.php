<?php
namespace App\CPWEB;

use Framework\Router;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CPWEBModule
{
    public function __construct(Router $router)
    {
        $router->get('/CPWEB', [ $this,'index'], 'CPWEB.index');
        $router->get('/CPWEB/{slug:[a-z\-]+}', [ $this,'show'], 'CPWEB.show');
    }

    public function index(Request $request):string
    {
        return '<h1>Bienvenido a cpweb</h1>';
    }

    public function show(Request $request):string
    {
        return '<h1>Bienvenido a un Articulo</h1>'.$request->getAttribute('slug');
    }
}
