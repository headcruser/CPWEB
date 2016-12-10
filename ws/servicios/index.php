<?php
  include("../../cp_web_class.php");

  class ServicesControl extends Cpweb
  {
    function API()
    {
      $this->conexion();
      // header('Content-Type: application/json');
      $metodo=$_SERVER['REQUEST_METHOD'];
      switch ($metodo)
      {
        case 'POST':
          $this-> APIinsert();
        break;

        case 'GET':
        default:
            if(isset($_GET['id']))
            {
                //echo "aqui voy a a consultar el servicio
                $this-> APIviewOne($_GET['id']);
            }else {
                //echo "Aqui voy a Mostrar todos los servicios";
                $this-> APIviewAll();
            }
        break;
        case 'PUT':
          $this-> APIupdate($_GET['id']);
          //echo "Aqui voy a acutualizar el servicio".$_GET['id'];
        break;

        case'DELETE':
          //echo "Aqui voy a Eliminar el servicio".$_GET['id'];
           $this->APIdelete($_GET['id']);
        break;
      }
    } // Fin del metodo

    /**Metodo para insertar un servicio*/
    function APIinsert()
    {
      //protocolo de entrada de php
      $objeto=json_decode(file_get_contents('php://input'));
      foreach ($objeto as $servicio)
      {
          $SQL="INSERT INTO servicio (servicio,precio) values (:servicio,:precio)";
          $stmt = $this->conn->Prepare($SQL);
          $stmt->bindParam(':servicio', $servicio->servicio, PDO::PARAM_STR);
          $stmt->bindParam(':precio', $servicio->precio);
          $stmt->Execute();
      }

      http_response_code(200);
      $message['STATUS']='OK';
      $message['MESSAGE']='EL REGISTRO SE INSERTO CORRECTAMENTE';
      $message=json_encode($message);
      echo $message;


    } // FIN DEL METODO


    function APIupdate($id)
    {
      //protocolo de entrada de php
      $obj=json_decode(file_get_contents('php://input'));
		foreach ($obj as $servicio)
		{
			$sql="update servicio set servicio=:servicio, precio=:precio where id_servicio=:id_servicio";
			$stmt= $this->conn->prepare($sql);
			$stmt->bindParam(':id_servicio', $id, PDO::PARAM_INT);
			$stmt->bindParam(':servicio', $servicio->servicio, PDO::PARAM_STR);
			$stmt->bindParam(':precio', $servicio->precio);
			$stmt->execute();
		}
		$message['status']='OK';
		$message['message']="El registro se ha actualizado adecuadamente";
		$message=json_encode($message);
		http_response_code(200);
		echo $message;
    }

    /**Metodo para eliminar un servicio**/
    function APIdelete($id)
    {
      $sql="delete from servicio where id_servicio = :id_servicio";
      $stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':id_servicio', $id, PDO::PARAM_INT);
      $stmt->execute();
      $message['status']='OK';
      $message['message']="El registro se elimino adecuadamente";
      $message=json_encode($message);
      http_response_code(200);
      echo $message;
    }

    /**Debe ser capaz de traer los servicios y opcional */
    function APIviewAll()
    {
      //Obtengo mis servicios
      $servicios=$this->fetchAll('select * from servicio ');
      echo "<pre>";
      print_r($servicios);

      //decodifica los servicios de burton
      $servicios=json_encode($servicios);
      //echo $servicios;
    }

    /**Obtiene Un servicio del id que se indique
    type           param            Description
    *int           $id             Recibe el id del servicio*/
    function APIviewOne($id)
    {

      $SQL="select * from servicio where id_servicio=$id";

      //Obtengo mis servicios
      $servicios=$this->fetchAll($SQL);
      //decodifica los servicios de burton
      $servicios=json_encode($servicios,JSON_PRETTY_PRINT);
      echo($servicios);
    }

  } // Fin de clase

  $web=new ServicesControl;
  $web->API();

 ?>
