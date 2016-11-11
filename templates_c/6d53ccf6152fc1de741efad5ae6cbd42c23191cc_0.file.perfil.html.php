<?php
/* Smarty version 3.1.30, created on 2016-11-11 08:49:03
  from "C:\xampp\htdocs\CPWEB\templates\perfil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582577ef922784_34341274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d53ccf6152fc1de741efad5ae6cbd42c23191cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\perfil.html',
      1 => 1478850541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582577ef922784_34341274 (Smarty_Internal_Template $_smarty_tpl) {
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
          <h1 class="titulo"> Perfil de Usuario
          </h1>

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


      <form class="form-horizontal" action="perfil.php?accion=guardar" method="post" enctype="multipart/form-data">
          <!-- DATOS -->
          <div class="form-group">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="nombres" placeholder="nombre" <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombres'];?>
"<?php }?> >
            </div>
          </div>

          <!-- APELLIDO -->
          <div class="form-group">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="apellidos" placeholder="apellido" <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellidos'];?>
"<?php }?>>
            </div>
          </div>

          <!-- FECHA DE NACIMIENTO -->
          <div class="form-group">
            <div class="col-sm-12">
              <input class="form-control" type="date" name="nacimiento" <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nacimiento'];?>
"<?php }?>>
            </div>
          </div>


          <!-- CONTRASENA -->
            <div class="form-group">
              <div class="col-sm-12">
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" >
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
