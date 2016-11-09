<?php
/* Smarty version 3.1.30, created on 2016-10-24 02:20:47
  from "C:\xampp\htdocs\CPWEB\templates\nee.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d53df8d1538_04012429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5fa027cd065e66a4271707fac06b75a97cfa29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\nee.html',
      1 => 1477268091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d53df8d1538_04012429 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--CPWEB ESTATICO INDEX -->
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> CPWEB Y ASOCIADOS </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
          <section>        
              <h1>HISTORIA</h1>
                <article>                  
                  <p>
                  CP Web comienza operaciones el año de 2016 en México, fundada por profesionistas independientes en respuesta a las demanda del mercado por Servicios Contables Integrales para cubrir bajo un solo punto de contacto todas las necesidades de sus clientes en Auditoría contable, Asesoría,  Contabilidad,  Asuntos Fiscales y Consultoría Financiera. 
                  </p>

                  <p>
                  Nuestra empresa tiene como principal enfoque brindarle atención especializada en todos Nuestros Servicios  a los costos más competitivos.
                  Nuestro grupo de fiscalistas y contadores, altamente especializado en materia fiscal, cuenta con la experiencia y profundo conocimiento de las leyes fiscales para garantizar la calidad de todos nuestros servicios y confiabilidad de nuestros resultados. Nuestra empresa funciona en base a la filosofía de mejora continua en el servicio para satisfacer todas las necesidades de nuestros clientes y hacer frente a los constantes cambios de las leyes fiscales y laborales. 
                  </p>
                  
                  <p>
                    Nuestra empresa actualmente tiene destacada presencia en las ciudades de Guanajuato, Celaya y Querétaro en México con alcance en toda la República Mexicana  
                  </p>
                </article>          
          </section>

        <aside id="bienvenida">
          
            <h2>Información</h2>

            <div class="container-fluid">
              <img src=".\IMAGE\autor.jpg"/>
            </div>

            <div class="center-block">
              <p><strong>
              Bienvenido a nuestro sitio Web en donde podrá
              obtener un servicio de calidad, debido a nuestas 
              certificaciones ISO-9000
              </strong></p>
              
            </div>

            <div class="container-fluid">
              <h3>Atencion a clientes</h3>
              <img class="img-responsive" alt="Responsive image" src=".\IMAGE\atencion.jpg"/>
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
