<?php
  include("../../cp_web_class.php");
  /**29 de noviembre del 2016
   * Esta Clase se encarga de grestionar los servicios Disponibles
   *Le dimos super poderes a nuestra clase*/
  class controlEstados extends Cpweb
  {
    function API()
    {
      $this->conexion();
      //header('Content-Type: application/json');
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
      $sql_estado="select * from estado order by estado";
      $estados=$this->fetchAll($sql_estado);
      $estados=json_encode($estados);
      echo $estados;
    }

    /**Obtiene Un servicio del id que se indique
    type           param            Description
    *int           $id             Recibe el id del servicio*/
    function APIviewOne($id)
    {
      $sql="select * from estado where id_estado=".$id;
		  $estado=$this->fetchAll($sql);
      $estado=json_encode($estado,JSON_PRETTY_PRINT);
      echo($estado);
    }

  } // Fin de clase

  $web=new controlEstados;
  $web->API();

 ?>
