<?php
namespace  CpWebDotMe\controllers;

include('../cp_web_class.php'); //Incluye a la clase Cpweb

class Servicio extends Cpweb
{

	/***********************************************************************************
						METODO PARA OBTENER UN SOLO CLIENTE
			parametro 					tipo 	 			Descripcion
	  		@param $p_idCliente  	     int 		  Identificador del cliente
	**********************************************************************************/
	function getServicio($id_servicio)
	{
		$servicio=array(); //Arreglo vacio
		 if(is_numeric($id_servicio))
		 {
		 	$statement=$this->conn->Prepare('select * from servicio where id_servicio='.$id_servicio);
		 	$statement->Execute();
		 	$servicio=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $servicio;
	} // Fin de la funcion


	/***********************************************************************************
				METODO PARA ELIMINAR UN CLIENTE DE LA BASE DE DATOS
			parametro 					tipo 	 		Descripcion
	  		@param $idcliente  			INT 		  Nombre de la tabla
	**********************************************************************************/
	function deleteServicio($id_servicio)
	{
		$sql = "DELETE FROM servicio WHERE id_servicio = :id_servicio";
		$stmt = $this->conn->Prepare($sql);
		$stmt->bindParam(':id_servicio', $id_servicio, PDO::PARAM_INT);

		$this->verifyQuery($stmt);
	} //fin de la funcion

}// Fin de la clase clientes
?>
