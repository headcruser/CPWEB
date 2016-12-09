<?php
/* Smarty version 3.1.30, created on 2016-12-09 05:19:17
  from "C:\xampp\htdocs\CPWEB\templates\contador\estados_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a30c5861197_61915928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae82770fd6739cf969f24ca4744c8a20d1911f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\contador\\estados_alta.html',
      1 => 1481257153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a30c5861197_61915928 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>FORMULARIO ESTADOS</title>
  </head>

  <body >
  <!-- contenedor principal -->
        <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="contenedor">
                <?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>
                  <h1>EDICION DE ESTADO</h1>
                  <?php } else { ?>
                  <h1>NUEVO ESTADO</h1>
                <?php }?>
                <br>
          </div>

        <div class="formulario">
            <h1>Formulario Estado </h1>

                <form class="form-horizontal" method="POST"  data-toggle="validator" role="form" action="estados.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Estado</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Ingresa un estado de la República" required name="estado" <?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['estado']->value['estado'];?>
"<?php }?> >
                      </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>
                    <input type="hidden" name="id_estado" value="<?php echo $_smarty_tpl->tpl_vars['id_estado']->value;?>
">
                  <?php }?>


                   <div class="form-group">
                        <div class="enviar">
                            <p> <input class=button type="submit" value="Añadir"></p>
                      </div>></p>
                        </div>
                    </div>

                </form>
                <?php $_smarty_tpl->_subTemplateRender("file:../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
