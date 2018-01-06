<?php
namespace test\Framework;

use Framework\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testRedirectTrailingSlash()
    {
        $app = new App();
        $request=new Request('/Prueba/');
        $response=$app->run($request);
        $this->assertEquals('/prueba',$respnse->getHeader('Location'));
        $this->assertEquals( 301, $respnse->getStatus() );
    }
}