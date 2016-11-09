<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:30:02
  from "C:\xampp\htdocs\CPWEB\templates\planeacionFinanciera.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d722a055ad2_25786363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c6546c0b74b213d70b89a2c13acbd89dd8224b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\planeacionFinanciera.html',
      1 => 1477275005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d722a055ad2_25786363 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Planeacion Financiera </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
        <section>
          <h1>PLANEACION FINANCIERA</h1>
          <p>
            Busca mantener el equilibrio económico en todos los niveles de la empresa, está presente tanto en el área operativa como en la estratégica. La estructura operativa se desarrolla en función de su implicación con la estrategia.
            El área estratégica está formada por la mercadotecnia (marketing) y por las finanzas. La mercadotecnia es la encargada de formular las alternativas estratégicas del negocio, mientras que el sector de finanzas cuantifica las estrategias propuestas por la mercadotecnia.
            En cambio, la división operativa está formada por sectores como la producción, la administración, la logística y la oficina comercial. Todas estas divisiones se encargan de concretar las políticas del plan estratégico.
            La planeación financiera, por lo tanto, se encarga de aportar una estructura acorde a la base de negocio de la empresa, a través de la implementación de una contabilidad analítica y del diseño de los estados financieros.
            Gracias a la planeación financiera, los directivos pueden cuantificar las propuestas elaboradas por mercadotecnia y evaluar sus costos.
            En otras palabras, la planeación financiera define el rumbo que tiene que seguir una organización para alcanzar sus objetivos estratégicos mediante un accionar armónico de todos sus integrantes y funciones. Su implantación es importante tanto a nivel interno como para los terceros que necesitan tomar decisiones vinculadas a la empresa (como la concesión de créditos, y la emisión o suscripción de acciones).
            Es necesario aclarar que la planeación financiera no sólo puede hacer referencia a ciertas proyecciones financieras que arroje los estados financieros de resultados y balances de un determinado indicador, sino que también comprende una serie de actividades que se desarrollan a diversos niveles: nivel estratégico, nivel funcional y nivel operativo de una empresa.
          </p>
        </section>

        <aside id="bienvenida">
        <h2>Planeacion Finaniera</h2>
            <div class="container-fluid">
                <img src=".\IMAGE\alianzas.jpg" height="150" width="220" />
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
