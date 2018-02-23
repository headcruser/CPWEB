<?php
namespace Framework\Session;

interface SessionInterface
{
    /**
     * Recover Information in Session
     * @param string $key
     * @param $default
     * @return void
     */
    function get(string $key, $default = null);
    /**
     * Adding Information in Global session
     *
     * @param string $key
     * @param $value
     * @return void
     */
    function set(string $key,$value):void;
    /**
     * delete
     *
     * @param string $key
     * @return void
     */
    function delete(string $key):void;
}