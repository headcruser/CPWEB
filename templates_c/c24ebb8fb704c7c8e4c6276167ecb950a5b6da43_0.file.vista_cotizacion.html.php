<?php
/* Smarty version 3.1.30, created on 2016-12-09 20:40:34
  from "C:\xampp\htdocs\CPWEB\templates\vista_cotizacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584b08b29dbc56_02506986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c24ebb8fb704c7c8e4c6276167ecb950a5b6da43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\vista_cotizacion.html',
      1 => 1481312053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_584b08b29dbc56_02506986 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>cotizacion</title>
  </head>
<body>

    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



      <div id="contenedor">
      <h1>Lista de reportes Eléctronicos</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >ID </th>
                  <th>Razon Social</th>
                  <th>Fecha</th>
                  <th>Total del Servicio</th>
                  <th>Total</th>
                  <th>PDF</th>
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
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['total_servicio'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['total'];?>
</td>
                  <td>
                    <a  href="vista_cotizacion.php?accion=imprimir&id_cotizacion=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cotizacion'];?>
">
                      <img src="../image/pdf.png" >
                    </a>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>


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
</html>
<?php }
}
