<?php
/* Smarty version 3.1.30, created on 2016-11-14 22:27:21
  from "C:\xampp\htdocs\CPWEB\templates\servicio_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582a2c39217089_66493336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa27d1e141178dcbbc7279215ace5109c1d4c9aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\servicio_form.html',
      1 => 1479158834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_582a2c39217089_66493336 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
          <!-- Pone un icono en la pestaña -->
          <link rel="shortcut icon" href="../image/iconHotel.png">
          <link rel="stylesheet" type="text/css" href="../css/main.css" >
          <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >

        <title>FORMULARIO SERVICIO</title>
    </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
          <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?>
                  <h1 class="titulo">EDICION DE SERVICIO</h1>
                  <?php } else { ?>
                  <h1 class="titulo">NUEVO SERVICIO</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1 class="titulo">Formulario Servicio </h1>

                <form class="form-horizontal" method="POST" action="servicio.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Servicio</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="servicio" <?php if (isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['servicio']->value['servicio'];?>
"<?php }?> >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Precio</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="precio" <?php if (isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['servicio']->value['precio'];?>
"<?php }?> >
                      </div>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['id_servicio']->value)) {?>
                        <input type="hidden" name="id_servicio" value="<?php echo $_smarty_tpl->tpl_vars['id_servicio']->value;?>
"> <?php }?>

                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="INGRESAR"></p>
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
