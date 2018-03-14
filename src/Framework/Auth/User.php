<?php
namespace Framework\Auth;

interface User
{
  /**
   * @return string
   */
    public function getUserName():string;

  /**
   * @return string[]
   */
    public function getRoles():array;
}
