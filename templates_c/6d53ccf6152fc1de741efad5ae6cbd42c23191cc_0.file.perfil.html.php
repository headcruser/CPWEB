<?php
/* Smarty version 3.1.30, created on 2016-12-09 19:15:00
  from "C:\xampp\htdocs\CPWEB\templates\perfil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584af4a45e9f29_57820727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d53ccf6152fc1de741efad5ae6cbd42c23191cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\perfil.html',
      1 => 1481307294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_584af4a45e9f29_57820727 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/perfil_usuario.css" >
    <link rel="stylesheet" type="text/css" href="../css/main.css" >
  </head>
  <body>
    <div id="wrapper">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



    <!--CONTENEDOR PRINIPAL  -->
    <div class="ibody">

      <div class="jumbotron">
          <h1 class="titulo"> Perfil de Usuario</h1>
      </div>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <?php if (isset($_smarty_tpl->tpl_vars['flag']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['flag']->value == "true") {?>
                <p> <img class="img-responsive img-thumbnail" src="mifoto.php" height="200" alt="200" > </p>
                <?php } else { ?>
                <p> <img class="img-responsive img-thumbnail" src="../image/avatar.png" height="200" alt="200" > </p>
              <?php }?>
              <?php } else { ?>
                <p> <img class="img-responsive img-thumbnail" src="../image/avatar.png" height="200" alt="200" > </p>
            <?php }?>
        </div>
      </div>
          <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {
echo $_smarty_tpl->tpl_vars['email']->value;?>
  <?php }?>

      <form class="form-horizontal" action="perfil.php?accion=guardar" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
          <!-- DATOS -->
          <div class="form-group">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="nombres" placeholder="Escribe tu Nombre"  required <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombres'];?>
"<?php }?> >
            </div>
          </div>

          <!-- APELLIDO -->
          <div class="form-group">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="apellidos" placeholder="Escribe tu Apellido" required <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellidos'];?>
"<?php }?>>
            </div>
          </div>

          <!-- FECHA DE NACIMIENTO -->
          <div class="form-group">
            <div class="col-sm-12">
              <input class="form-control" type="date" name="nacimiento"  required <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nacimiento'];?>
"<?php }?>>
            </div>
          </div>


          <!-- CONTRASENA -->
            <div class="form-group">
              <div class="col-sm-12">
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" minlength="3" >
              </div>
            </div>

            <!-- SUBIR FOTO -->

            <div class="form-group">
              <label for="inputEmail3" class="control-label">Seleccionar Archivo</label>
                <div class="col-sm-12">
                  <input id="input-1" class="file" type="file" name="foto" value="">
                </div>
            </div>


            <div class="form-group">
                 <div class="enviar">
                     <p> <input class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar"></p>
                </div>
            </div>

      </form>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
    <!-- CODIGO JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
