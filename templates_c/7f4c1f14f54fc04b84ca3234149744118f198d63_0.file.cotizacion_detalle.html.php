<?php
/* Smarty version 3.1.30, created on 2016-11-14 23:45:46
  from "C:\xampp\htdocs\CPWEB\templates\cliente\cotizacion_detalle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582a3e9a1d3d55_08395203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f4c1f14f54fc04b84ca3234149744118f198d63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cliente\\cotizacion_detalle.html',
      1 => 1479163536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_582a3e9a1d3d55_08395203 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <th >COTIZACION </th>
                  <th>SERVICIO</th>
                  <th>CANTIDAD</th>
                  <th>VER</th>
                  <th>EDITAR</th>
                  <th>ELIMINAR</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cotizacion_detalle']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_servicio'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['cantidad'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="cotizacion_detalle.php?accion=editar&id_cotizacion=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
&id_servicio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_servicio'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                       <a href="cotizacion_detalle.php?accion=eliminar&id_cotizacion=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
&id_servicio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_servicio'];?>
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
                      <a  class=button href="cotizacion_detalle.php?accion=nuevo">Nueva Asignacion </a>
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
