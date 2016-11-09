<?php
/* Smarty version 3.1.30, created on 2016-11-02 03:06:59
  from "C:\xampp\htdocs\CPWEB\templates\reporte.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58194a43e13cf3_86765018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cfba41875af79751a0aaea60073a9bf91af898b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\reporte.html',
      1 => 1478052416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58194a43e13cf3_86765018 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

     <!--Pone un icono en la pestaña-->
     <link rel="shortcut icon" href="../image/iconHotel.png">  
    
     <!--hoja de estilos -->
     <link rel="stylesheet" type="text/css" href="../css/main.css" > 
     <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >

    <title> Reporte cliente  </title>   
  </head>
<body>
  <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


      <div id="contenedor">
      
        <div class="panel panel-info">
          <div class="panel-heading">
            Reporte de los clientes del sistema
          </div>
            <?php echo $_smarty_tpl->tpl_vars['reporte1']->value;?>

         </div>

         
      </div> <!--fin del contenedor -->

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
