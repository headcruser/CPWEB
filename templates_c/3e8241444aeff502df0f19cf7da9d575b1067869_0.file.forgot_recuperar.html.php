<?php
/* Smarty version 3.1.30, created on 2016-11-08 18:52:52
  from "C:\xampp\htdocs\CPWEB\templates\forgot_recuperar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582210f4327bf6_52932454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8241444aeff502df0f19cf7da9d575b1067869' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\forgot_recuperar.html',
      1 => 1478040173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582210f4327bf6_52932454 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form method="POST" action="forgot.php?accion=restablecer">

		<label>Escriba una nueva contraseña</label>
		<input type="password" name="contrasena">


		<label>Confirme la contraseña</label>
		<input type="password" name="contrasena2">

		<input type="hidden" name="clave" value="<?php echo $_smarty_tpl->tpl_vars['clave']->value;?>
">

		<input type="submit"  value="recuperar">

</form><?php }
}
