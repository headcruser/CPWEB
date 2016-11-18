<?php
/* Smarty version 3.1.30, created on 2016-11-18 18:49:44
  from "C:\xampp\htdocs\CPWEB\templates\cotizacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582f3f38299844_23568626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37963ad5922cc0d4a129acbe671b4ff4b793410e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\cotizacion.html',
      1 => 1479491374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_582f3f38299844_23568626 (Smarty_Internal_Template $_smarty_tpl) {
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


	      <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


				<div class="panel panel-primary">
					<div class="panel-heading">
						Querido y amado usuario, usted puede cargar los servicios que solicita
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
					<h3 ><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
					<?php }?>

					<div >
							<!-- Formulario -->
							<form  class="form-horizontal"action="cotizacion.php?accion=nuevo" method="POST">

								<!-- sELECCION DE SERVICIOS -->
								<div class="form-group">
									<label class="col-sm-6 control-label" for="formGroup">Selecciona servicio</label>
										<div class="col-sm-4">
													<?php echo $_smarty_tpl->tpl_vars['combo_servicios']->value;?>

										</div>
								</div>

								<!-- CANTIDAD -->
								<div class="form-group">
										<label class="col-sm-6 control-label" for="formGroup">Cantidad de Horas</label>
									<div class="col-sm-4">
										<input type="text" class="form-control"  id="cantidad" name="cantidad" placeholder="Cantidad de horas" required>
									</div>
								</div>

								<!-- BOTON ENVIAR -->
								<div class="form-group">
									<div class="col-sm-12">
										<p> <input class="btn btn-primary btn-lg active" type="submit" value="Agregar"></p>
									</div>

								</div>


							</form>	<!--  FIN DEL FORMULARIO-->

							<!--SELECCIONAR  -->
			 				<form  class="form-horizontal"action="cotizacion.php?accion=terminar" method="POST">

			 					<!-- sELECCION DE SERVICIOS -->
			 					<div class="form-group">
			 						<label class="col-sm-6 control-label" for="formGroup">Selecciona Razon Social</label>
			 							<div class="col-sm-4">
			 										<?php echo $_smarty_tpl->tpl_vars['combo_cliente']->value;?>

			 							</div>
			 					</div>


								<div class="form-group">

								<?php if (isset($_smarty_tpl->tpl_vars['cotizacion']->value)) {?>
									<div class="col-sm-12">
										<!-- TABLA DE INFORMACION DE LA COTIZACION -->
									<table class="table-condensed" >
											<tr>
												<th>Servicio</th>
												<th>Cantidad</th>
												<th>Eliminar</th>
											</tr>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cotizacion']->value, 'cotiza');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cotiza']->value) {
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['cotiza']->value['servicio'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['cotiza']->value['cantidad'];?>
</td>
												<td><a href="cotizacion.php?id_servicio=<?php echo $_smarty_tpl->tpl_vars['cotiza']->value['id_servicio'];?>
&accion=eliminar"><img src="../image/cancel.png"></a> </td>
											</tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


									</table>
									<?php } else { ?>
											<h1>No has Seleccionado ningun sericio </h1>
									<?php }?>

									</div>
								</div>  <!--FIN DEL FROM-GROUP-->

			 					<!-- BOTON ENVIAR -->
			 					<div class="form-group">
			 						<div class="col-sm-12">
			 							<p> <input class="btn btn-primary btn-lg active" type="submit" value="Terminar Cotizacion"></p>
			 						</div>

			 					</div>
			 				</form>

					</div>	<!--FIN DEL CONTAINER -->

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
