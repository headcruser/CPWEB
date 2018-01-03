<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:29:55
  from "C:\xampp\htdocs\CPWEB\templates\auditoria.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d72235bb501_80569283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b898c010d2af7f6d0a0d2f918074122cef7751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\auditoria.html',
      1 => 1477276114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d72235bb501_80569283 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Auditoria </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
         <section>
        <h1>AUDITORIA</h1>
          <p>
            Hoy en día las organizaciones y mercados exigen tener un servicio de “Auditoría” con la  máxima calidad e integridad que cumpla rigurosamente todas las normas profesionales emitidas por los organismos reguladores nacionales.
            Nuestros servicios de auditoría le proporciona un punto de vista imparcial e independiente acerca de las prácticas contables, administrativas y operativas, proporcionándole un dictamen acompañado de los riesgos implicados del negocio, que promuevan la transparencia de sus registros y proporcionando las herramientas e información financiera de su empresa, para la toma de decisiones.
            Nuestros servicios de auditoría poseen un enfoque integrado al todo el ciclo global de las empresas “Order to Cash”, como marco de referencia técnica a las Normas de Auditoría Generalmente Aceptadas (NAGA´s.) y en combinación con nuestras políticas y procedimientos que son (Ética Profesional, Controles, Calidad y Enfoque a Resultados) y que son las herramientas clave para ejecutar auditorías de calidad en sus estados financieros, formando una metodología única que proporciona resultados efectivos que se traducen en resultados positivos para su empresa.
          </p>

        <h2>SERVICIOS DE AUDITORIA</h2>
            <ul>
              <li>Auditoría de Estados Financieros </li>
              <li>Auditoría Fiscal</li>
              <li>Auditoría Operativa</li>
              <li>Auditoría Administrativa</li>
              <li>Auditoría IMSS</li>
              <li>Auditoría Infonavit</li>
              <li>Auditoría de Calidad</li>
              <li>Todo tipo de vinificaciones independientes (Activo fijo, Cuentas por Cobrar, Cuentas por Pagar, Bancos, inventarios, etc.).</li>
            </ul>

        <h2>REVISIONES ESPECIALES</h2>
            <ul>
              <li>Informes sobre procedimientos previamente convenidos</li>
              <li>Informes por procedimientos de normas para atestiguar</li>
              <li>Conversión a prácticas contables diversas</li>
              <li>Revisiones de carácter regulatorio (Conforme a reglas financieras, hacendarias, etc.)</li>
              <li>Revisión de la valuación de instrumentos financieros</li>
              <li>Diagnósticos contables y fiscales</li>
              <li>Supervisión contable</li>
              <li>Guía en la elaboración de anexos fiscales</li>
              <li>Apoyo en la re-expresión de estados financieros</li>
              <li>Depuración de cuentas por cobrar</li>
              <li>Depuración de cuentas por pagar</li>
              <li>Depuración de partidas en conciliación bancaria</li>
              <li>Arqueros de cartera</li>
              <li>Inventarios físicos y verificación independiente de materiales y activos fijos.</li>
              <li>Consultoría en aspectos contables</li>
            </ul>


      </section>

      <aside id="bienvenida">
        <div >
          <div >
            <h2>Auditoria</h2><br>
            <p>
              <img src=".\IMAGE\auditoria.jpg" height="150" width="220" />
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
</html>
<?php }
}