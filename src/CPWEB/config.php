<?php

use App\CPWEB\CPWEBModule;
return[
    'cpweb.prefix'=>'/CPWEB',
     CPWEBModule::class=>\DI\object()->constructorParameter('prefix',\DI\get('cpweb.prefix'))
];