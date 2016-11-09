
<?php
/***
controllers/tipo
Gestiona los Tipos de cliente de Cpweb
Clase: Tipo
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../cp_web_class.php'); //Incluye a la clase Cpweb

class Tipo extends Cpweb
{

	/***********************************************************************************
						METODO PARA OBTENER UN Tipo  
			parametro 					tipo 	 		Descripcion
	  		@param $idTipo  			 Int 		  Identificador del tipo cliente 
	**********************************************************************************/
	function getTipo ($idTipo)
	{
		$tipos=array(); //Arreglo vacio
		 if(is_numeric($idTipo))
		 {
		 	$statement=$this->conn->Prepare('select * from tipo where id_tipo='.$idTipo);
		 	$statement->Execute();
		 	$tipos=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $tipos;
	} // Fin del metodo 


	/***********************************************************************************
					METODO PARA ELIMINAR UN TIPO CLIENTE DE LA BASE DE DATOS
			parametro 					tipo 	 		Descripcion
	  		@param $idTipo  			Int           Identificador del TIPO  		  
	**********************************************************************************/
	function deleteTipo($idTipo)
	{
		$sql = "DELETE FROM tipo WHERE id_tipo = :ID_tipo";
		$stmt = $this->conn->Prepare($sql);
		$stmt->bindParam(':ID_tipo', $idTipo, PDO::PARAM_INT);
		$this->verifyQuery($stmt);

	} //fin de la funcion
} // Fin de la clase 
?>
