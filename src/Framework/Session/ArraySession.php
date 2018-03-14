<?php
namespace Framework\Session;

use Framework\Session\SessionInterface;

class ArraySession implements SessionInterface
{
    private $session = [];
    /**
     * Recover Information in Session
     * @param string $key
     * @param $default
     * @return void
     */
    function get(string $key, $default = null)
    {
        if (array_key_exists($key, $this->session)) {
            return $this->session[$key];
        }
        return $default;
    }
    /**
     * Adding Information in Global session
     *
     * @param string $key
     * @param $value
     * @return void
     */
    function set(string $key, $value):void
    {
        $this->session[$key] = $value;
    }
    /**
     * delete
     *
     * @param string $key
     * @return void
     */
    function delete(string $key):void
    {
        unset($this->session[$key]);
    }
}
