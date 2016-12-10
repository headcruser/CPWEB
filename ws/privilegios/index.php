<?php
  include("../../cp_web_class.php");
  /*privilegios Web*/
  class contprivilegioPrivilegios extends Cpweb
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
                //echo "aqui voy a a consultar el privilegio
                $this-> APIviewOne($_GET['id']);
            }else {
                //echo "Aqui voy a Mostrar todos los privilegios";
                $this-> APIviewAll();
            }
        break;
        case 'PUT':
          $this-> APIupdate($_GET['id']);
          //echo "Aqui voy a acutualizar el privilegio".$_GET['id'];
        break;

        case'DELETE':
          //echo "Aqui voy a Eliminar el privilegio".$_GET['id'];
           $this->APIdelete($_GET['id']);
        break;
      }
    } // Fin del metodo

    /**Metodo para insertar un privilegio*/
    function APIinsert()
    {
      //protocolo de entrada de php
      $objeto=json_decode(file_get_contents('php://input'));
      foreach ($objeto as $privilegio)
      {
          $SQL="INSERT INTO privilegio (privilegio) values (:privilegio)";
          $stmt = $this->conn->Prepare($SQL);
          $stmt->bindParam(':privilegio', $privilegio->privilegio, PDO::PARAM_STR);
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
		foreach ($obj as $privilegio)
		{
			$sql="update privilegio set privilegio=:privilegio where id_privilegio=:id_privilegio";
			$stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':privilegio', $privilegio->privilegio);
			$stmt->bindParam(':id_privilegio', $id, PDO::PARAM_INT);
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
      $sql="delete from privilegio where id_privilegio= :id_privilegio";
      $stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':id_privilegio', $id, PDO::PARAM_INT);
      $stmt->execute();
      $message['status']='OK';
      $message['message']="El registro se elimino adecuadamente";
      $message=json_encode($message);
      http_response_code(200);
      echo $message;
    }

    /**Debe ser capaz de traer los privilegios y opcional */
    function APIviewAll()
    {
      $sql_privilegio="select * from privilegio ";
      $privilegios=$this->fetchAll($sql_privilegio);
      $privilegios=json_encode($privilegios);
      echo $privilegios;

    }

    /**Obtiene Un privilegio del id que se indique
    type           param            Description
    *int           $id             Recibe el id del privilegio*/
    function APIviewOne($id)
    {
      $sql="select * from privilegio where id_privilegio=".$id;
		  $privilegio=$this->fetchAll($sql);
      $privilegio=json_encode($privilegio,JSON_PRETTY_PRINT);
      echo($privilegio);
    }

  } // Fin de clase

  $web=new contprivilegioPrivilegios;
  $web->API();

 ?>
