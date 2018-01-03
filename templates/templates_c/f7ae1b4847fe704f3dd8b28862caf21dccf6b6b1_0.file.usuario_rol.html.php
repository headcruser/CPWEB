<?php
/* Smarty version 3.1.30, created on 2016-11-02 04:50:32
  from "C:\xampp\htdocs\CPWEB\templates\usuario_rol.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5819628837c0d3_73010176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7ae1b4847fe704f3dd8b28862caf21dccf6b6b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\usuario_rol.html',
      1 => 1478058164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5819628837c0d3_73010176 (Smarty_Internal_Template $_smarty_tpl) {
?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../image/iconHotel.png"> 
    
    <!--hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="../css/main.css" > 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>
<body>

    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


      <div id="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >ID_USUARIO </th>
                  <th>ID_ROL</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario_rol']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="usuario_rol.php?accion=editar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                       <a href="usuario_rol.php?accion=eliminar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
">
                      <img src="../image/cancel.png" >
                    </a>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table> <!-- fin de tabla -->

                <div class="alta">
                  <form >
                      <a  class=button href="usuario_rol.php?accion=nuevo">Nueva asignacion </a>
                  </form>
                </div>
            </div>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

    <!-- CODIGO JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
