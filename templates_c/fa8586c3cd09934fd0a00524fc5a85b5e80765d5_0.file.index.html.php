<?php
/* Smarty version 3.1.30, created on 2016-11-09 04:46:26
  from "C:\xampp\htdocs\CPWEB\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58229c1241d853_71071904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8586c3cd09934fd0a00524fc5a85b5e80765d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\index.html',
      1 => 1478662241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58229c1241d853_71071904 (Smarty_Internal_Template $_smarty_tpl) {
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

      <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>
<body >

    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


        <div class="jumbotron">
          <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
                </div>
                <p>Bienvenido al sistema para contadores publicos </p>
              </div>
          </div>
        </div> <!--Fin jumbotron-->

      <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div> <!--fin del wrapper-->

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
