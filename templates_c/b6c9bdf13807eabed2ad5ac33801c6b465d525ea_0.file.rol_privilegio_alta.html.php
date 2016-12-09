<?php
/* Smarty version 3.1.30, created on 2016-12-09 05:09:06
  from "C:\xampp\htdocs\CPWEB\templates\admin\rol_privilegio_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a2e62802ba0_12803342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c9bdf13807eabed2ad5ac33801c6b465d525ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\admin\\rol_privilegio_alta.html',
      1 => 1481256421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a2e62802ba0_12803342 (Smarty_Internal_Template $_smarty_tpl) {
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

      <title>FORMULARIO ROL_PRIVILEGIO</title>
    </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>
                  <h1>EDICION DE PRIVILEGIOS</h1>
                  <?php } else { ?>
                  <h1>NUEVO ROL-PRIVILEGIO</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1>FORMULARIO ROL-PRIVILEGIO </h1>

                <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="rol_privilegio.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                  <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">SELECCION DE ROL</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_rol']->value;?>

                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">SELECCION DE PRIVILEGIO</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_privilegio']->value;?>

                      </div>
                    </div>


                    <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
                        <input type="hidden" name="id_privilegio" value="<?php echo $_smarty_tpl->tpl_vars['id_privilegio']->value;?>
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
</body>
</html>
<?php }
}
