<?php
namespace Framework\Renderer\Exception;

use Framework\Exception;

/**
* Render Exception
*
* Throw RenderException
*
* @author: Daniel Martinez Sierra
* @version: 2018.v1
* @license: GNU General Public License (GPL)
*/
final class RendererException extends Exception
{
    protected $messageTemplate = 'RenderException: %s';
}
