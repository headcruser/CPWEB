<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:29:58
  from "C:\xampp\htdocs\CPWEB\templates\asesoriaLegal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d7226991437_38002067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b13c43a0705bed17d71cbd4cb3a3219936807e73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\asesoriaLegal.html',
      1 => 1477276072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d7226991437_38002067 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Asesoria Legal </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
        <section>

          <h1>ASESORIA LEGAL </h1>
          <p>
            La asesoría legal es respaldada por nuestro equipo de abogados, el cual está integrado por profesionales con amplia experiencia en diversas áreas del derecho. La especialización, experiencia y compromiso de los abogados no solo brindan al cliente una respuesta eficiente, si no que además en la asesoría legal se proponen soluciones adecuadas a sus necesidades.
            Mostramos a continuación algunas especialidades de nuestro equipo de abogados.
          </p>

          <h2>ABOGADOS CORPORATIVOS</h2>
            <ul>
              <li>Redacción de actas de asambleas de accionistas</li>
              <li>Contratos</li>
              <li>Constitución de sociedades</li>
            </ul>

          <h2>ABOGADO FISCAL</h2>
            <ul>
              <li>Asesoría y litigio fiscal y administrativo</li>
              <li>Auditorias. Defensa contramultas de todo tipo. (Hacienda-Recaudación-Etc.)</li>
              <li>Revisiones Juicios de nulidad y de revocación. Embargos.</li>
            </ul>

          <h2>ABOGADOS LABORALES</h2>
            <ul>
              <li>Atención a citas de inspectoría del trabajo</li>
              <li>Elaboración de reglamento interior de trabajo.</li>
              <li>Defensa y litigio de demandas laborales.</li>
              <li>Rescisiones de trabajadores. Despidos.</li>
              <li>Huelgas Auditorias Laborales.</li>
              <li>Elaboración de Actas Administrativas.</li>
              <li>Paros Laborales.</li>
              <li>Sindicatos. Asesoría en general.</li>
            </ul>

          <h2>DERECHO MERCANTIL Y CIVIL</h2>
            <ul>
              <li>Asesoría y Elaboración de todo tipo de contratos</li>
              <li>Demandas Mercantiles y Civiles</li>
              <li>Defensa Mercantiles y Civiles</li>
              <li>Medios preparatorios y juicios en general</li>
              <li>Apelaciones, Amparos</li>
              <li>Todo tipo de juicios Hipotecarios</li>
              <li>Desahucio, Testamentarios, Divorcios, Pensiones Alimenticias, Herencias, etc.</li>
            </ul>

          <h2>PROPIEDAD INTELECTUAL</h2>
          <ul>
            <li>Registro de marcas y patentes
              Servicios legales diversos</li>
            <li>Trámites ante notarios, registro público de la propiedad, gobernación y  con todo tipo de autoridades y dependencias</li>
            <li>Tramitación de permisos y licencias</li>
            <li>Recuperación de adeudos y cartera vencida de su empresa</li>
          </ul>

        </section>

        <aside id="bienvenida">

          <div >
            <div >
              <h2>Asesoria Legal</h2><br>
              <p>
                <img src=".\IMAGE\asesoria.png" height="150" width="220" />
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
