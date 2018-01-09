<?php
namespace  CpWebDotMe\controllers;

/***
controllers/usuario_rol
Gestiona los usuario_rols de Cpweb
Clase: usuario_rol
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../cp_web_class.php'); //Incluye a la clase Cpweb

class usuario_rol extends Cpweb
{

    /***********************************************************************************
                        METODO PARA OBTENER UN USUARIO_ROL
            parametro                   tipo            Descripcion
            @param id_usuarioRol             Int          Identificador del usuario
                @param id_rol                            Int          Identificador del rol
    **********************************************************************************/
    function getUsuario_rol($id_usuarioRol, $id_rol)
    {
        $usuario_rol=array(); //Arreglo vacio
        if (is_numeric($id_usuarioRol) && is_numeric($id_rol)) {
            $statement=$this->conn->Prepare('select * from usuario_rol where id_usuario='.$id_usuarioRol.' AND '.' id_rol='.$id_rol);
            $statement->Execute();
            $usuario_rol=$statement->FetchAll(PDO::FETCH_ASSOC);
        }
            return $usuario_rol;
    } // Fin del metodo



    /***********************************************************************************
                        METODO PARA ELIMINAR UN DETALLE DE ROL-PRIVILEGIO
            parametro                                tipo               Descripcion
            @param $id_usuario          Array         Recibe el id anterior
            @param $id_rol                  Array         recibe el id anterior
    **********************************************************************************/
    function deleteUsuario_rol($id_usuario, $id_rol)
    {
        $sql = "DELETE FROM usuario_rol WHERE id_usuario = :id_usuario AND id_rol = :id_rol";
        $stmt = $this->conn->Prepare($sql);

        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
        $this->verifyQuery($stmt);
    } //fin de la funcion

    /***********************************************************************************
                        METODO PARA ACTUALIZAR EL DETALLE USUARIO_ROL
            parametro                                tipo               Descripcion
        @param $Actualizacion       Array         Lista con los nuevos elementos
            @param $id_usuario          Array         Recibe el id anterior
            @param $id_rol                  Array         recibe el id anterior
    **********************************************************************************/
    function updateUsuario_rol($Actualizacion, $id_usuario, $id_rol)
    {
        if (is_numeric($id_usuario) && is_numeric($id_rol)&&isset($Actualizacion)) {
            $updateIDUser=$Actualizacion['id_usuario'];
            $updateIDrol=$Actualizacion['id_rol'];

               $sql = "UPDATE usuario_rol SET id_usuario=$updateIDUser,id_rol =$updateIDrol
											WHERE id_usuario=$id_usuario and id_rol=$id_rol";

            $statement=$this->conn->Prepare($sql);
            $statement->Execute();
        }
    } //fin de la funcion
} // Fin de la clase
