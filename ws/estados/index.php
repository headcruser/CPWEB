<?php
  include("../../cp_web_class.php");
  /*estados Web*/
  class controlEstados extends Cpweb
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
                //echo "aqui voy a a consultar el estado
                $this-> APIviewOne($_GET['id']);
            }else {
                //echo "Aqui voy a Mostrar todos los estados";
                $this-> APIviewAll();
            }
        break;
        case 'PUT':
          $this-> APIupdate($_GET['id']);
          //echo "Aqui voy a acutualizar el estado".$_GET['id'];
        break;

        case'DELETE':
          //echo "Aqui voy a Eliminar el estado".$_GET['id'];
           $this->APIdelete($_GET['id']);
        break;
      }
    } // Fin del metodo

    /**Metodo para insertar un estado*/
    function APIinsert()
    {
      //protocolo de entrada de php
      $objeto=json_decode(file_get_contents('php://input'));
      foreach ($objeto as $estado)
      {
          $SQL="INSERT INTO estado (estado) values (:estado)";
          $stmt = $this->conn->Prepare($SQL);
          $stmt->bindParam(':estado', $estado->estado, PDO::PARAM_STR);          
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
		foreach ($obj as $estado)
		{
			$sql="update estado set estado=:estado where id_estado=:id_estado";
			$stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':estado', $estado->estado);
			$stmt->bindParam(':id_estado', $id, PDO::PARAM_INT);
			$stmt->execute();
		}
  		$message['status']='OK';
  		$message['message']="El registro se ha actualizado adecuadamente";
  		$message=json_encode($message);
  		http_response_code(200);
  		echo $message;
    }

    /**Metodo para eliminar un Estado**/
    function APIdelete($id)
    {
      $sql="delete from estado where id_estado= :id_estado";
      $stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':id_estado', $id, PDO::PARAM_INT);
      $stmt->execute();
      $message['status']='OK';
      $message['message']="El registro se elimino adecuadamente";
      $message=json_encode($message);
      http_response_code(200);
      echo $message;
    }

    /**Debe ser capaz de traer los estados y opcional */
    function APIviewAll()
    {
      $sql_estado="select * from estado ";
      $estados=$this->fetchAll($sql_estado);
      $estados=json_encode($estados);
      echo $estados;

    }

    /**Obtiene Un estado del id que se indique
    type           param            Description
    *int           $id             Recibe el id del estado*/
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
