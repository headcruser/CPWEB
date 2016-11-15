<?php
/* Smarty version 3.1.30, created on 2016-11-14 22:52:39
  from "C:\xampp\htdocs\CPWEB\templates\cliente\cotizacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582a32276f6eb8_80485730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da1ef896d103240d93fae1f6871643a79ae51270' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cliente\\cotizacion.html',
      1 => 1479160355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_582a32276f6eb8_80485730 (Smarty_Internal_Template $_smarty_tpl) {
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
      <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table-condensed"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >ID_COTIZACION </th>
                  <th>CLIENTE </th>
                  <th>FECHA </th>
                  <th>VER</th>
                  <th>EDITAR </th>
                  <th>ELIMINAR</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cotizacion']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['razon_social'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['fecha'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="cotizacion.php?accion=editar&id_cotizacion=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="cotizacion.php?accion=eliminar&id_cotizacion=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
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
                      <a  class=button href="cotizacion.php?accion=nuevo">NUEVA COTIZACION</a>
                  </form>
                </div>
            </div>
      <?php $_smarty_tpl->_subTemplateRender("file:../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
</html>
<?php }
}
