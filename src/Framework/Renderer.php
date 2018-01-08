<?php
namespace Framework;

class Renderer
{
    const DEFAULT_NAMESPACE= '__MAIN';

    /**
     * Routes View
     * @var array
     */
    private $paths=[];
    /**
     * Global variables to access the view
     * @var array
     */
    private $globals=[];

    /**
     * addpath
     *
     * Add a route to load the views
     * @param string $namespace workespace view
     * @param null|string $path Path Directory
     * @return void
     */
    public function addpath(string $namespace, ?string $path = null):void
    {
        if (is_null($path)) {
            $this->paths[self::DEFAULT_NAMESPACE]=$namespace;
        } else {
            $this->paths[$namespace]=$path;
        }
    }
    /**
     * render
     *
     * Permit Render a View
     * @ indicate Namespace of view
     *      $this->render('@blog\view')
     * load view normality
     *      $this->render('view')
     * @param string $view
     * @param array $params
     * @return string
     */
    public function render(string $view, array $params = []):string
    {
        if ($this->hasNamespace($view)) {
            $path=$this->remplaceNamespace($view).'.php';
        } else {
            $path=$this->paths[self::DEFAULT_NAMESPACE].DIRECTORY_SEPARATOR.$view.'.php';
        }
        if (! file_exists($path)) {
            throw new \Exception('Render View Does Exist');
        }

        ob_start();
        $renderer=$this;
        extract($params);
        extract($this->globals);
        require($path);
        return ob_get_clean();
    }
    /**
     * addGlobal
     *
     * Adding local Variables to view
     * @param mixed $key
     * @param mixed $value
     * @return mixed
     */
    public function addGlobal(string $key, $value):void
    {
        $this->globals[$key]=$value;
    }

    private function hasNamespace(string $view):bool
    {
        return $view[0]==='@';
    }

    private function getNamespace(string $view):string
    {
        return substr($view, 1, strpos($view, '/')-1);
    }

    private function remplaceNamespace(string $view):string
    {
        $namespace =$this->getNamespace($view);
        return str_replace('@'.$namespace, $this->paths[$namespace], $view);
    }
}
