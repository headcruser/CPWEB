<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:30:10
  from "C:\xampp\htdocs\CPWEB\templates\bolsaTrabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d72329b1445_96407628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663c9ca731a24dce96e7e321d6b2290a92416421' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\bolsaTrabajo.html',
      1 => 1477276125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d72329b1445_96407628 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Bolsa de Trabajo </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
        <section>
          <h1>Vacantes Permanentes</h1>

          <ul>
            <li>Contador Público.</li>
            <li>requisitos</li>
            <li>Analista contable.</li>
          </ul>

          <h2>REQUISITOS </h2>
          <p>
              Escolaridad: Lic. Contabilidad o a fin Pasante, Titulado o Proceso de Titulación.Experiencia mínima de 1 año, se toma en cuenta Servicio Social en despacho contable.Conocimientos básicos en contabilidad en general, proceso de cuentas por pagar y almacén.
              Manejo preferente JD Edwards o algún RP
          </p>

          <h2>Outsourcing</h2>
          <h3>Lista de puestos disponibles</h3>
          <ul>
            <li>Contador Público.</li>
            <li>Auditor.</li>
            <li>Analista contable.</li>
          </ul>

          <h2>Postulate: </h2>

          <h3>FORMULARIO</h3>
            <ul>
              <li>Nombre</li>
              <li>E-mail</li>
              <li>○ Telefonos.</li>
              <li>○ Perfil(Menu desplegable)
                <ul>
                  <li>Gerente</li>
                  <li>Supervisor.</li>
                  <li>Analista</li>
                  <li>Auditor</li>
                  <li>Fiscalista</li>
                  <li>Analistas de inventario</li>
                </ul>
              </li>
            </ul>

        <h2>Pasantes</h2>
        <p>
          Estudiar algunas de las carrera: Contabilidad
          Estar en proceso de de titulación
          Sexo: Indistinto
        </p>

        </section>

        <aside id="bienvenida">
          <div >
            <div >
              <h2>Bolsa de trabajo</h2><br>
              <p>
                <img src=".\IMAGE\bolsa.jpg" height="150" width="220" />
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
