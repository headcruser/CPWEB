<?php
/* Smarty version 3.1.30, created on 2016-11-09 07:14:41
  from "C:\xampp\htdocs\CPWEB\templates\contador\tipo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5822bed158b041_55116431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '513287e628c47896026fde2d86d3acf9ff1fb5cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\contador\\tipo.html',
      1 => 1478672041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer.html' => 1,
  ),
),false)) {
function content_5822bed158b041_55116431 (Smarty_Internal_Template $_smarty_tpl) {
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


      <div class="contenedor">
          <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <!--MUESTRA LA TABLA CON LOS DATOS -->
          <table class="table" CELLSPACING=1  >

                <tr ALIGN=center>
                  <th align="center">Tipo</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
?>
                <tr ALIGN=center>
                  <td> <?php echo $_smarty_tpl->tpl_vars['tipo']->value['tipo'];?>
</td>
                  <td> <img src="../image/report.png" ></td>
                  <td>
                    <a href="tipo.php?accion=editar&id_tipo=<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
">
                      <img src="../image/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="tipo.php?accion=eliminar&id_tipo=<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
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
            <!--INSERTA UN NUEVO ELEMENTO-->
            <div class="alta">
              <form >
                  <!--<input class=button type=submit value="alta" name="accion">-->
                  <a  class=button href="tipo.php?accion=nuevo">NUEVO TIPO</a>
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
