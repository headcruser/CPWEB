<?php
/* Smarty version 3.1.30, created on 2016-12-09 05:01:19
  from "C:\xampp\htdocs\CPWEB\templates\admin\rol.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a2c8fb5b601_74836723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb0db5c25dfdfa1a98fb865c8c1c36a43b0c13d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\admin\\rol.html',
      1 => 1481255893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_584a2c8fb5b601_74836723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--vista de los privilegios  -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../image/iconHotel.png">

    <!--hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="../css/main.css" >
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >
    <title>Roles disponibles</title>
</head>
<body>
    <!-- contenedor principal -->
    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


      <div id="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >id Rol </th>
                  <th>Rol</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rol']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['rol'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="rol.php?accion=editar&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="rol.php?accion=eliminar&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
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
                      <a  class=button href="rol.php?accion=nuevo">NUEVO ROL</a>
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
