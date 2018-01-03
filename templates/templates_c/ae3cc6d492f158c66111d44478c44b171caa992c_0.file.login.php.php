<?php
/* Smarty version 3.1.30, created on 2016-11-01 04:43:29
  from "C:\xampp\htdocs\CPWEB\admin\login.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58180f615d6355_14020689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae3cc6d492f158c66111d44478c44b171caa992c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\admin\\login.php',
      1 => 1476982031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58180f615d6355_14020689 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
	';?>include('../controllers/login.php');
	$web=new Login; 
	
	//Elementos que inician vacios 
	$accion=null; 
	$templates=$web->template();

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
		case 'login': // ingresar al sistema
			$email=$_POST['email'];
			$contrasena=$_POST['contrasena'];
			$web->newlogin($email,$contrasena);
			break;
		case 'logout': // salir del sistema
			$web->logout();
			break;
		default:
	}

	//Mostrar login 
	$templates->assign('titulo','LOGIN');
	$templates->display('login_form.html');
 <?php echo '?>';
}
}
