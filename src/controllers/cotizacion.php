<?php
namespace  CpWebDotMe\controllers;

/***
controllers/cotizacion
Gestiona las cotizaciones de Cpweb
Clase: cotizacion
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../../cp_web_class.php'); //Incluye a la clase Cpweb

class Cotizacion extends Cpweb
{

    /***********************************************************************************
                                                METODO PARA OBTENER UNA COTIZACION
                parametro                                   tipo                Descripcion
            @param $id_cotizacion        int          Identificador de la cotizacion
    **********************************************************************************/
    function getCotizacion($id_cotizacion)
    {
        $cotizacion=array(); //Arreglo vacio
        if (is_numeric($id_cotizacion)) {
            $statement=$this->conn->Prepare('select * from cotizacion where id_cotizacion='.$id_cotizacion);
            $statement->Execute();
            $cotizacion=$statement->FetchAll(PDO::FETCH_ASSOC);
        }
            return $cotizacion;
    } // Fin de la funcion


    /***********************************************************************************
                METODO PARA ELIMINAR UN CLIENTE DE LA BASE DE DATOS
                            parametro                   tipo            Descripcion
            @param $id_cotizacion           INT           Identificador de la cotizacion
    **********************************************************************************/
    function deleteCotizacion($id_cotizacion)
    {
        $sql = "DELETE FROM cotizacion WHERE id_cotizacion = :id_cotizacion";
        $stmt = $this->conn->Prepare($sql);
        $stmt->bindParam(':id_cotizacion', $id_cotizacion, PDO::PARAM_INT);
        $this->verifyQuery($stmt);
    } //fin de la funcion
}// Fin de la clase clientes
