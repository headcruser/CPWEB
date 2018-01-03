<?php
/* Smarty version 3.1.30, created on 2016-12-09 05:55:35
  from "C:\xampp\htdocs\CPWEB\templates\contador\tipo_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a394767d351_50661316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7df1ee82046366c8cf7cfa8817dfc051a800e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\contador\\tipo_form.html',
      1 => 1481259332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a394767d351_50661316 (Smarty_Internal_Template $_smarty_tpl) {
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

      <title>FORMULARIO TIPO</title>
</head>
<body>
      <div id="wrapper">
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
                
                <?php if (isset($_smarty_tpl->tpl_vars['id_tipo']->value)) {?>
                  <h1>EDICION DE TIPO</h1>
                  <?php } else { ?>
                  <h1>NUEVO TIPO</h1>
                <?php }?>
                <br>
          </div>

            <div class="formulario">

                <h1>Formulario TIPO </h1>

              <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="tipo.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_tipo']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                  <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Tipo</label>
                         <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Escribe un tipo de cliente" required name="tipo" <?php if (isset($_smarty_tpl->tpl_vars['id_tipo']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['tipo'];?>
"<?php }?> >
                         </div>
                  </div>

                  <?php if (isset($_smarty_tpl->tpl_vars['id_tipo']->value)) {?>
                  <input type="hidden" name="id_tipo" value="<?php echo $_smarty_tpl->tpl_vars['id_tipo']->value;?>
">
                  <?php }?>

              <div class="form-group">
                <div class="enviar">
                    <p><input class=button type="submit" value="Añadir"></p>
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
