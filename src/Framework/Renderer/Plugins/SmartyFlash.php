<?php
namespace Framework\Renderer\Plugins;

use Framework\Session\FlashService;

class SmartyFlash
{
    public $flashService;

    const NAME='flash';

    public function __construct(FlashService $flashService)
    {
        $this->flashService = $flashService;
    }

    public function flash($params)
    {
        return $this->flashService->get($params['type']);
    }
}
