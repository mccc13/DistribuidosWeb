<?php

include '../datos/Contacto.php';
include_once '../conexion/config.php';

class DaoContacto {

    function __construct() {
        
    }

    /**
     * Insertar nuevo contacto
     * 
     * @param $nombre 
     * @param $apellido 
     * @param $sexo 
     * @param $parentesco 
     * @param $telefono 
     * @param $email 
     * @param $fechacre 
     * @param $fechaMod 
     * 
     */
    public static function registrar($nombre, $apellido, $sexo, $parentesco, $telefono, $email, $fechacre, $fechaMod) {
        try {
            global $con;
            $query = "INSERT INTO contacto(nombre, apellido, sexo, parentesco, telefono, email, fechacre, fechaMod)
            VALUES('$nombre', '$apellido', '$sexo', '$parentesco', '$telefono', '$email', '$fechacre', '$fechaMod' )";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Modificar contacto
     * 
     * @param $contactoID
     * @param $nombre 
     * @param $apellido 
     * @param $sexo 
     * @param $parentesco 
     * @param $telefono 
     * @param $email 
     * @param $fechacre 
     * @param $fechaMod 
     * 
     */
    public static function update($contactoID, $nombre, $apellido, $sexo, $parentesco, $telefono, $email, $fechacre, $fechaMod) {
        // Creando consulta UPDATE
        $consulta = "UPDATE contacto SET , nombre='$nombre', apellido='$apellido', sexo='$sexo', parentesco='$parentesco', telefono='$telefono', 
       email='$email', fechacre='$fechacre', fechaMod='$fechaMod' WHERE contactoid='$contactoID'";
        try {

            global $con;
            $re = $con->Execute($consulta);
            echo $re;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    /**
     * Eliminar el registro con el identificador especificado
     *
     * @param $contactoID identificador 
     * @return bool Respuesta de la eliminación
     */
    public static function eliminar($contactoID) {
        // Sentencia DELETE
        $comando = "DELETE *FROM contacto WHERE contactoid='$contactoID'";
        try {
            global $con;
            $re = $con->Execute($comando);
            return $re;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    /**
     * Retorna la lista de todos los contactos 
     *
     * @param $contactoid Identificador del registro
     * @return lista Datos del registro
     */
    public static function listarContacto() {
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute("select *from contacto");
            foreach ($re as $row) {
                $contactoID = $row["contactoid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $parentesco = $row["parentesco"];
                $telefono = $row["telefono"];
                $email = $row["email"];
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechaMod"];
                $contacto = new Contacto($contactoID , $nombre, $apellido, $sexo, $parentesco, $telefono, $email, $fecha_ini, $fecha_fin);
                $lista[$cont++] = $contacto;
            }
            return $lista;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Obtiene los campos de un contacto con un identificador
     * determinado
     *
     * @param $contactoID Identificador del usuario
     * @return lista
     */
    public static function getById($contactoID) {
        $query = "SELECT *FROM contacto where contactoid='$contactoID'";
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $contactoID = $row["contactoid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $parentesco = $row["parentesco"];
                $telefono = $row["telefono"];
                $email = $row["email"];
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechaMod"];
                $contacto = new Contacto($contactoID , $nombre, $apellido, $sexo, $parentesco, $telefono, $email, $fecha_ini, $fecha_fin);
                $lista[$cont++] = $contacto;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
