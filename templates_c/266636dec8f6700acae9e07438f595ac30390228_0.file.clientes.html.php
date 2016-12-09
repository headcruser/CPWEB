<?php
/* Smarty version 3.1.30, created on 2016-12-09 05:15:02
  from "C:\xampp\htdocs\CPWEB\templates\contador\clientes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a2fc636eb23_98594596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266636dec8f6700acae9e07438f595ac30390228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\contador\\clientes.html',
      1 => 1481256830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a2fc636eb23_98594596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- VISTA DE LOS CLIENTES -->
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
                  <th >id Cliente </th>
                  <th>Razón Social</th>
                  <th>RFC</th>
                  <th>Domicilio</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['id_cliente'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['razon_social'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['rfc'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['domicilio'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['telefono'];?>
 </td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['correo'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="clientes.php?accion=editar&id_cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id_cliente'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="clientes.php?accion=eliminar&id_cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id_cliente'];?>
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

                  <!--INSERTA UN NUEVO CLIENTE-->

                <div class="alta">
                  <form >
                      <!--<input class=button type=submit value="alta" name="accion">-->
                      <a  class=button href="clientes.php?accion=nuevo">NUEVO CLIENTE</a>
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
