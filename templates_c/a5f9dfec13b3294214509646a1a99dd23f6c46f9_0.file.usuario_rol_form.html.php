<?php
/* Smarty version 3.1.30, created on 2016-11-09 06:22:42
  from "C:\xampp\htdocs\CPWEB\templates\usuario_rol_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5822b2a27c3800_61057013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5f9dfec13b3294214509646a1a99dd23f6c46f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\usuario_rol_form.html',
      1 => 1478668955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5822b2a27c3800_61057013 (Smarty_Internal_Template $_smarty_tpl) {
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
      <title>FORMULARIO USUARIO-ROL</title>
  </head>
  <body>

        <!-- contenedor principal -->
        <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                  <h1>EDICION DE ASIGNACION DE ROLES</h1>
                  <?php } else { ?>
                  <h1>NUEVA ASIGNACION DE ROLES</h1>
                <?php }?>
                <br>
            </div>

            <div class="formulario">

                  <h1>FORMULARIO USUARIO-ROL </h1>

                <form class="form-horizontal" method="POST" action="usuario_rol.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">SELECCION DE USUARIO</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_usuario']->value;?>

                      </div>
                    </div>


                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">SELECCION DE ROL</label>
                        <div class="col-sm-10">
                           <?php echo $_smarty_tpl->tpl_vars['combo_rol']->value;?>

                        </div>
                      </div>

                     <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                      <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
                      <input type="hidden" name="id_rol" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
">
                    <?php }?>


                   <div class="form-group">
                        <div class="enviar">
                            <p> <input class=button type="submit" value="Añadir"></p>
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
