<?php
// SYSTEM
define('DS', DIRECTORY_SEPARATOR);
define('PATH', dirname(__DIR__, 1).DS);
//SMARTY
define('TEMPLATE', PATH.'templates'.DS);
define('CACHE', PATH.'cache'.DS);
define('TEMP_C', CACHE."templates_c".DS);
//PUBLIC RESOURCES
define('CSS', '.'.DS.'css'.DS);
define('JS', '.'.DS.'js'.DS);
define('IMG', '.'.DS.'image'.DS);
define('TEMPLATES', '.'.DS.'templates'.DS);

//DATABASE
define('PORT', '3306');
define('HOST', 'localhost');
define('NAME', 'development_db');
define('USER', 'root');
define('PASS', 'admin120324');
define('ENGINE', 'mysql');
define('CHARSET', 'utf8');

require(PATH.'vendor'.DS.'autoload.php');
