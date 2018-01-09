<?php
namespace App\CPWEB\Actions;

use Psr\Http\Message\ServerRequestInterface as Request;
use Framework\Renderer\RendererInterface;

class CPWEBAction
{
    private $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer=$renderer;
    }

    public function __invoke(Request $request)
    {
        $slug=$request->getAttribute('slug');
        if ($slug) {
            return $this->show($slug);
        }
        return $this->index();
    }

    public function index():string
    {
        return $this->renderer->render('@CPWEB/index');
    }

    public function show(string $slug):string
    {
        return  $this->renderer->render('@CPWEB/show', [
            'slug'=>$slug
        ]);
    }
}
