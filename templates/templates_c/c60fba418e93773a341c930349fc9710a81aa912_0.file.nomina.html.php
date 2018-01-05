<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-05 19:31:35
  from 'C:\xampp2\htdocs\CPWEB\templates\publico\nomina.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4fc4872bb728_44643486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c60fba418e93773a341c930349fc9710a81aa912' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\nomina.html',
      1 => 1515177062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publico/header_publico.html' => 1,
    'file:../layout/footer.html' => 1,
  ),
),false)) {
function content_5a4fc4872bb728_44643486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_786488245a4fc4872a8bc0_51062006', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5680136395a4fc4872aa239_08889805', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2577085975a4fc4872aafe0_64045712', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14806095235a4fc4872b1352_98292986', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8094068455a4fc4872ba2f3_39872471', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout/page.html");
}
/* {block 'title'} */
class Block_786488245a4fc4872a8bc0_51062006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_786488245a4fc4872a8bc0_51062006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>NOMINA</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_5680136395a4fc4872aa239_08889805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'icon' => 
  array (
    0 => 'Block_5680136395a4fc4872aa239_08889805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_2577085975a4fc4872aafe0_64045712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2577085975a4fc4872aafe0_64045712',
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
class Block_14806095235a4fc4872b1352_98292986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14806095235a4fc4872b1352_98292986',
  ),
);
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
          <img src="<?php echo @constant('IMG');?>
nomina.jpg" height="150" width="220" />
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
class Block_8094068455a4fc4872ba2f3_39872471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8094068455a4fc4872ba2f3_39872471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
