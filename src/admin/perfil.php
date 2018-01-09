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
	 		$privilegio=$web->obtenerRolSesion();
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

			  if(empty($_POST['contrasena'])){
						unset($_POST['contrasena']);
					}
					else{
						$_POST['contrasena']=md5($_POST['contrasena']);
					}

	      $_POST['id_usuario']=$_SESSION['id_usuario'];
	      $web->update($_POST,array('id_usuario'=>$_SESSION['id_usuario']));

    		if( $_FILES['foto']['error']==0)
    		{
                $temporal=$_FILES['foto']['tmp_name'];
                $fp=fopen($temporal,'rb');  //guardar archivo
                $SQL='UPDATE usuario set foto=? where id_usuario='.$_SESSION['id_usuario'];
                $statement=$web->conn->Prepare($SQL);
                $statement->bindParam(1,$fp,PDO::PARAM_LOB);
                $statement->execute();
			   }
			break;
		}
	}

	//Muestra el perfil del usuario
	$foto=$web->fetchAll('select foto from usuario where id_usuario='.$_SESSION['id_usuario']);
	if(empty ($foto)){
	$templates->assign('flag','true');
	}
	else {
		$templates->assign('flag','false');
	}

	$SQL="select * from usuario where id_usuario='".$_SESSION['id_usuario']."'";
	$email=$_SESSION["email"];
	$usuario=$web->getAll($SQL);
  $templates->assign("usuario",$usuario[0]);
	$templates->assign('header',$header);
	$templates->assign('email',$email);
	$templates->display('perfil.html');
 ?>