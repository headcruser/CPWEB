<?php
namespace Framework\Renderer;

use Framework\Renderer\RendererInterface;
use Smarty;

class SmartyRenderer implements RendererInterface
{
    const DEFAULT_NAMESPACE= '__SMARTY';
    const EXTENSION_FILE='.tpl';
    private $template;
    public function __construct()
    {
        $this->template=new Smarty();
        $this->template->setTemplateDir(TEMPLATE);
        $this->template->setCompileDir(TEMP_C);
        $this->template->setCacheDir(CACHE);
    }
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
            $path=$this->remplaceNamespace($view).self::EXTENSION_FILE;
        } else {
            $path=$this->buildPath($view);
        }
        if (! file_exists($path)) {
            throw new \Exception('Render View Does Exist');
        }

        return $this->template->fetch('file:'.$path);
    }
    /**
     * addGlobal
     *
     * Adding local Variables to view
     * @param string $key
     * @param object $value
     * @return void
     */
    public function addGlobal(string $key, $value):void
    {
        $this->assign($key, $value);
    }
    /**
     * assign
     *
     * Assing a Variable to Smarty template
     * @param mixed $key
     * @param mixed $value
     * @return mixed
     */
    public function assign($key = null, $value = null):void
    {
        if (!is_null($key)) {
            ${$key} = $value;
            $this->template->assign("$key", ${$key});
        }
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
    /**
     * BuildPath
     *
     * Construye una ruta a partir de un array
     * @param array $arrayRuta Array que contiene la ruta
     * @return string Regresa una cadena con la ruta construida
    */
    private function buildPath(string $pathTemplate):string
    {
        $arrayPath=$this->pathConverToArray($pathTemplate);
        $sizeArray=count($arrayPath);
        $path='';
        for ($i =0; $i < $sizeArray; $i++) {
            if ($i == ($sizeArray-1)) {
                $path .= $arrayPath[$i].self::EXTENSION_FILE;
            } else {
                $path .= $arrayPath[$i].DIRECTORY_SEPARATOR;
            }
        }
        return $this->paths[self::DEFAULT_NAMESPACE].$path;
    }
    /**
     * pathConverToArray
     *
     * Convierte la ruta a un arreglo, utilizando el delimitador '.'
     * Por ejemplo
     * (home.controller)
     *
     * Resultado
     * array(home,controller)
     *
     * @param string $path Ruta que se desea converir.
     * @return array Regresa la ruta contenida en un array
     */
    private function pathConverToArray(string $path):array
    {
        return explode('.', $path);
    }
}
