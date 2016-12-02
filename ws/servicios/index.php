<?php
  include("../../cp_web_class.php");
  /**29 de noviembre del 2016
   * Esta Clase se encarga de grestionar los servicios Disponibles
   *Le dimos super poderes a nuestra clase*/
  class ServicesControl extends Cpweb
  {
    function API()
    {
      $this->conexion();
      header('Content-Type: application/json');
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
          $this-> APIupdate();
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
      $objeto=json_decode(file_get_contents('php://input'));
      foreach ($obj as $servicio)
      {
        $SQL="UPDATE servicio SET servicio=:servicio,precio=:precio where id_servicio=:id_servicio";
        $stmt = $this->conn->Prepare($SQL);
        $stmt->bindParam(':id_servicio', $id, PDO::PARAM_INT);
        $stmt->bindParam(':servicio', $servicio->servicio, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $servicio->precio);
        $stmt->execute();
      }
      $message['STATUS']='OK';
      $message['MESSAGE']='EL REGISTRO SE INSERTO CORRECTAMENTE';
      $message=json_encode($message);
      http_response_code(200);
    }

    /**Metodo para eliminar un servicio**/
    function APIdelete($id)
    {
        $SQL="DELETE FROM servicio where id_servicio=:id_servicio";
    		$stmt = $this->conn->Prepare($SQL);
    		$stmt->bindParam(':id_servicio', $id_servicio, PDO::PARAM_INT);
        $stmt->Execute();
        $message['STATUS']='OK';
        $message['MESSAGE']='EL REGISTRO SE ELIMINO CORRECTAMENTE';
        $message=json_encode($message);
        http_response_code(200);
    }

    /**Debe ser capaz de traer los servicios y opcional */
    function APIviewAll()
    {
      //Obtengo mis servicios
      $servicios=$this->fetchAll('select * from servicio order by servicio');

      //decodifica los servicios de burton
      $servicios=json_encode($servicios,JSON_PRETTY_PRINT);
      echo $servicios;
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
      print_r($servicios);
    }

  } // Fin de clase

  $web=new ServicesControl;
  $web->API();

 ?>
