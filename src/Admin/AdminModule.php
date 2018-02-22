<?php
namespace App\Admin;

use Framework\Module;
use Framework\Renderer\RendererInterface;

class AdminModule extends Module
{
    const VIEWS= __DIR__.'/views';
    const DEFINITIONS = __DIR__.'/config.php';

    public function __construct(RendererInterface $renderer)
    {
        $renderer->addPath('ADMIN', self::VIEWS);
    }
}