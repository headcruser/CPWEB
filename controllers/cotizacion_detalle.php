<?php


include('../cp_web_class.php'); //Incluye a la clase Cpweb

class cotizacion_detalle extends Cpweb
{

	function getCotizacion_detalle ($id_cotizacion,$id_servicio)
	{
		$cotizacion_detalle=array(); //Arreglo vacio
		 if(is_numeric($id_cotizacion) && is_numeric($id_servicio))
		 {
		 	$statement=$this->conn->Prepare('select * from cotizacion_detalle where id_cotizacion='.$id_cotizacion.' AND '.' id_servicio='.$id_servicio );
		 	$statement->Execute();
		 	$cotizacion_detalle=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $cotizacion_detalle;
	} // Fin del metodo

	function deleteCotizacion_detalle($id_cotizacion,$id_servicio)
	{
		$sql = "DELETE FROM cotizacion_detalle WHERE id_cotizacion = :id_cotizacion AND id_servicio = :id_servicio";
		$stmt = $this->conn->Prepare($sql);

		$stmt->bindParam(':id_cotizacion', $id_cotizacion, PDO::PARAM_INT);
		$stmt->bindParam(':id_servicio', $id_servicio, PDO::PARAM_INT);
		$this->verifyQuery($stmt);
	} //fin de la funcion
} // Fin de la clase
?>
