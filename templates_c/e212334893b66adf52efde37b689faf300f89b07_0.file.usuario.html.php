<?php
/* Smarty version 3.1.30, created on 2016-11-09 07:07:43
  from "C:\xampp\htdocs\CPWEB\templates\admin\usuario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5822bd2f9bedf1_71413208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e212334893b66adf52efde37b689faf300f89b07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\admin\\usuario.html',
      1 => 1478671518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_5822bd2f9bedf1_71413208 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <th >id Usuario </th>
                  <th>E-mail</th>
                  <!-- <th>Contraseña</th> -->
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['email'];?>
</td>
                  <!-- <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['contrasena'];?>
</td> -->
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="usuario.php?accion=editar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="usuario.php?accion=eliminar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
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
                      <a  class=button href="usuario.php?accion=nuevo">NUEVO usuario</a>
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
