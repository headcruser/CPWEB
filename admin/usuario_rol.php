<?php
	include('../controllers/usuario_rol.php');


	$web=new usuario_rol; //Crea un objeto de la clase clientes

	//Llave compuesta
	$id_usuario=null;
	$id_rol=null;

	$accion=null;
	$privilegio=null;

	$templates=$web->template();
	$templates->setTemplateDir("../templates/admin");

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }

	$web->checarAcceso($privilegio); // indica que es un usuario predeterminado
	$header=$web->Privilegiosheader($privilegio);


	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
	}

	if (isset($_GET['id_usuario']) && isset($_GET['id_rol']))
	{
		//Obtener el id del cliente
		$id_usuario=$_GET['id_usuario'];
		$id_rol=$_GET['id_rol'];
	}


	switch ($accion)
	{
		case 'nuevo': //Muestra el formulario

		// Construye los combos
		$combo_usuario=$web->showList('select id_usuario,email from usuario');
		$combo_rol=$web->showList('select id_rol,rol from rol');

		//Asigna variables
		$templates->assign('combo_usuario',$combo_usuario);
		$templates->assign('combo_rol',$combo_rol);
		$templates->assign('header',$header);

		//Muestra el formulario
		$templates->display('usuario_rol_form.html');
		die();
		break;

		//Editar
		case 'editar':
			 $usuario_rol=$web->getUsuario_rol($id_usuario,$id_rol);


			$combo_usuario=$web->showList('select id_usuario,email from usuario',$usuario_rol[0]['id_usuario']);
			$combo_rol=$web->showList('select id_rol,rol from rol',$usuario_rol[0]['id_rol']);

			$templates->assign('usuario_rol',$usuario_rol[0]);
	  	$templates->assign('combo_usuario',$combo_usuario);
	  	$templates->assign('combo_rol',$combo_rol);

			$templates->assign('id_usuario',$id_usuario);
			$templates->assign('id_rol',$id_rol);
			$templates->assign('header',$header);
			$templates->display('usuario_rol_form.html');
			die();
		break;


		// inserta un nuevo cliente
		case 'alta':
			// insert generico
			$web->setTabla("usuario_rol");
			$web->insert($_POST);
			break;


		// Actualiza la infromacion del cliente
		case 'guardar':


			$web->setTabla("usuario_rol");
			$web->update($_POST,array('id_usuario'=>$_POST['id_usuario'],'id_rol'=>$_POST['id_rol'] ));
			break;

		//Elimina a un cliente de la base de datos
		case 'eliminar':
			$web ->deleteUsuario_rol($id_usuario,$id_rol);
			 break;

		case 'ver':
		break;

	}
	//Muestra la tabla
	$usuario_rol=$web->fetchAll('select * from usuario_rol');
	$templates->assign('titulo','Usuario-Rol');
	$templates->assign('usuario_rol',$usuario_rol);
	$templates->assign('header',$header);
	$templates->display('usuario_rol.html');
 ?>
