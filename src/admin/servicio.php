<?php
	/**Formulario que muestra la informacion de los clientes */
	include('../controllers/servicio.php'); // Incluye la clase clientes
	$web=new Servicio; //Crea un objeto de la clase clientes

	//Elementos que inician vacios
	$accion=null;
	$id_servicio=null;

	$privilegio=null;
	$templates=$web->template();


	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION)){
	 		$privilegio=$web->obtenerRolSesion();
	 }

	$web->checarAcceso($privilegio); // policia
	$header=$web->Privilegiosheader($privilegio); //Crea el header

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
	}

	if (isset($_GET['id_servicio']))
	{
		//Obtener el id del cliente
		$id_servicio=$_GET['id_servicio'];
	}
	switch ($accion)
	{

		case 'nuevo':
			$templates->assign('header',$header);
			$templates->display('servicio_form.html');
			die();

		break;

		//Edita al Estado seleccionado
		case 'editar':
			$servicio=$web->getServicio($id_servicio);
			$templates->assign('servicio',$servicio[0]);
			$templates->assign('id_servicio',$id_servicio);
			$templates->assign('header',$header);
			$templates->display('servicio_form.html');
			die();
		break;


		// inserta un nuevo estado
		case 'alta':
			$web->setTabla("servicio");
			$web->insert($_POST);
			break;


		// Actualiza la informacion del estado
		case 'guardar':
			$web->setTabla("servicio");
			$web->update($_POST,array('id_servicio'=>$_POST['id_servicio']));

			break;

		//Elimina a un Estado de la base de datos
		case 'eliminar':
				$web ->deleteServicio($id_servicio);
			 break;
	}

	//Muestra la tabla de clientes registrados
	$servicio=$web->fetchAll('select * from servicio');
	$templates->assign('titulo','servicio');
	$templates->assign('servicio',$servicio);
	$templates->assign('header',$header);
	$templates->display('servicio.html');

 ?>
