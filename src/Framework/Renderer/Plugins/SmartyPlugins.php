<?php
namespace  Framework\Renderer\Plugins;
use Pagerfanta\View\TwitterBootstrap4View;

/**
 * Smarty Plugins for SmartyRenderer Class
 */
trait SmartyPlugins
{
  function hola ($params)
  {
      if(empty($params["format"])) {
          $format = "%b %e, %Y";
      } else {
          $format = $params["format"];
      }
      return strftime($format,time());
  }

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
  * registerPlugins at SmartyRenderer Class
  *
  * @return void
  */
  function registerPlugins(){
     $this->template->registerPlugin("function","date_now", [$this,'hola']);
     $this->template->registerPlugin("function","pagination", [$this,'pagination']);
  }
}
