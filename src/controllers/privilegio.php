<?php
namespace  CpWebDotMe\controllers;

/***
controllers/privilegios
Gestiona los privilegioss de Cpweb
Clase: privilegios
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../../cp_web_class.php'); //Incluye a la clase Cpweb

class privilegios extends Cpweb
{

    /***********************************************************************************
                        METODO PARA OBTENER UN ESTADO
            parametro                   tipo            Descripcion
            @param $idEstado             Int          Identificador del estado
    **********************************************************************************/
    function getPrivilegio($id_privilegio)
    {
        $Privilegio=array(); //Arreglo vacio
        if (is_numeric($id_privilegio)) {
            $statement=$this->conn->Prepare('select * from privilegio where id_privilegio='.$id_privilegio);
            $statement->Execute();
            $Privilegio=$statement->FetchAll(PDO::FETCH_ASSOC);
        }
            return $Privilegio;
    } // Fin del metodo


    /***********************************************************************************
                    METODO PARA ELIMINAR UN ESTADO DE LA BASE DE DATOS
            parametro                   tipo            Descripcion
            @param $idEstado            Int           Identificador del estado
    **********************************************************************************/
    function deletePrivilegio($id_privilegio)
    {
        $sql = "DELETE FROM privilegio WHERE id_privilegio = :id_privilegio";
        $stmt = $this->conn->Prepare($sql);
        $stmt->bindParam(':id_privilegio', $id_privilegio, PDO::PARAM_INT);
        $this->verifyQuery($stmt);
    } //fin de la funcion
} // Fin de la clase
