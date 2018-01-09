<?php
    require_once('../cp_web_class.php');

    $templates=$web->template(); //Inicializo smarty(

if (isset($_SESSION)) {
    $privilegio=$web->obtenerRolSesion();

   //Login es el usuario predeterminado
    $web->checarAcceso('login');
    $header=$web->Privilegiosheader($privilegio);

    $usuario=$web->fetchAll('select foto from usuario where id_usuario='.$_SESSION['id_usuario']);
    if (empty($usuario)) {
        $templates->assign('flag', 'true');
    } else {
        $templates->assign('flag', 'false');
    }

   //Asigno variables
    $templates->assign('titulo', $_SESSION['email']);
    $templates->assign('header', $header);
    $templates->display('index.html');
}
