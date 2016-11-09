<?php
/* Smarty version 3.1.30, created on 2016-10-24 03:11:26
  from "C:\xampp\htdocs\CPWEB\templates\contabilidad.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d5fbe745881_77965108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c48d733fb4d34ec29ad28cdef21894236cc07e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\contabilidad.html',
      1 => 1477271477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d5fbe745881_77965108 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Contabilidad </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
       <section>
          <h2>TODA TU CONTABILIDAD EN UNA SOLA PLATAFORMA</h2>

          <ul>
            <li>Emite y envía facturas electrónicas (CFDI) y PDF de forma ilimitada y con un solo clic. </li>
            <li>Conoce tu estatus ante el SAT y monitorea tu buzón tributario. </li>
            <li>Clasifica tus ingresos y gastos según rubro para control de tu flujo. </li>
            <li>Personaliza tus facturas con el logo de tu empresa. </li>

            <li>Visualiza tus ingresos y tus gastos para conocer tu situación financiera. </li>

            <li>Muchas más funcionalidades. Solicita tu demo gratis.</li>
            <li>Tus impuestos al día, cumplimiento de tus obligaciones y asesoría fiscal.</li>
            <li>Facturación electrónica ilimitada, clasificada y en un solo sitio.</li>
          </ul>

        </section>

        <aside id="bienvenida">
          <div >
            <div >
              <h2>Contabilidad </h2><br>
              <p>
                <img src=".\IMAGE\contabilidad.png" height="150" width="220" />
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
