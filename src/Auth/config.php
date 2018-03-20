<?php
return [
  'auth.login'                => '/login',
  \App\Auth\AuthModule::class => \DI\object()->constructorParameter('prefix', \DI\get('auth.login')),
  \Framework\Auth::class      => \DI\get(\App\Auth\DatabaseAuth::class)
];
