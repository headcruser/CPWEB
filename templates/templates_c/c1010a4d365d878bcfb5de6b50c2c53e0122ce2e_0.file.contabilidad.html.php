<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-04 20:37:32
  from 'C:\xampp2\htdocs\CPWEB\templates\publico\contabilidad.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4e827c1b6749_33700804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1010a4d365d878bcfb5de6b50c2c53e0122ce2e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\contabilidad.html',
      1 => 1515094510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publico/header_publico.html' => 1,
    'file:publico/footer_publico.html' => 1,
  ),
),false)) {
function content_5a4e827c1b6749_33700804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312719155a4e827c1a3927_45531656', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18793158465a4e827c1a4f58_79139728', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11955791805a4e827c1a5d27_42304279', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3837328365a4e827c1ac0d8_04055354', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_651052495a4e827c1b5306_62438736', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout/page.html");
}
/* {block 'title'} */
class Block_312719155a4e827c1a3927_45531656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_312719155a4e827c1a3927_45531656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>ALIANZAS</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_18793158465a4e827c1a4f58_79139728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'icon' => 
  array (
    0 => 'Block_18793158465a4e827c1a4f58_79139728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_11955791805a4e827c1a5d27_42304279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11955791805a4e827c1a5d27_42304279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:publico/header_publico.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_3837328365a4e827c1ac0d8_04055354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3837328365a4e827c1ac0d8_04055354',
  ),
);
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
          <img src="<?php echo @constant('IMG');?>
contabilidad.png" height="150" width="220" />
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
class Block_651052495a4e827c1b5306_62438736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_651052495a4e827c1b5306_62438736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:publico/footer_publico.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
