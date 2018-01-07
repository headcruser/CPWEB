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
     * @var callable
     */
    private $callback;
    /**
     * @var array
     */
    private $parameters;

    public function __construct(string $name, callable $callback, array $parameters)
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
     * @return callable
     */
    public function getCallback():callable
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
