<?php
/* Smarty version 3.1.30, created on 2018-01-03 23:00:25
  from "C:\xampp2\htdocs\CPWEB\templates\publico\nomina.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d5279030d45_25305990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c60fba418e93773a341c930349fc9710a81aa912' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\nomina.html',
      1 => 1515016823,
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
function content_5a4d5279030d45_25305990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18799717845a4d527902a4a4_35256971', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21022026305a4d527902b904_81369155', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5693863595a4d527902d8b4_61180786', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2533745855a4d527902ecf4_98094384', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1277576135a4d5279030651_27562098', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_18799717845a4d527902a4a4_35256971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>ALIANZAS</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_21022026305a4d527902b904_81369155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_5693863595a4d527902d8b4_61180786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:publico/header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_2533745855a4d527902ecf4_98094384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contenedor">
  <section>
    <h1>  ¿Qué es una nómina?</h1>
      <p>
        Una nómica es el registro financiero que una empresa realiza sobre los salarios de sus empleados, bonificaciones y deducciones
      </p>

  </section>

  <aside id="bienvenida">
    <div >
      <div >
        <h2>Nomina</h2><br>
        <p>
          <img src=".\IMAGE\nomina.jpg" height="150" width="220" />
        </p>

      </div>
    </div>

  </aside>

</div>  <!--Fin del contenedor-->
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1277576135a4d5279030651_27562098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
