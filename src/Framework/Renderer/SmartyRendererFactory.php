<?php
namespace Framework\Renderer;

use Psr\Container\ContainerInterface;
use Framework\Renderer\SmartyRenderer;

class SmartyRendererFactory
{
    public function __invoke(ContainerInterface $container):SmartyRenderer
    {
        return new \Framework\Renderer\SmartyRenderer(
            $container->get('templates'),
            $container->get('templates_c'),
            $container->get('cache')
        );
    }
}
