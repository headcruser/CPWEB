<?php
/* Smarty version 3.1.30, created on 2016-12-10 23:36:33
  from "C:\xampp\htdocs\CPWEB\templates\forgot_recuperar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584c8371b32a25_20129431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8241444aeff502df0f19cf7da9d575b1067869' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\forgot_recuperar.html',
      1 => 1481409381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584c8371b32a25_20129431 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Restablecer contraseña</title>
		<link rel="shortcut icon" href="../img/iconHotel.png">
		<link rel="stylesheet" type="text/css" href="../css/login.css" >
		<link rel="stylesheet" type="text/css" href="../css/flat.css" >
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="../css/main.css" >
	</head>
	<body>
		<div class="container well" id="sha" >

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Restablecimiento de contraseña</h3>
						</div>
				 </div>

				 <!-- formulario para las contraseñas  -->
				 <form class="login" method="POST" action="forgot.php?accion=restablecer">

						<div class="form-group">
								<input type="text" class="form-control" name="contrasena" placeholder="Nueva Contraseña"  required autofocus >
						</div>

						<div class="form-grup">
								<input type="password" class="form-control" name="contrasena2" placeholder="Confirme Contrasena">
						</div>

							<?php if (isset($_smarty_tpl->tpl_vars['clave']->value)) {?>
							<input type="hidden" name="clave" value="<?php echo $_smarty_tpl->tpl_vars['clave']->value;?>
">
							<?php }?>

							<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
							<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
							<?php }?>

						<!--BOTON DE ENVIAR  -->
							<div class="form-grup">
								<div class="enviar">
									<p> <input class="btn btn-primary btn-lg active" type="submit"  value="Restablecer"></p>
								</div>

							</div>


				 </form>


				<?php if (isset($_smarty_tpl->tpl_vars['pass']->value)) {?>
					<div class="media">
							<div class="alert alert-danger" role="alert">
							<strong> ERROR:</strong>
							<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>

							</div>
					</div>
				<?php }?>
		</div>

	</body>
</html>
<?php }
}
