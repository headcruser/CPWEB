<?php
/* Smarty version 3.1.30, created on 2016-10-15 07:06:16
  from "C:\xampp\htdocs\CPWEB\templates\select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5801b9488c62b9_11102126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d2849adcf1550707a5a8e97e8de2b2d2c05cf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\select.component.html',
      1 => 1476507956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5801b9488c62b9_11102126 (Smarty_Internal_Template $_smarty_tpl) {
?>

<select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
         
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
         	<option value=<?php echo $_smarty_tpl->tpl_vars['dato']->value[0];?>
 <?php if ($_smarty_tpl->tpl_vars['dato']->value[0] == $_smarty_tpl->tpl_vars['selected']->value) {?>
         		selected <?php }?>>
         		<?php echo $_smarty_tpl->tpl_vars['dato']->value[1];?>
</option>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


 </select><?php }
}
