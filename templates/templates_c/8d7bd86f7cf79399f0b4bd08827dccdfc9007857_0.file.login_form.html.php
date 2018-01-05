<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-05 19:32:49
  from 'C:\xampp2\htdocs\CPWEB\templates\login_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4fc4d129a455_91976278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7bd86f7cf79399f0b4bd08827dccdfc9007857' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\login_form.html',
      1 => 1515177167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.html' => 1,
  ),
),false)) {
function content_5a4fc4d129a455_91976278 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
css/flat.css" >
      <link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
bootstrap/bootstrap.css" >
      <link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
main.css" >

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


        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
          <div class="media">
            <div class="alert alert-success" role="alert">
            <strong> Perfecto ¡¡:</strong>
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

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
            <form class="form-horizontal" method="POST" action="login.php?accion=login" data-toggle="validator" role="form">

                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">EMAIL</label>
                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Ingresa tu Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">CONTRASEÑA</label>
                  <div class="col-sm-10">
                      <input type="password" minlength="3" class="form-control"  id="inputPassword" name="contrasena"  placeholder="Ingresa tu contraseña" required>
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
       <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
bootstrap/bootstrap.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.validate.js"><?php echo '</script'; ?>
>

  </div>
</body>
</html>
<?php }
}
