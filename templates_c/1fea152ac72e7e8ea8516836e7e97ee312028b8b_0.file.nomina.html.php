<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:00:51
  from "C:\xampp\htdocs\CPWEB\templates\nomina.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d6b5395d796_19231254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fea152ac72e7e8ea8516836e7e97ee312028b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\nomina.html',
      1 => 1477274408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d6b5395d796_19231254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Nomina </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
        <section>
          <h1>  ¿Qué es una nómina?</h1>
            <p>
              Una nómica es el registro financiero que una empresa realiza sobre los salarios de sus empleados, bonificaciones y deducciones
            </p>

        </section>

        <aside id="bienvenida">
          <div >
            <div >
              <h2>Nomina</h2><br>
              <p>
                <img src=".\IMAGE\nomina.jpg" height="150" width="220" />
              </p>

            </div>
          </div>

        </aside>
      
      </div>  <!--Fin del contenedor-->

      <!--Seccion footer -->
      <?php $_smarty_tpl->_subTemplateRender("file:footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
    </div>  <!--Fin del wrapper-->

    <!-- CODIGO JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
