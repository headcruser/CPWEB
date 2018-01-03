<?php
/* Smarty version 3.1.30, created on 2016-12-09 04:54:42
  from "C:\xampp\htdocs\CPWEB\templates\admin\usuario_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a2b02e07538_50332460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dad2799f00e9621c9e14daef3284a314aecc51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\admin\\usuario_alta.html',
      1 => 1481255678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a2b02e07538_50332460 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>

   <meta charset="utf-8">
   <!-- Pone un icono en la pestaña -->
   <link rel="shortcut icon" href="../image/iconHotel.png">

   <!--hoja de estilos -->
   <link rel="stylesheet" type="text/css" href="../css/main.css" >
   <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >

    <title>FORMULARIO USUARIO</title>
  </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
                  <h1>EDICION DE USUARIO</h1>
                  <?php } else { ?>
                  <h1>NUEVO USUARIO</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1>Formulario Usuario </h1>

                <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="usuario.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">EMAIL</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Ingresa un correo Électronico" required <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"<?php }?> >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">CONTRASEÑA</label>
                      <div class="col-sm-10">
                          <input type="password" minlength="6" class="form-control" id="inputPassword" placeholder="Ingresa una contraseña" required name="contrasena" >
                      </div>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
                        <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
"> <?php }?>

                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="Añadir"></p>
                      </div>
                    </div>
                </form>
            </div>
              <?php $_smarty_tpl->_subTemplateRender("file:../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

    <!-- CODIGO JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/jquery.validate.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
