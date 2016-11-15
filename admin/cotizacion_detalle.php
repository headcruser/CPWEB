<?php
	include('../controllers/cotizacion_detalle.php');


	$web=new cotizacion_detalle; //Crea un objeto de la clase clientes

	//Llave compuesta
	$id_cotizacion=null;
	$id_servicio=null;
	$accion=null;
	$privilegio=null;

	$templates=$web->template();
	$templates->setTemplateDir("../templates/cliente");

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION)){
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }

	$web->checarAcceso($privilegio); // indica que es un usuario predeterminado
	$header=$web->Privilegiosheader($privilegio);


	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
	}

	if (isset($_GET['id_cotizacion']) && isset($_GET['id_servicio']))
	{
		//Obtener el id del cliente
		$id_cotizacion=$_GET['id_cotizacion'];
		$id_servicio=$_GET['id_servicio'];
	}


	switch ($accion)
	{
		case 'nuevo': //Muestra el formulario

		// Construye los combos
		$combo_cotizacion=$web->showList('select id_cotizacion,(select razon_social from cliente
                                                            where id_cliente=cotizacion.id_cliente) as id_cliente
                                                            from cotizacion');
		$combo_servicio=$web->showList('select id_servicio,servicio from servicio');

		//Asigna variables
		$templates->assign('combo_cotizacion',$combo_cotizacion);
		$templates->assign('combo_servicio',$combo_servicio);
		$templates->assign('header',$header);

		//Muestra el formulario
		$templates->display('cotizacion_detalle_form.html');
		die();
		break;

		//Editar
		case 'editar':
			$cotizacion_detalle=$web->getCotizacion_detalle($id_cotizacion,$id_servicio);


      $combo_cotizacion=$web->showList('select id_cotizacion,(select razon_social from cliente
                                                              where id_cliente=cotizacion.id_cliente) as id_cliente
                                                              from cotizacion',$cotizacion_detalle[0]["id_cotizacion"]);
  		$combo_servicio=$web->showList('select id_servicio,servicio from servicio',$cotizacion_detalle[0]['id_servicio']);

			$templates->assign('cotizacion_detalle',$cotizacion_detalle[0]);
	  	$templates->assign('combo_cotizacion',$combo_cotizacion);
	  	$templates->assign('combo_servicio',$combo_servicio);

			$templates->assign('id_cotizacion',$id_cotizacion);
			$templates->assign('id_servicio',$id_servicio);
			$templates->assign('header',$header);
			$templates->display('cotizacion_detalle_form.html');
			die();
		break;


		// inserta un nuevo cliente
		case 'alta':
			// insert generico
			$web->setTabla("cotizacion_detalle");
			$web->insert($_POST);
			break;


		// Actualiza la infromacion del cliente
		case 'guardar':


			$web->setTabla("cotizacion_detalle");
			$web->update($_POST,array('id_cotizacion'=>$_POST['id_cotizacion'],'id_servicio'=>$_POST['id_servicio'] ));
			break;

		//Elimina a un cliente de la base de datos
		case 'eliminar':
			$web ->deleteCotizacion_detalle($id_cotizacion,$id_servicio);
			 break;

		case 'ver':
		break;

	}
	//Muestra la tabla
	$cotizacion_detalle=$web->fetchAll("select * from cotizacion_detalle");
	$templates->assign('titulo','Cotizacion Detalle');
	$templates->assign('cotizacion_detalle',$cotizacion_detalle);
	$templates->assign('header',$header);
	$templates->display('cotizacion_detalle.html');
 ?>
