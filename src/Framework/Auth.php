<?php
namespace Framework;

use Framework\Auth\User;

interface Auth
{
 /**
  * @return User|null
  */
    function getUser():?User;
}
