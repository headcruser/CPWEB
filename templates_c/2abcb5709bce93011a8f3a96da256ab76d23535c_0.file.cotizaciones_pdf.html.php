<?php
/* Smarty version 3.1.30, created on 2016-11-22 19:44:43
  from "C:\xampp\htdocs\CPWEB\templates\cotizaciones_pdf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5834921b15a230_31659555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2abcb5709bce93011a8f3a96da256ab76d23535c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cotizaciones_pdf.html',
      1 => 1479840257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5834921b15a230_31659555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REPORTE PDF</title>
    <style type"text/css" >
      .rojo
      {
        color:red
      }
      .text-center
      {
         text-align: center;
       }
    </style>

  </head>
  <body>


    <h1 class="text-center rojo">Cotizaciones </h1>

    <!--DETALE DE LAS COTIZACIONES -->
  <table class="table"  CELLSPACING=1  >

    <tr ALIGN=center>
      <th >id cotizacion  </th>
      <th>Razon Social</th>

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
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>



          <!--DETALLE DE LOS SERVICIOS -->
          <table class="table"  CELLSPACING=1  >

          <tr ALIGN=center>
            <th >id servicio  </th>
            <th> cantidad </th>

          </tr>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
          <tr ALIGN=center>
            <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_servicio'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['cantidad'];?>
</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </table>

  </body>
</html>
<?php }
}
