<?php


include('../cp_web_class.php'); //Incluye a la clase Cpweb

class Cotizacion extends Cpweb
{

	/***********************************************************************************
			parametro 					tipo 	 			Descripcion
	  		@param $p_idCliente  	     int 		  Identificador del cliente
	**********************************************************************************/
	function getCotizacion($p_id_cotizacion)
	{
		$cotizacion=array(); //Arreglo vacio
		 if(is_numeric($p_id_cotizacion))
		 {
		 	$statement=$this->conn->Prepare('select * from cotizacion where id_cotizacion='.$p_id_cotizacion);
		 	$statement->Execute();
		 	$cotizacion=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $cotizacion;
	} // Fin de la funcion


	/***********************************************************************************
				METODO PARA ELIMINAR UN CLIENTE DE LA BASE DE DATOS
			parametro 					tipo 	 		Descripcion
	  		@param $idcliente  			INT 		  Nombre de la tabla
	**********************************************************************************/
	function deleteCotizacion($p_id_cotizacion)
	{
		$sql = "DELETE FROM cotizacion WHERE id_cotizacion = :id_cotizacion";
		$stmt = $this->conn->Prepare($sql);
		$stmt->bindParam(':id_cotizacion', $p_id_cotizacion, PDO::PARAM_INT);
		$this->verifyQuery($stmt);
	} //fin de la funcion

}// Fin de la clase clientes
?>
