<?php
/* Smarty version 3.1.30, created on 2016-12-09 04:07:48
  from "C:\xampp\htdocs\CPWEB\templates\cliente\cotizacion_detalle_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a2004907f68_08206984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff32bb9237ade5ff002dfd4ebf9f3cf86b06388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cliente\\cotizacion_detalle_form.html',
      1 => 1481252442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a2004907f68_08206984 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--  FORMULARIO COTIZACION DETALLE (CPWEB)-->
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <!-- Pone un icono en la pestaña -->
      <link rel="shortcut icon" href="../image/iconHotel.png">
      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="../css/main.css" >
      <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >
      <title>FORMULARIO COTIZACION_DETALLE</title>
  </head>
  <body>

        <!-- contenedor principal -->
        <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">

                <?php if (isset($_smarty_tpl->tpl_vars['id_cotizacion']->value) && isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?>
                  <h1>EDICION DE DETALLE DE COTIZACION</h1>
                  <?php } else { ?>
                  <h1>NUEVO DETALLE DE COTIZACION</h1>
                <?php }?>
                <br>
            </div>

            <div class="formulario">

                  <h1>FORMULARIO COTIZACION-DETALLE </h1>

                <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="cotizacion_detalle.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_cotizacion']->value) && isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                  <!-- SELECCIONAR EL CLIENTE -->
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Selecciona la el cliente</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_cotizacion']->value;?>

                      </div>
                    </div>


                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Seleccion de servicios</label>
                        <div class="col-sm-10">
                           <?php echo $_smarty_tpl->tpl_vars['combo_servicio']->value;?>

                        </div>
                      </div>

                     <?php if (isset($_smarty_tpl->tpl_vars['id_cotizacion']->value) && isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?>
                      <input type="hidden" name="id_cotizacion" value="<?php echo $_smarty_tpl->tpl_vars['id_cotizacion']->value;?>
">
                      <input type="hidden" name="id_servicio" value="<?php echo $_smarty_tpl->tpl_vars['id_servicio']->value;?>
">
                    <?php }?>


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
