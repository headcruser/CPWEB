<?php
namespace Framework;

use App\CPWEB\Entity\Usuario;



interface Auth
{
 /**
  * @return User|null
  */
    function getUser():?Usuario;
}
