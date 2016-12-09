
<?php
	/**Formulario que construye un reporte de los usuarios*/
	include('../cp_web_class.php');

	$web=new Cpweb; //Crea un objeto de la clase principal
	$privilegio=null;
	$templates=$web->template();
	$accion=null;
	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
	}


	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
	 		$privilegio=$web->obtenerRolSesion();
	 }

	 $header=$web->Privilegiosheader($privilegio);


	 switch ($accion )
	 {
	 	case 'imprimir':
			//Muestra el contenido del archivo PDF
			$id_cotizacion=$_GET['id_cotizacion'];

			//Consultas
			$detalle =$web-> fetchAll("select id_servicio,cantidad,precio from v_cotizacion where id_cotizacion =".$id_cotizacion);
			$cotizacion=$web->fetchAll("select id_cotizacion, razon_social, fecha, count(id_servicio) as total_servicio, sum(cantidad) as total from v_cotizacion group by 1,2,3");

			$templates->assign('cotizacion',$cotizacion);
			$templates->assign('detalle',$detalle);
			$reporte=$templates->fetch('cotizaciones_pdf.html');

			require_once(PATH.'/lib/html2pdf/vendor/autoload.php');
			$html2pdf = new HTML2PDF('P', 'A4', 'fr');
			$html2pdf->setDefaultFont('Arial');
			$html2pdf->writeHTML($reporte, null);
			$html2pdf->Output('cotizacion.pdf');
			//echo $reporte;
			 die();
	 		break;

	 	default:
	 		break;
	 }



	$cotizacion=$web->fetchAll("select id_cotizacion,
	 																	razon_social,
																		fecha,
	 													        count(id_servicio) as total_servicio,
														 				sum(cantidad) as total from v_cotizacion group by 1,2,3");

	$templates->assign('cotizacion',$cotizacion);
	$templates->assign('header',$header);
	$templates->display('vista_cotizacion.html');

 ?>
