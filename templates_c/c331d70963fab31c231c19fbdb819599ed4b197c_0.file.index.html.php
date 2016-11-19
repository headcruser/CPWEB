<?php
/* Smarty version 3.1.30, created on 2016-11-19 04:43:12
  from "C:\xampp\htdocs\CPWEB\templates\cliente\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582fca50dc14b7_20306130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c331d70963fab31c231c19fbdb819599ed4b197c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cliente\\index.html',
      1 => 1479526844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_582fca50dc14b7_20306130 (Smarty_Internal_Template $_smarty_tpl) {
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


          <div class="contenedor">
            <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
                </div>
                <p><h1 class="titulo"></h1>Bienvenido <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 </p>
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


      <?php $_smarty_tpl->_subTemplateRender("file:../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
