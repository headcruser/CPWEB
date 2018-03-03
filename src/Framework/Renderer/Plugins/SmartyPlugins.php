<?php
namespace  Framework\Renderer\Plugins;
use Pagerfanta\View\TwitterBootstrap4View;

/**
 * Smarty Plugins for SmartyRenderer Class
 */
trait SmartyPlugins
{
  /**
   * Build View Paginate Result
   * @param array $params Elemens for build Views
   */
  function pagination($params)
  {
    $paginacion = new TwitterBootstrap4View();

        $route = $params['route'];
        $elements = $params['elements'];
        $queryArgs = [];

        $html = $paginacion->render($elements,
          function(int $page) use ($route,$queryArgs)
          {
              if($page==1) {
                  $queryArgs = [];
              }
              if($page>1) {
                  $queryArgs['p'] = $page;
              }
              return $this->router->generateUri($route,[],$queryArgs);
          });
        echo $html;
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
 /**
  * registerPlugins at SmartyRenderer Class
  *
  * @return void
  */
  function registerPlugins(){
     $this->template->registerPlugin("function","router", [$this,'router']);
     $this->template->registerPlugin("function","pagination", [$this,'pagination']);
  }
}
