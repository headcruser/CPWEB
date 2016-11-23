<?php
	/**Formulario que muestra la informacion de los clientes */
	include('../controllers/cotizacion.php'); // Incluye la clase clientes
	$web=new Cotizacion; //Crea un objeto de la clase clientes

	//Elementos que inician vacios
	$accion=null;
	$id_cotizacion=null;
	$privilegio=null;

	$templates=$web->template();
  $templates->setTemplateDir("../templates/cliente");


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

	if (isset($_GET['id_cotizacion']))
	{
		//Obtener el id del cliente
		$id_cotizacion=$_GET['id_cotizacion'];
	}


	switch ($accion)
	{
		case 'nuevo':
			$combo_cliente=$web->showList('select id_cliente,razon_social from cliente'); //Otiene una lista de elementos
			$templates->assign('header',$header);
			$templates->assign('combo_cliente',$combo_cliente);
			$templates->display('cotizacion_form.html');
			die();

		break;

		//Edita al Estado seleccionado
		case 'editar':
			$cotizacion=$web->getCotizacion($id_cotizacion);
			$combo_cliente=$web->showList('select id_cliente,razon_social from cliente',$cotizacion[0]['id_cliente']); //Otiene una lista de elementos
			$templates->assign('cotizacion',$cotizacion[0]);
			$templates->assign('combo_cliente',$combo_cliente);
			$templates->assign('id_cotizacion',$id_cotizacion);
			$templates->assign('header',$header);
			$templates->display('cotizacion_form.html');
			die();
		break;


		// inserta un nuevo estado
		case 'alta':
			$web->setTabla("cotizacion");
			$web->insert($_POST);
			break;


		// Actualiza la informacion del estado
		case 'guardar':
			$web->setTabla("cotizacion");
			$web->update($_POST,array('id_cotizacion'=>$_POST['id_cotizacion']));

			break;

		//Elimina a un Estado de la base de datos
		case 'eliminar':
				$web ->deleteCotizacion($id_cotizacion);
			 break;

		case 'ver':


	}

	//Muestra la tabla de clientes registrados

	$cotizacion=$web->fetchAll('select * from cotizacion inner join cliente on cotizacion.id_cliente=cliente.id_cliente');
	$templates->assign('titulo','cotizacion');
	$templates->assign('cotizacion',$cotizacion);
	$templates->assign('header',$header);
	$templates->display('cotizacion.html');

 ?>
