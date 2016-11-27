
<?php

  include('../cp_web_class.php'); // Incluye la clase clientes
  $web=new Cpweb;
  $cadena_jason='
  [
      {
      "id_servicio": 9,
      "servicio": "Abogado",
      "precio": "15.90"
      },
      {
      "id_servicio": 10,
      "servicio": "Cotabilidad 1",
      "precio": "12.90"
      },
      {
      "id_servicio": 11,
      "servicio": "Brujeria del SAT",
      "precio": "13.90"
      }
]';

  //Obtengo mis servicios
  $misServicios=$web->getAll('select * from servicio order by servicio');

  //decodifica los servicios de burton
  $burtonServices=json_decode($cadena_jason);
  $newList=array();
  $posicion=0;

  // convertir el arreglo json a un arreglo convencional
  foreach ($burtonServices as $service)
  {
    $newList[$posicion]['id_sercicio']=$service->id_servicio;
    $newList[$posicion][0]=$service->id_servicio;
    $newList[$posicion]['servicio']=$service->servicio."(burton)";
    $newList[$posicion][1]=$service->servicio."(burton)";
    $newList[$posicion]['precio']=$service->precio;
    $newList[$posicion][2]=$service->precio;

    $posicion++;
  }

  //unir ambos arreglos
  $Servicios=array_merge($misServicios,$newList);
  $nombresCol=array_keys($Servicios[0]);  //Obtiene el identificador del arreglo en la primera


  $template=$web->template();	//llama a la libreria de smarty
  $template->assign('datos',$Servicios); 	// envio de parametros
  $template->assign('selected',null);	//enviamos el parametro del combo box
  $template->assign('id',$nombresCol[0]);	//Envia el nombre de las columnas
  $webServicesCombo=$template->fetch('select.component.html');
  print_r($webServicesCombo);
 ?>
