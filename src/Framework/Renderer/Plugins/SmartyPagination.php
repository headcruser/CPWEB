<?php
namespace Framework\Renderer\Plugins;

use Framework\Router;
use Pagerfanta\View\TwitterBootstrap4View;

class SmartyPagination
{
  public $router;

  const NAME='pagination';

  public function __construct(Router $router){
    $this->router = $router;
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

}
