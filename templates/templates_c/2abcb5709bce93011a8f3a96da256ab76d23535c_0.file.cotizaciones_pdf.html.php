<?php
/* Smarty version 3.1.30, created on 2016-12-10 16:07:28
  from "C:\xampp\htdocs\CPWEB\templates\cotizaciones_pdf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584c1a30936835_12111229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2abcb5709bce93011a8f3a96da256ab76d23535c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cotizaciones_pdf.html',
      1 => 1481382445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584c1a30936835_12111229 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Estilos para los documentos -->
<style type="text/css">
		.titulo
		{
			font-family: Helvetica, Geneva, Arial, sans-serif;
			background:#2980b9;
			color:#ecf0f1;
			text-align: center;
			border-radius:10px;
		}

    .table
    {
      border-collapse: collapse;
      width: 100%;
      font-size:12px;
      font-family: Helvetica, Geneva, Arial, sans-serif;
      margin: 0 auto;   /**Centra la tabla en el contenedor*/
      border: 1px;
    }
    th
    {
      text-align: center;
      background-color: #4CAF50;
      color: white;
    }

    th, td
    {
      padding: 8px;
      font-size:14px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

  </style>

	<page backtop="5%" backbottom="5%" backleft="5%" backright="5%">

    <h1 class="titulo">Cotizaciones </h1>
    <!--DETALE DE LAS COTIZACIONES -->
			  <table class="table">

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
	</page>


<page backtop="5%" backbottom="5%" backleft="5%" backright="5%">

    <!--DETALLE DE LOS SERVICIOS -->
		<h1 class="titulo">Detalle de los servicios </h1>
        <table class="table" >

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
</page>
<?php }
}
