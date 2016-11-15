<?php
/* Smarty version 3.1.30, created on 2016-11-14 22:48:26
  from "C:\xampp\htdocs\CPWEB\templates\cliente\cotizacion_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582a312a153cb1_90740536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396b3e8c764dcab3397d56a0ffd7ef5fd256f3e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cliente\\cotizacion_form.html',
      1 => 1479160097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_582a312a153cb1_90740536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
          <!-- Pone un icono en la pestaña -->
          <link rel="shortcut icon" href="../image/iconHotel.png">
          <link rel="stylesheet" type="text/css" href="../css/main.css" >
          <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >

        <title>FORMULARIO COTIZACION</title>
    </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
          <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_cotizacion']->value)) {?>
                  <h1 class="titulo">EDICION DE COTIZACION</h1>
                  <?php } else { ?>
                  <h1 class="titulo">NUEVO COTIZACION</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1 class="titulo">Formulario Cotización </h1>

                <form class="form-horizontal" method="POST" action="cotizacion.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_cotizacion']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <!-- COMBO CLIENTES -->
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Selecciona a un cliente</label>
                      <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['combo_cliente']->value;?>

                      </div>
                    </div>

                    <!-- FECHA DE NACIMIENTO -->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Fecha de cotización</label>
                      <div class="col-sm-10">
                        <input class="form-control col-sm-4" type="date" name="fecha" <?php if (isset($_smarty_tpl->tpl_vars['cotizacion']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cotizacion']->value['fecha'];?>
"<?php }?>>
                      </div>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['id_cotizacion']->value)) {?>
                        <input type="hidden" name="id_cotizacion" value="<?php echo $_smarty_tpl->tpl_vars['id_cotizacion']->value;?>
">
                    <?php }?>

                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="INGRESAR"></p>
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
