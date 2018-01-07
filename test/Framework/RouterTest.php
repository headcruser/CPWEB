<?php namespace test\Framework;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\Request;
use Framework\Router;
use GuzzleHttp\Psr7\ServerRequest;

class RouterTest extends TestCase
{
    /**
     * Router
     * @var Router
     */
    private $router;

    public function setUp()
    {
        $this->router=new Router();
    }

    public function testGetMethod()
    {
        $request = new ServerRequest('GET', '/CPWEB');
        $this->router->get('/CPWEB', function () {
            return 'hello';
        }, 'CPWEB');
        $route= $this->router->match($request);
        $this->assertEquals('CPWEB', $route->getName());
        $this->assertEquals('hello', call_user_func_array($route->getCallBack(), [$request]));
    }

    public function testGetMethodIfUrlDoesNotExist()
    {
        $request = new ServerRequest('GET', '/CPWEB');
        $this->router->get('/CPWEBdsd', function () {
            return 'hello';
        }, 'CPWEB');
        $route= $this->router->match($request);
        $this->assertEquals(null, $route);
    }

    public function testGetMethodWithParameters()
    {
        $request = new ServerRequest('GET', '/CPWEB/mon-slug-8');
        $this->router->get('/CPWEB', function () {
            return 'hello';
        }, 'posts');
        $this->router->get('/CPWEB/{slug:[a-z0-9\-]+}-{id:\d+}', function () {
            return 'hello';
        }, 'post.show');
        $route= $this->router->match($request);
        $this->assertEquals('/CPWEB', $route->getName());
        $this->assertEquals('hello', call_user_func_array($route->getCallBack()), [$request]);
        $this->assertEquals(['slug'=>'mon-slug','id'=>8], $route->getParams());

        //Invalid Router
        $this->router->match(new ServerRequest('GET', '/CPWEB/mon_slug-8'));
        $this->assertEquals(null, $route);
    }
    public function testGenerateUri()
    {
        $this->router->get('/CPWEB', function () {
            return 'hello';
        }, 'posts');
        $this->router->get('/CPWEB/{slug:[a-z0-9\-]+}-{id:\d+}', function () {
            return 'hello';
        }, 'posts');
        $uri=$this->router->generateUri('/CPWEB', ['slug'=>'mon-article','id'=>18]);
        $this->assertEquals('/CPWEB/mon-article-18', $uri);
    }
}
