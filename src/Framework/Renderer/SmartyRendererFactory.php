<?php
namespace Framework\Renderer;

use Psr\Container\ContainerInterface;
use Framework\Renderer\SmartyRenderer;
use Smarty;

class SmartyRendererFactory
{
    public function __invoke(ContainerInterface $container):SmartyRenderer
    {
        $smarty = new Smarty();

        $smarty->setTemplateDir($container->get('templates'));
        $smarty->setCompileDir($container->get('templates_c'));
        $smarty->setCacheDir($container->get('cache'));
        if ($container->has('smarty.plugins')) {
            foreach ($container->get('smarty.plugins') as $plugin) {
                $smarty->registerPlugin("function", $plugin::NAME, [$plugin,$plugin::NAME]);
            }
        }
        return new SmartyRenderer($smarty);
    }
}
