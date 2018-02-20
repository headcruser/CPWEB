<?php
namespace Framework\Router;

/**
 * Class Router
 *
 * Represent a matched route
 * @package Framework\Router
 */
class Route
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string|callable
     */
    private $callback;
    /**
     * @var array
     */
    private $parameters;

    public function __construct(string $name, $callback, array $parameters)
    {
        $this->name=$name;
        $this->callback=$callback;
        $this->parameters=$parameters;
    }
    /**
     * getName
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }
     /**
     * Return Callback
     * @return string|callable
     */
    public function getCallback()
    {
        return $this->callback;
    }
    /**
     * Retrieve the url parameters
     * @return string[]
     */
    public function getParams():array
    {
        return $this->parameters;
    }
}
