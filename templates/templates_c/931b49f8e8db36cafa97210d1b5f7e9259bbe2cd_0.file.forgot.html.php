<?php
/* Smarty version 3.1.30, created on 2016-12-07 03:07:54
  from "C:\xampp\htdocs\CPWEB\templates\forgot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58476efa2eb620_92504641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '931b49f8e8db36cafa97210d1b5f7e9259bbe2cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\forgot.html',
      1 => 1481076469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58476efa2eb620_92504641 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="../css/flat.css" >
      <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >
      <link rel="stylesheet" type="text/css" href="../css/main.css" >

</head>
<body>
  <div id="wrapper">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


        <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
          <div class="media">
                <div class="alert alert-danger" role="alert">
                <strong> ERROR:</strong>
                <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

                </div>
            </div>
        <?php }?>

      <div class="formulario ">

      	<div class="panel panel-primary">
    			<div class="panel-heading">
      			<h3 class="panel-title">Recuperacion de contraseña</h3>
    			</div>
		   </div>

      	<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
		<?php }?>
			<form class="form-horizontal" method="POST" action="forgot.php?accion=validar">

			<?php if (isset($_smarty_tpl->tpl_vars['confirmacion']->value)) {?>

  			<div class="media">
            <div class="alert alert-success" role="alert">
                <strong> El correo electronico ha sido verificado </strong>
                	<?php echo $_smarty_tpl->tpl_vars['confirmacion']->value;?>

            </div>

        </div>

        <div class="panel panel-info">
          <div class="panel-heading">
              <a href="login.php"> <strong> Volver </strong></a>
          </div>
        </div>

			<?php } else { ?>

			  <div class="form-group">
	            <label for="inputEmail3" class="col-sm-2 control-label">correo electronico</label>
	              <div class="col-sm-10">
	                  <input type="text" class="form-control" name="correo" >
	              </div>
	          </div>

  			<div class="form-group">
              <div class="enviar">
                  <p> <input class="btn btn-primary btn-lg active" type="submit"  name="recuperar" value="Recuperar"></p>
              </div>
        </div>

	     <?php }?>
			</form>
      </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</body>
</html>
<?php }
}