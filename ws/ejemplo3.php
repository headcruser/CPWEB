
<?php

  include('../cp_web_class.php'); // Incluye la clase clientes
  $web=new Cpweb;
  $cadena_jason='[
  {
    "0": "20",
    "1": null,
    "2": null,
    "id_servicio": "20",
    "servicio": null,
    "precio": null
  },
  {
    "0": "16",
    "1": null,
    "2": null,
    "id_servicio": "16",
    "servicio": null,
    "precio": null
  },
  {
    "0": "15",
    "1": null,
    "2": null,
    "id_servicio": "15",
    "servicio": null,
    "precio": null
  },
  {
    "0": "22",
    "1": "Abogado P",
    "2": "10.00",
    "id_servicio": "22",
    "servicio": "Abogado P",
    "precio": "10.00"
  },
  {
    "0": "11",
    "1": "Abogado Programador karateka",
    "2": "666.00",
    "id_servicio": "11",
    "servicio": "Abogado Programador karateka",
    "precio": "666.00"
  },
  {
    "0": "13",
    "1": "Abogado programador Ninja",
    "2": null,
    "id_servicio": "13",
    "servicio": "Abogado programador Ninja",
    "precio": null
  },
  {
    "0": "26",
    "1": "Aldo",
    "2": "100.00",
    "id_servicio": "26",
    "servicio": "Aldo",
    "precio": "100.00"
  },
  {
    "0": "12",
    "1": "Betza",
    "2": "30.00",
    "id_servicio": "12",
    "servicio": "Betza",
    "precio": "30.00"
  },
  {
    "0": "10",
    "1": "Borrar a futuro",
    "2": "20.50",
    "id_servicio": "10",
    "servicio": "Borrar a futuro",
    "precio": "20.50"
  },
  {
    "0": "6",
    "1": "Contador del demonio",
    "2": "15.00",
    "id_servicio": "6",
    "servicio": "Contador del demonio",
    "precio": "15.00"
  },
  {
    "0": "8",
    "1": "Contador del demonio",
    "2": "15.00",
    "id_servicio": "8",
    "servicio": "Contador del demonio",
    "precio": "15.00"
  },
  {
    "0": "9",
    "1": "Contador del diablito",
    "2": "0.50",
    "id_servicio": "9",
    "servicio": "Contador del diablito",
    "precio": "0.50"
  },
  {
    "0": "7",
    "1": "Contador del diablito",
    "2": "0.50",
    "id_servicio": "7",
    "servicio": "Contador del diablito",
    "precio": "0.50"
  },
  {
    "0": "2",
    "1": "Contaduria",
    "2": "15.00",
    "id_servicio": "2",
    "servicio": "Contaduria",
    "precio": "15.00"
  },
  {
    "0": "18",
    "1": "daniel",
    "2": "15.90",
    "id_servicio": "18",
    "servicio": "daniel",
    "precio": "15.90"
  },
  {
    "0": "28",
    "1": "Daniel Martinez",
    "2": "666.00",
    "id_servicio": "28",
    "servicio": "Daniel Martinez",
    "precio": "666.00"
  },
  {
    "0": "19",
    "1": "Felipe",
    "2": "1234.00",
    "id_servicio": "19",
    "servicio": "Felipe",
    "precio": "1234.00"
  },
  {
    "0": "23",
    "1": "JAJAJAJAJA",
    "2": "1234.00",
    "id_servicio": "23",
    "servicio": "JAJAJAJAJA",
    "precio": "1234.00"
  },
  {
    "0": "14",
    "1": "Jorge",
    "2": "666.00",
    "id_servicio": "14",
    "servicio": "Jorge",
    "precio": "666.00"
  },
  {
    "0": "24",
    "1": "Musico",
    "2": "50.50",
    "id_servicio": "24",
    "servicio": "Musico",
    "precio": "50.50"
  },
  {
    "0": "17",
    "1": "Nuevo",
    "2": "100.00",
    "id_servicio": "17",
    "servicio": "Nuevo",
    "precio": "100.00"
  },
  {
    "0": "4",
    "1": "Planeación financiera",
    "2": "0.50",
    "id_servicio": "4",
    "servicio": "Planeación financiera",
    "precio": "0.50"
  },
  {
    "0": "3",
    "1": "Planeación financiera",
    "2": "0.50",
    "id_servicio": "3",
    "servicio": "Planeación financiera",
    "precio": "0.50"
  },
  {
    "0": "1",
    "1": "Programacion",
    "2": "30.00",
    "id_servicio": "1",
    "servicio": "Programacion",
    "precio": "30.00"
  },
  {
    "0": "27",
    "1": "Puro poder burgguer",
    "2": "0.00",
    "id_servicio": "27",
    "servicio": "Puro poder burgguer",
    "precio": "0.00"
  },
  {
    "0": "5",
    "1": "Soperutano",
    "2": "100.00",
    "id_servicio": "5",
    "servicio": "Soperutano",
    "precio": "100.00"
  },
  {
    "0": "25",
    "1": "x",
    "2": "19.89",
    "id_servicio": "25",
    "servicio": "x",
    "precio": "19.89"
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
