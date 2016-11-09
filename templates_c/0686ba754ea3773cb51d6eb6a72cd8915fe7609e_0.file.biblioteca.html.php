<?php
/* Smarty version 3.1.30, created on 2016-10-24 03:00:35
  from "C:\xampp\htdocs\CPWEB\templates\biblioteca.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580d5d33e79e27_64922570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0686ba754ea3773cb51d6eb6a72cd8915fe7609e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\biblioteca.html',
      1 => 1477270801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_publico.html' => 1,
    'file:footer_publico.html' => 1,
  ),
),false)) {
function content_580d5d33e79e27_64922570 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
          <h2>BOLETÍN FISCAL NO. 5 3RA. </h2>
            <p>
              El pasado 14 de Julio de 2016, en el Diario Oficial de la Federación se publicó la Tercera Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016 (3ra RMRMF 2016), la cual entrará en vigor el 15 de agosto de 2016, salvo disposición específica en la misma y estará vigente hasta el 31 de diciembre del mismo año.
            </p>

          <h2>BOLETÍN FISCAL NO. 4  2DA. </h2>
            <p>
              El 6 de mayo, se publicó en el Diario Oficial de la Federación la Segunda Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016 (2da. RMRMF 2016), la cual entró en vigor el pasado 6 de junio, salvo algunas excepciones.
            </p>

          <h2>BOLETÍN FISCAL NO. 3 DECLARACIÓN ANUAL PERSONAS FÍSICAS</h2>
            <p>
              Al elaborar la Declaración Anual 2015, El Régimen de incorporación fiscal (RIF) Las personas que tributen bajo este régimen no están obligadas a presentar declaración anual, ya que sus pagos se consideran definitivos.
              Límite a las deducciones personales No podrán exceder de 10% del total de ingresos, aún por los que no se pague impuesto o 4 salarios mínimos del área del contribuyente elevado al año ($102,346), lo que resulte menor.
            </p>

            <h2>BOLETÍN FISCAL NO. 2 1RA. </h2>

              <p>
                El pasado 1 de Abril, se publicó en el Diario Oficial de la Federación la Primera Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016 (1ra. RMRMF 2016), la cual entrará en vigor al día hábil siguiente después de su publicación en el DOF, salvo disposición específica en la misma y estará vigente hasta el 31 de diciembre del presente.
              </p>

            <h2>BOLETÍN FISCAL NO. 1 </h2>

              <p>
                El pasado 23 de diciembre  de 2014, se publicó en el Diario Oficial de la Federación la Resolución Miscelánea Fiscal para 2016 (RMF2016), la cual entró en vigor el 1 de enero de 2016 y estará vigente hasta el 31 de diciembre del mismo año.
              </p>
        </section>

        <aside id="bienvenida">
          <div >
            <div >
              <h2>Biblioteca</h2><br>
              <p>
                <img src=".\IMAGE\biblioteca.jpg" height="150" width="220" />
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
