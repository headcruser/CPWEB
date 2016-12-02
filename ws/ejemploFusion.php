
<?php

  include('../cp_web_class.php'); // Incluye la clase clientes
  $web=new Cpweb;

  //inicializatr curl
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://172.20.108.84:8080/cp_web/ws/servicios/mostrar",  //Servicio web a consumir
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",  //Solo por get
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 14c36592-3bbf-a793-62cc-1bd12fb7a1bb"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "cURL Error #:" . $err;
} else {
  //echo $response;
    $cadena_jason=$response;
}




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
    $newList[$posicion]['servicio']=$service->servicio."(burger)";
    $newList[$posicion][1]=$service->servicio."(burger)";
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
