<?php
/* Smarty version 3.1.30, created on 2016-10-24 04:30:06
  from "C:\xampp\htdocs\CPWEB\templates\alianzas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d722e979da5_22497063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a20c80427b1f667f902519f02712ca5cd6e9b5de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\alianzas.html',
      1 => 1477276100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d722e979da5_22497063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Alianzas </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
         <section>
          <h1>SOCIOS</h1>

          <article>
                <p>
                Actualmente con la finalidad de apoyar de  manera integral a sus clientes , se han establecido alianzas con especialistas en las áreas de :
                </p>

                <h2>Propiedad Intelectual</h2>
                <ul>
                  <li>Nombre: Lofton</li>
                  <li><a href="http://www.loftonsc.com/servicios/juridico/juridico-corporativo/propiedad-industrial.html?/propiedad-industrial.html"></a>Página web:</li>
                  <li>Teléfono:  (55)1500-0650      EXT. 1201</li>
                  <li>Correo:  contacto@loftonsc.com</li>
                </ul>

              <h2>Comercio Exterior</h2>
              <ul>
                <li>Nombre: SERVICIO CORPORATIVO EN COMERCIO EXTERIOR, S.C.</li>
                <li>Página web: http://mexicoxport.com/empresa.php?id=258</li>
                <li>Teléfono: 3143325119, 3143324544, 3143327266</li>
                <li>Correo:</li>
              </ul>

              <h2>Derecho civil</h2>
              <ul>
                <li>Nombre: Bufet Montanya</li>
                <li>Página web:  http://montanya-advocats.com/index.php</li>
                <li>Teléfono:(5255)90003048</li>
              </ul>

              <h2>Derecho Corporativo y Comercial</h2>
              <ul>
                <li>Nombre: Bufete Holguin y Abogados(BHA)</li>
                <li>Página web: http://holguinabogados.com.mx/</li>
                <li>Teléfono: (442) 213 05 83 y 213 02 64</li>
                <li>Correo:bha@holguinabogados.com.mx</li>
              </ul>

                <h2>Estudios de precios de Transferencia</h2>
              <ul>
                <li>Nombre SAT</li>
                <li>Página web: http://www.sat.gob.mx/contacto/Paginas/directorio_modulos.aspx</li>
                <li>Teléfono: 01 55 627 22 728 </li>
                <li>Correo: denuncias@sat.gob.mx.</li>
              </ul>

              <h2>Derecho Fiscal</h2>
              <ul>
                  <li>  Derecho  y obligaciones de los contribuyentes</li>
                  <li>Página web: https://sfpya.edomexico.gob.mx/recaudacion/asistencia/DerechosObligaciones.jsp?a=3
                  </li>
                  <li>Teléfono: 01 800 715 43 50</li>
                  <li>Correo: asismex@edomex.gob.mx</li>
              </ul>

              <h2>Derecho Laboral</h2>
                  <ul>
                    <li>Nombre: Ustariza Abogados</li>
                    <li>Teléfono: 6108161 / 6108164</li>
                    <li>Correo: </li>
                  </ul>
          </article>
          
        </section>

        <aside id="bienvenida">
          <div >
            <div class="container-fluid">
              <h2>Alianzas</h2><br>
              <p>
                <img src=".\IMAGE\alianzas.jpg" height="150" width="220" />
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
