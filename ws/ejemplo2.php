
<?php

  include('../cp_web_class.php'); // Incluye la clase clientes
  $web=new Cpweb; //Crea un objeto de la clase clientes

  $cadenajson='
  [
    {
        "id_servicio": 7,
        "servicio": "Contador Diabólico",
        "precio": "1500.00"
    },
    {
        "id_servicio": 8,
        "servicio": "serviceXFCE",
        "precio": "50.00"
    }
  ]';

  $servicios=json_decode($cadenajson);
  echo "<pre>";
  print_r($servicios);

  foreach ($servicios as $element)
  {
    $precio=$element->precio;
    $sql="INSERT INTO servicio values($element->id_servicio,'$element->servicio',$element->precio )";;
    $web->conn->exec($sql);
  }

  echo "FINALIZADO ";


 ?>
