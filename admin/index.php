<?php 
	include('../cp_web_class.php');

	$web=new Cpweb;

	$privilegio=null;

	 if(isset($_SESSION))
	 {
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }
		
	//Login es el usuario predeterminado 
	$web->checarAcceso($privilegio); 
	$header=$web->Privilegiosheader($privilegio);

	//Inicializo smarty
	$templates=$web->template(); 
	
	//Asigno variables 
	$templates->assign('titulo','HOLA BIENVENIDO'); 
	$templates->assign('header',$header);
	$templates->display('index.html');
 ?>
