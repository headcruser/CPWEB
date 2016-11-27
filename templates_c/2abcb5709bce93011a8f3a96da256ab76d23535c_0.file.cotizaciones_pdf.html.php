<?php
/* Smarty version 3.1.30, created on 2016-11-25 22:03:12
  from "C:\xampp\htdocs\CPWEB\templates\cotizaciones_pdf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838a710a7aa17_77263386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2abcb5709bce93011a8f3a96da256ab76d23535c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cotizaciones_pdf.html',
      1 => 1480107788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838a710a7aa17_77263386 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- HOJA DE ESTILOS -->
	 <link rel="stylesheet" type="text/css" href="../css/main.css" >


    <h1 class="titulo">Cotizaciones </h1>
    <!--DETALE DE LAS COTIZACIONES -->
    <div class="contenedor">
      <div class="contenedor">
        <table CELLSPACING=1  >

          <tr ALIGN=center>
            <th >id cotizacion  </th>
            <th>Razon Social</th>
            <th>Fecha</th>
            <th>Total Servicio</th>
            <th>Total</th>

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
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </table>
      </div>



    <!--DETALLE DE LOS SERVICIOS -->
      <div class="contenedor">
        <table class="table"  CELLSPACING=1  >

        <tr ALIGN=center>
          <th>ID_CLiente  </th>
          <th>Cantidad</th>
          <th>Precio</th>

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
          <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['precio'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
      </div>
    </div>
<?php }
}
