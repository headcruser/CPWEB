<?php
/* Smarty version 3.1.30, created on 2016-11-02 04:18:11
  from "C:\xampp\htdocs\CPWEB\templates\privilegio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58195af3a5f9b2_08998745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3119679cce6a17c77b6a8fec1110c23dd76e66e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\privilegio.html',
      1 => 1478056598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58195af3a5f9b2_08998745 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <th >ID_PRIVILEGIO </th>
                  <th>PRIVILEGIO</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['privilegio']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['privilegio'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="privilegio.php?accion=editar&id_privilegio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="privilegio.php?accion=eliminar&id_privilegio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
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

            </table>

                <div class="alta">
                  <form >
                      <!--<input class=button type=submit value="alta" name="accion">-->
                      <a  class=button href="privilegio.php?accion=nuevo">NUEVO PRIVILEGIO</a>
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
