<?php
/* Smarty version 3.1.30, created on 2016-11-14 19:48:21
  from "C:\xampp\htdocs\CPWEB\templates\login_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582a06f520c992_15167892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a175df1bbddb46aa2b2c71fdacb24df28cfa296a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\login_form.html',
      1 => 1479149148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582a06f520c992_15167892 (Smarty_Internal_Template $_smarty_tpl) {
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

        <?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {?>
                  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                  <?php } else { ?>
                  <h1>Login</h1>
                <?php }?>
            <form class="form-horizontal" method="POST" action="login.php?accion=login">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">EMAIL</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">CONTRASEÑA</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" name="contrasena" >
                  </div>
                </div>

                <div class="form-group">
                  <div class="enviar">
                          <p> <input class="btn btn-primary btn-lg active" type="submit" value="INGRESAR"></p>
                  </div>
                </div>

              <a href="forgot.php">¿Olvidaste tu contraseña </a>
          </form>
      </div>

  </div>
</body>
</html>
<?php }
}
