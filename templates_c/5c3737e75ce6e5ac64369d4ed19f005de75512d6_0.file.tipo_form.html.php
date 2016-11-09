<?php
/* Smarty version 3.1.30, created on 2016-11-02 02:20:08
  from "C:\xampp\htdocs\CPWEB\templates\tipo_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58193f48e12019_75530290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c3737e75ce6e5ac64369d4ed19f005de75512d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\tipo_form.html',
      1 => 1478049564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58193f48e12019_75530290 (Smarty_Internal_Template $_smarty_tpl) {
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

              <form class="form-horizontal" method="POST" action="tipo.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_tipo']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
                         <div class="col-sm-10">
                            <input type="text" class="form-control" name="tipo" <?php if (isset($_smarty_tpl->tpl_vars['id_tipo']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['tipo'];?>
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
