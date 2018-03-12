<?php

use App\CPWEB\CPWEBModule;

return[
    'cpweb.prefix'=>'/CPWEB',
    'widgets' =>\DI\add([
        \DI\get(\App\CPWEB\widgets\ClienteWidget::class),
        \DI\get(\App\CPWEB\widgets\UsuarioWidget::class)
    ])
];
