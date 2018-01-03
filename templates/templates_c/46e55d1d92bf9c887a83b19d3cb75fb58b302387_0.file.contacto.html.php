<?php
/* Smarty version 3.1.30, created on 2016-12-09 18:33:58
  from "C:\xampp\htdocs\CPWEB\templates\publico\contacto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584aeb06a8a8d2_06000479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e55d1d92bf9c887a83b19d3cb75fb58b302387' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\publico\\contacto.html',
      1 => 1478670904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publico/header_publico.html' => 1,
    'file:publico/footer_publico.html' => 1,
  ),
),false)) {
function content_584aeb06a8a8d2_06000479 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>     <!--INDICA QUE ES UN DOCUMENTO HTML -->
<html>
  <head>
      <meta charset="utf-8">

      <!--hoja de estilos -->
      <link rel="stylesheet" type="text/css" href="css/publico.css" >
      <link rel="stylesheet" type="text/css" href="css/fonts/style.css" >
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
    <title> Contacto </title>
  </head>
  <body class="cuerpo">
    <!--contenedor principal -->
    <div id="wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:publico/header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="contenedor">
        <section>

        <h1>contactanos</h1>

        <div class="formulario ">
          <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="Nombre"  >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                  <div class="col-sm-10">
                   <input type="email" class="form-control" name="correo"  >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
                  <div class="col-sm-10">
                   <input type="tel" class="form-control" name="telefono"  >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <textarea name="comentario" class="form-control" rows="8" cols="40"></textarea>
                  </div>
                </div>

                  <input type="submit" name="enviar" value="enviar">
          </form>
        </div>




          <p>
            CONOZCA LO MEJOR EN SERVICIOS INTEGRALES DE CONTABILIDAD EN GUANAJUATO! En Contadores CPWEB  de Celaya – Guanajuato estamos para atender todas sus necesidades en el área fiscal, de auditoría y contable en México. Contáctenos con gusto atenderemos todas sus preguntas e inquietudes:
          </p>

        </section>

        <aside id="bienvenida">
          <div >
            <div >
              <h2>Contactanos</h2><br>
              <p>
                <img src=".\IMAGE\contacto.jpg" height="150" width="220" />
              </p>

            </div>
          </div>
        </aside>
      </div>  <!--Fin del contenedor-->

      <!--Seccion footer -->
      <?php $_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
