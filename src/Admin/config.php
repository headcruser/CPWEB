<?php
return[
    'admin.prefix'=>'/admin',
    \App\Admin\AdminModule::class => \DI\object()->constructorParameter('prefix', \DI\get('admin.prefix')),
    \App\Admin\Actions\DashBoardAction::class=>\DI\object()->constructorParameter('widgets', \DI\get('widgets')),
];
