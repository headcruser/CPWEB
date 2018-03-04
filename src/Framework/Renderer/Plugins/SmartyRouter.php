<?php
namespace Framework\Renderer\Plugins;

use Framework\Router;

class SmartyRouter
{
  public $router;

  const NAME='router';

  public function __construct(Router $router){
    $this->router = $router;
  }
/**
 * Build Router Params
 *
 * @param mixed $params
 * @return void
 */
 function router($params)
 {
    $nombreRuta = $params['nombreRuta'];
    $parametros = isset($params['parametros'])?$params['parametros']:null;

    if($parametros){
        echo $this->router->generateUri($nombreRuta,$parametros);
        return ;
    }
    echo $this->router->generateUri($nombreRuta);
 }
}
