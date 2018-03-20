<?php
namespace Framework\Session;

use Framework\Session\SessionInterface;

class PHPSession implements SessionInterface
{
    private function ensuredStarted()
    {
        if (session_status()=== PHP_SESSION_NONE) {
            session_start();
        }
    }
    /**
     * Recover Information in Session
     * @param string $key
     * @param $default
     * @return void
     */
    public function get(string $key, $default = null)
    {
        $this->ensuredStarted();
        if (array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
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
    public function set(string $key, $value):void
    {
        $this->ensuredStarted();
        $_SESSION[$key]=$value;
    }
    /**
     * delete
     *
     * @param string $key
     * @return void
     */
    public function delete(string $key):void
    {
        $this->ensuredStarted();
        unset($_SESSION[$key]);
        session_destroy();
    }
}
