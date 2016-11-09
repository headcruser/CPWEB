<?php
	/**Formulario que muestra la informacion de los clientes */
	include('../cp_web_class.php');
	$web=new Cpweb; //Crea un objeto de la clase clientes
	$templates=$web->template();

	//Elementos que inician vacios
	$accion=null;
	$privilegio=null;


	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION)){
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }
	$web->checarAcceso($privilegio); // policia
	$header=$web->Privilegiosheader($privilegio); //Crea el header

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
		switch ($accion)
		{
			case 'guardar': //Muestra el formulario
	      $web->setTabla("usuario");
	      $_POST['id_usuario']=$_SESSION['id_usuario'];
	      $web->update($_POST,array('id_usuario'=>$_SESSION['id_usuario']));
			break;
		}
	}

	//Muestra el perfil del usuario

	$SQL="select * from usuario where id_usuario='".$_SESSION['id_usuario']."'";
	$usuario=$web->getAll($SQL);
  $templates->assign("usuario",$usuario[0]);
	$templates->assign('header',$header);
	$templates->display('perfil.html');
 ?>
