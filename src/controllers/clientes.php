<?php
/***
controllers/Cliente
Gestiona los clientes de Cpweb
Clase: Clientes
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../cp_web_class.php'); //Incluye a la clase Cpweb

class Clientes extends Cpweb
{

	/***********************************************************************************
						METODO PARA OBTENER UN SOLO CLIENTE  
			parametro 					tipo 	 			Descripcion
	  		@param $p_idCliente  	     int 		  Identificador del cliente
	**********************************************************************************/	
	function getCliente($p_idCliente)
	{
		$clientes=array(); //Arreglo vacio
		 if(is_numeric($p_idCliente))
		 {
		 	$statement=$this->conn->Prepare('select * from cliente where id_cliente='.$p_idCliente);
		 	$statement->Execute();
		 	$clientes=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $clientes;
	} // Fin de la funcion    


	/***********************************************************************************
				METODO PARA ELIMINAR UN CLIENTE DE LA BASE DE DATOS 
			parametro 					tipo 	 		Descripcion
	  		@param $idcliente  			INT 		  Nombre de la tabla
	**********************************************************************************/
	function deleteCliente($idcliente)
	{
		$sql = "DELETE FROM cliente WHERE id_cliente = :ID_cliente";
		$stmt = $this->conn->Prepare($sql);
		$stmt->bindParam(':ID_cliente', $idcliente, PDO::PARAM_INT);

		$this->verifyQuery($stmt);
	} //fin de la funcion

}// Fin de la clase clientes
?>
