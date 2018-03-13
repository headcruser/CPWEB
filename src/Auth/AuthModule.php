<?php
namespace App\Auth;

use Framework\Module;
use Psr\Container\ContainerInterface;

class AuthModule extends Module
{
  const VIEWS= __DIR__.'/views';
  // const DEFINITIONS = __DIR__.'/config.php';
  const MIGRATIONS=__DIR__.'/db/migrations';
  const SEEDS=__DIR__.'/db/seeds';

  public function __construct(ContainerInterface $container){

  }

}