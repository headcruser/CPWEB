<?php
/* Smarty version 3.1.30, created on 2016-11-11 07:55:46
  from "C:\xampp\htdocs\CPWEB\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58256b7242d7c0_53524541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8586c3cd09934fd0a00524fc5a85b5e80765d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\index.html',
      1 => 1478847302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58256b7242d7c0_53524541 (Smarty_Internal_Template $_smarty_tpl) {
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

                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">

                    <?php if (isset($_smarty_tpl->tpl_vars['flag']->value)) {?>
                      <?php if ($_smarty_tpl->tpl_vars['flag']->value == "true") {?>
                        <p> <img class="img-responsive img-thumbnail" src="mifoto.php" height="5" alt="5" > </p>
                        <?php } else { ?>
                        <p> <img class="img-responsive img-thumbnail" src="../image/avatar.png" height="5" alt="5" > </p>
                      <?php }?>
                      <?php } else { ?>
                        <p> <img class="img-responsive img-thumbnail" src="../image/avatar.png" height="5" alt="5" > </p>
                    <?php }?>

                  </div>
                </div>

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
