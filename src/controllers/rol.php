<?php
namespace  CpWebDotMe\controllers;
/***
controllers/rol
Gestiona los rols de Cpweb
Clase: rol
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../../cp_web_class.php'); //Incluye a la clase Cpweb

class rol extends Cpweb
{

	/********************************************************************
						METODO PARA OBTENER UN ESTADO
			parametro 					tipo 	 		Descripcion
	  		@param $idEstado  			 Int 		  Identificador del estado
	*************************************************************************/
	function getRol ($id_rol)
	{
		$rol=array(); //Arreglo vacio
		 if(is_numeric($id_rol))
		 {
		 	$statement=$this->conn->Prepare('select * from rol where id_rol='.$id_rol);
		 	$statement->Execute();
		 	$rol=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $rol;
	} // Fin del metodo


	/***********************************************************************************
					METODO PARA ELIMINAR UN ESTADO DE LA BASE DE DATOS
			parametro 					tipo 	 		Descripcion
	  		@param $idEstado  			Int           Identificador del estado
	**********************************************************************************/
	function deleteRol($id_rol)
	{
		$sql = "DELETE FROM rol WHERE id_rol = :id_rol";
		$stmt = $this->conn->Prepare($sql);
		$stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
		$this->verifyQuery($stmt);

	} //fin de la funcion
} // Fin de la clase
?>