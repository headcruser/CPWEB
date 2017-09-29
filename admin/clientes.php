<?php
	/**Formulario que muestra la informacion de los clientes */
	include('../controllers/clientes.php'); // Incluye la clase clientes
	$web=new Clientes; //Crea un objeto de la clase clientes

	//Elementos que inician vacios
	$accion=null;
	$idcliente=null;
	$privilegio=null;
	$templates=$web->template();
	$templates->setTemplateDir("../templates/contador");

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

	if (isset($_GET['id_cliente']))
	{
		//Obtener el id del cliente
		$idcliente=$_GET['id_cliente'];
	}


	switch ($accion)
	{
		case 'nuevo':
				//Nuevo elemento
				$combo=$web->showList('select id_tipo,tipo from tipo'); //Otiene una lista de elementos
				$comboEstado=$web->showList('select id_estado,estado from estado');
				$comboUsuario=$web->showList('select id_usuario, email  from usuario');

				$templates->assign('combo',$combo);
				$templates->assign('comboEstado',$comboEstado);	//se agrega el combo de estados
				$templates->assign('comboUsuario',$comboUsuario);	//se agrega el combo de usuarios
				$templates->assign('header',$header);
			$templates->display('clientes_alta.html');
			die();

		break;

		//Edita al cliente registrado en la base de datos
		case 'editar':

			//Se obtiene el elemento seleccionado
			$cliente=$web->getCliente($idcliente);

			// Se crean los combos para los datos adicionales
			$combo=$web->showList('select id_tipo,tipo from tipo',$cliente[0]['id_tipo']);
			$comboEstado=$web->showList('select id_estado,estado from estado',$cliente[0]['id_estado']);
			$comboUsuario=$web->showList('select id_usuario, email  from usuario',$cliente[0]['id_usuario']);

			//Se agregan los combos
			$templates->assign('combo',$combo);
			$templates->assign('comboEstado',$comboEstado);
			$templates->assign('comboUsuario',$comboUsuario);

			$templates->assign('cliente',$cliente[0]);
			$templates->assign('id_cliente',$idcliente);
			$templates->assign('header',$header);
			$templates->display('clientes_alta.html');
			die();
		break;


		// inserta un nuevo cliente
		case 'alta':
			// insert generico
			$web->setTabla("cliente");
			$web->insert($_POST);
			break;


		// Actualiza la infromacion del cliente
		case 'guardar':

			$web->setTabla("cliente");
			$web->update($_POST,array('id_cliente'=>$_POST['id_cliente']));
			break;

		//Elimina a un cliente de la base de datos
		case 'eliminar':
			$web ->deleteCliente($idcliente);
			 break;

		case 'ver':
		break;

	}

	//Muestra la tabla de clientes registrados

	$clientes=$web->fetchAll('select * from cliente');
	$templates->assign('header',$header);
	$templates->assign('titulo','CLIENTES');
	$templates->assign('clientes',$clientes);
	$templates->display('clientes.html');

 ?>
