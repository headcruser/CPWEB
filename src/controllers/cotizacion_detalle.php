<?php
namespace  CpWebDotMe\controllers;

/***
controllers/cotizacion_detalle
Gestiona los cotizacion_detalle de Cpweb
Clase: cotizacion_detalle
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/
include('../../cp_web_class.php'); //Incluye a la clase Cpweb

class cotizacion_detalle extends Cpweb
{

    /***********************************************************************************
                        METODO PARA OBTENER UN DETALLE COTIZACION_DETALLE
                        parametro                       tipo                Descripcion
                @param $id_cotizacion        int           Identificador de la cotizacion
                @param $id_servicio              int           Identificador del servicio
    **********************************************************************************/
    function getCotizacion_detalle($id_cotizacion, $id_servicio)
    {
        $cotizacion_detalle=array(); //Arreglo vacio
        if (is_numeric($id_cotizacion) && is_numeric($id_servicio)) {
            $statement=$this->conn->Prepare('select * from cotizacion_detalle where id_cotizacion='.$id_cotizacion.' AND '.' id_servicio='.$id_servicio);
            $statement->Execute();
            $cotizacion_detalle=$statement->FetchAll(PDO::FETCH_ASSOC);
        }
            return $cotizacion_detalle;
    } // Fin del metodo


    /***********************************************************************************
                        METODO PARA ELIMINAR UN DETALLE COTIZACION_DETALLE
                        parametro                       tipo                Descripcion
                @param $id_cotizacion        int           Identificador de la cotizacion
                @param $id_servicio              int           Identificador del servicio
    **********************************************************************************/
    function deleteCotizacion_detalle($id_cotizacion, $id_servicio)
    {
        $sql = "DELETE FROM cotizacion_detalle WHERE id_cotizacion = :id_cotizacion AND id_servicio = :id_servicio";
        $stmt = $this->conn->Prepare($sql);

        $stmt->bindParam(':id_cotizacion', $id_cotizacion, PDO::PARAM_INT);
        $stmt->bindParam(':id_servicio', $id_servicio, PDO::PARAM_INT);
        $this->verifyQuery($stmt);
    } //fin de la funcion
} // Fin de la clase
