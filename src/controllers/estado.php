<?php
namespace  CpWebDotMe\controllers;

/***
controllers/Estado
Gestiona los estados de Cpweb
Clase: Estado
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../../cp_web_class.php'); //Incluye a la clase Cpweb

class Estado extends Cpweb
{

    /***********************************************************************************
                        METODO PARA OBTENER UN ESTADO
            parametro                   tipo            Descripcion
            @param $idEstado             Int          Identificador del estado
    **********************************************************************************/
    function getEstado($idEstado)
    {
        $estados=array(); //Arreglo vacio
        if (is_numeric($idEstado)) {
            $statement=$this->conn->Prepare('select * from estado where id_estado='.$idEstado);
            $statement->Execute();
            $estados=$statement->FetchAll(PDO::FETCH_ASSOC);
        }
            return $estados;
    } // Fin del metodo


    /***********************************************************************************
                    METODO PARA ELIMINAR UN ESTADO DE LA BASE DE DATOS
            parametro                   tipo            Descripcion
            @param $idEstado            Int           Identificador del estado
    **********************************************************************************/
    function deleteEstado($idEstado)
    {
        $sql = "DELETE FROM estado WHERE id_estado = :ID_estado";
        $stmt = $this->conn->Prepare($sql);
        $stmt->bindParam(':ID_estado', $idEstado, PDO::PARAM_INT);
        $this->verifyQuery($stmt);
    } //fin de la funcion
} // Fin de la clase
