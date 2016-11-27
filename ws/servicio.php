<?php
	/**Formulario que muestra la informacion de los clientes */
	include('../cp_web_class.php'); // Incluye la clase clientes
	$web=new Cpweb; //Crea un objeto de la clase clientes
	$servicio=$web->fetchAll('select * from servicio');

  //Se convirtio en formato json
  //traductor que lo convierte de php a json 
  $servicio=json_encode($servicio,JSON_PRETTY_PRINT);

  //Se convierte a archivo json
  header('Content-Type: application/json');
  echo $servicio;



 ?>
