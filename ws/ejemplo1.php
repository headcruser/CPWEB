
<?php

  $cadenajson='{
  "responsable":
      {
      "Nombre" : "Juan",
      "Edad": 28,
      "Aficiones": ["Música", "Cine", "Tenis"],
      "Residencia": "Madrid"
      },
  "empleados":
      [
          {
          "Nombre" : "Elena",
          "Edad": 26,
          "Aficiones": ["Música", "Cine"],
          "Residencia": "Madrid"
          },
          {
          "Nombre" : "Luis",
          "Edad": 31,
          "Aficiones": ["Teatro", "Cine", "Fútbol"],
          "Residencia": "Madrid"
          }
      ]
  }';

  $trabajadores=json_decode($cadenajson);
  echo "<pre>";
  //print_r($trabajadores);

  $numeroTotal=0;
  $edadPromedio=0;
  $empleadoAficion=array();

  foreach ($trabajadores as $etiqueta=> $trabajador)
  {
    //print_r($empleado);
    //echo "<br>".$elemento ;
    switch ($etiqueta)
    {
      case 'responsable':
        $numeroTotal++;
        $edadPromedio=$trabajador->Edad;
        //print_r($trabajador->Aficiones);

        if( in_array("Música",$trabajador->Aficiones) )
        {
            array_push($empleadoAficion,$trabajador->Nombre);
        }


        break;

        case 'empleados':
        foreach ($trabajador as $empleado)
        {
          $numeroTotal++;
          $edadPromedio=$empleado->Edad;
          if( in_array("Fútbol",$trabajador->Aficiones) )
          {
              array_push($empleadoAficion,$trabajador->Nombre);
          }
        }
         break;
    }
echo "trabajadores";
$edadPromedio/=$numeroTotal;
echo "<br/> Edad Promedio $edadPromedio";
print_r($empleadoAficion);

  } // Fin foreach





 ?>
