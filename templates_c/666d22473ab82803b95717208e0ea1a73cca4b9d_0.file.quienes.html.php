<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:16:03
  from "C:\xampp\htdocs\CPWEB\templates\quienes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d6ee304dc19_81955725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666d22473ab82803b95717208e0ea1a73cca4b9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\quienes.html',
      1 => 1477275357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d6ee304dc19_81955725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">
      
      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> ¿Quienes Somos? </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
         <section>
          <h2>Misión</h2>
          <p>
            Ofrecer a nuestros clientes, servicios contables y administrativos de primer nivel, utilizando toda nuestra infraestructura administrativa y talento humano, en busca del retorno del capital invertido a cada uno de sus socios.
          </p>

       <h2>Visión</h2>

       <p>
         Consolidarse como la mejor firma de contadores públicos certificados y líderes en los servicios profesionales a través del desarrollo integral de nuestros miembros altamente calificados (contadores con Maestrías, Doctorados) tanto a nivel estatal, nacional e internacional.
       </p>

       <h2>Nuestros valores son:</h2>

       <ul>
         <li>
           <b>Alto desempeño:</b> nuestro estándar de calidad, velocidad, trabajo, aprendizaje, trato al cliente, asesorías, planeación, coaching y conferencias son hechos con nuestro mejor esfuerzo y de manera consciente en búsqueda de superarnos constantemente.
         </li>

         <li>
           <b>Competitividad:</b> entre nosotros mismos creamos un equipo de apoyo completo; así mismo con nuestros clientes ofrecemos servicios, asesoría y soluciones que implican una capacitación, estudio, debate, análisis e investigación constante.
         </li>

         <li>

           <b>Confidencialidad:</b> la información procesada y generada es propiedad total del cliente, así mismo sus estrategias, contactos, clientes y proveedores. Dicha información no es utilizada para ningún fin más que el cumplir con las obligaciones fiscales e informar a nuestro cliente.
         </li>

         <li>
           <b>Ética:</b> con nuestras propuestas de planeación, éstas no fomentarán la corrupción y defraudación fiscal.
         </li>

       </ul>

       <h2>Nuestras políticas de calidad </h2>

         <p>
           Brindamos servicios profesionales de manera integral en diversas áreas como: Fiscal, Auditoría, Contabilidad, Administración de Nóminas, Legal, Calidad, Recursos Humanos, Sistemas y Capacitación, con oportunidad y atención personalizada para satisfacer las necesidades de nuestros clientes.
         </p>

       <h1>Objetivos de nuestra empresa</h1>

       <h2>Objetivo general:</h2>

       <ul>

         <li>
           Apoyar a todas las empresas que soliciten nuestros servicios, concientizándolas de que la organización, planeación, control y adecuado registro de las operaciones financieras de su empresa, conjuntamente con la planeación fiscal, son en la actualidad herramientas vitales para que subsistan como negocio en marcha, en el entorno económico y fiscal actual.
         </li>

       </ul>

        </section>

        <aside id="bienvenida">
          <div >
            <div >
                <h2>Quienes Somos</h2><br>
                <p>
                  <img src=".\IMAGE\quienesSomos.jpg" height="150" width="220" />
                </p>

                <h2>Objetivos específicos:</h2>
                 <ul>
                   <li>
                     Proporcionar servicios integrales de calidad que beneficien económicamente a nuestros clientes y les otorguen seguridad y certeza en el adecuado pago de sus impuestos.
                   </li>

                   <li>
                     Poner nuestros servicios siempre al alcance de todo tipo de empresas.
                   </li>
                 </ul>
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
