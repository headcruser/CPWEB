<?php
/* Smarty version 3.1.30, created on 2018-01-03 23:02:52
  from "C:\xampp2\htdocs\CPWEB\templates\publico\planeacionFinanciera.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d530cb91c76_11125354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15010e8546224d68cb050105c09f5a39cb7e51e0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\planeacionFinanciera.html',
      1 => 1515016966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/page.html' => 1,
    'file:publico/header_publico.html' => 1,
    'file:publico/footer_publico.html' => 1,
  ),
),false)) {
function content_5a4d530cb91c76_11125354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11312721565a4d530cb862d5_15312381', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7972556075a4d530cb876b8_28588630', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19947884585a4d530cb893a4_32834507', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15475420295a4d530cb8b043_52982975', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11787917485a4d530cb90873_15094754', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_11312721565a4d530cb862d5_15312381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>NOMINA</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_7972556075a4d530cb876b8_28588630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_19947884585a4d530cb893a4_32834507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_15475420295a4d530cb8b043_52982975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_11787917485a4d530cb90873_15094754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
