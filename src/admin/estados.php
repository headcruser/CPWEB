<?php
	//Importa la clase estado
	include('../controllers/estado.php');

	$web=new Estado; //Crea un objeto de la clase Estado


	//Elementos que inician vacios
	$accion=null;
	$id_estado=null;
	$privilegio=null;

	$templates=$web->template();
	$templates->setTemplateDir("../templates/contador");

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION)){
	 		$privilegio=$web->obtenerRolSesion();
	 }

	$web->checarAcceso($privilegio);
	$header=$web->Privilegiosheader($privilegio); //Crea el header

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
	}

	if (isset($_GET['id_estado']))
	{
		//Obtener el id del estado
		$id_estado=$_GET['id_estado'];

	}

	switch ($accion)
	{
		case 'nuevo':
			$templates->assign('header',$header);
			$templates->display('estados_alta.html');

			die();

		break;

		//Edita al Estado seleccionado
		case 'editar':
			$estado=$web->getEstado($id_estado);
			//$combo=$web->showList('select id_tipo,tipo from tipo',$estado[0]['id_tipo']);
			$templates->assign('estado',$estado[0]);
			$templates->assign('id_estado',$id_estado);
			$templates->assign('header',$header);
			$templates->display('estados_alta.html');
			die();
		break;


		// inserta un nuevo estado
		case 'alta':

			$web->setTabla("estado");
			$web->insert($_POST);
			break;


		// Actualiza la informacion del estado
		case 'guardar':

			$web->setTabla("estado");
			$web->update($_POST,array('id_estado'=>$_POST['id_estado']));

			break;

		//Elimina a un Estado de la base de datos
		case 'eliminar':
				$web ->deleteEstado($id_estado);
			 break;

		case 'ver':
		break;
	}

	//Muestra la tabla de los estados registrados
	$estados=$web->fetchAll('select * from estado ');
	$templates->assign('titulo','Estados Disponibles');
	$templates->assign('estados',$estados);
	$templates->assign('header',$header);
	$templates->display('estados.html');
 ?>
