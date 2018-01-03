<?php
/* Smarty version 3.1.30, created on 2018-01-03 22:55:52
  from "C:\xampp2\htdocs\CPWEB\templates\publico\contabilidad.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d5168ece5f9_58471722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1010a4d365d878bcfb5de6b50c2c53e0122ce2e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\contabilidad.html',
      1 => 1515016544,
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
function content_5a4d5168ece5f9_58471722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19338942405a4d5168ec2e57_09448602', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4172864855a4d5168ec41d6_19718132', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5683907345a4d5168ec6117_83452264', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278628865a4d5168ecb948_91234775', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14782725295a4d5168ecdd87_66712849', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_19338942405a4d5168ec2e57_09448602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>ALIANZAS</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_4172864855a4d5168ec41d6_19718132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_5683907345a4d5168ec6117_83452264 extends Smarty_Internal_Block
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
class Block_278628865a4d5168ecb948_91234775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contenedor">
  <section>
    <h2>TODA TU CONTABILIDAD EN UNA SOLA PLATAFORMA</h2>

    <ul>
      <li>Emite y envía facturas electrónicas (CFDI) y PDF de forma ilimitada y con un solo clic. </li>
      <li>Conoce tu estatus ante el SAT y monitorea tu buzón tributario. </li>
      <li>Clasifica tus ingresos y gastos según rubro para control de tu flujo. </li>
      <li>Personaliza tus facturas con el logo de tu empresa. </li>

      <li>Visualiza tus ingresos y tus gastos para conocer tu situación financiera. </li>

      <li>Muchas más funcionalidades. Solicita tu demo gratis.</li>
      <li>Tus impuestos al día, cumplimiento de tus obligaciones y asesoría fiscal.</li>
      <li>Facturación electrónica ilimitada, clasificada y en un solo sitio.</li>
    </ul>

  </section>

  <aside id="bienvenida">
    <div >
      <div >
        <h2>Contabilidad </h2><br>
        <p>
          <img src=".\IMAGE\contabilidad.png" height="150" width="220" />
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
class Block_14782725295a4d5168ecdd87_66712849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
