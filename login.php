<?php
    include('cp_web_class.php');
	$accion=null;
	$templates=$web->template();
	$header=$web->Privilegiosheader("login"); //Crea el header

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];

		switch ($accion)
		{
			case 'login': // ingresar al sistema
				$email=$_POST['email'];
				$contrasena=$_POST['contrasena'];
				$flag=$web->newlogin($email,$contrasena);
				if(strcasecmp ($flag , "false" )==0)
				{
					$templates->assign('mensaje','Usuario y/o Contraseña Incorrectos');
				}

				break;
			case 'logout': // salir del sistema
				$web->logout();
				break;
			default:
		}
	}
    $templates->assign('titulo','LOGIN');
	$templates->assign('header',$header);
	$templates->display('publico/login.html');