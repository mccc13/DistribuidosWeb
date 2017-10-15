<?php

include '../datos/Imagen.php';
include_once '../conexion/config.php';

class DaoImagen {

    function __construct() {
        
    }

    /**
     * Insertar nueva imagen
     * 
     * @param $nombre 
     * @param $fechaIngreso 
     * @param $dirArchivo
     * @param $extencionImg
     * @param $estado
     * 
     */
    public static function registrar($nombre, $fechaIngreso, $dirArchivo, $extencionImg, $estado) {
        try {
            global $con;
            $query = "INSERT INTO imagen(nombre, fechaingreso, dirarchivo, extencionimg, estado)
    VALUES('$nombre', '$fechaIngreso', '$dirArchivo', '$extencionImg', '$estado' )";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Modificar imagen
     * 
     * @param $imagenID
     * @param $nombre 
     * @param $fechaIngreso 
     * @param $dirArchivo
     * @param $extencionImg
     * @param $estado
     * 
     */
    public static function update($imagenID, $nombre, $fechaIngreso, $dirArchivo, $extencionImg, $estado) {
        // Creando consulta UPDATE
        $consulta = "UPDATE imagen SET nombre='$nombre', fechaingreso='$fechaIngreso', dirarchivo='$dirArchivo', extencionimg='$extencionImg', 
       estado='$estado' WHERE WHERE imagenid='$imagenID'";
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
     * @param $imagenID identificador 
     * @return bool Respuesta de la eliminación
     */
    public static function eliminar($imagenID) {
        // Sentencia DELETE
        $comando = "DELETE *FROM imagen WHERE imagenid='$imagenID'";
        try {
            global $con;
            $re = $con->Execute($comando);
            return $re;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    /**
     * Retorna la lista de todos las imagenes 
     *
     * @param $imagenID Identificador del registro
     * @return lista Datos del registro
     */
    public static function listarContacto() {
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute("select *from imagen");
            foreach ($re as $row) {
                $imagenID = $row["imagenid"];
                $nombre = $row["nombre"];
                $fechaIngreso = $row["fechaingreso"];
                $dirArchivo = $row["dirarchivo"];
                $extencionImg = $row["extencionimg"];
                $estado = $row["estado"];

                $imagen = new Imagen($imagenID, $nombre, $fechaIngreso, $dirArchivo, $extencionImg, $estado);
                $lista[$cont++] = $imagen;
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
     * @param $imagenID Identificador del usuario
     * @return lista
     */
    public static function getById($imagenID) {
        $query = "SELECT *FROM imagen where imagenid='$imagenID'";
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $imagenID = $row["imagenid"];
                $nombre = $row["nombre"];
                $fechaIngreso = $row["fechaingreso"];
                $dirArchivo = $row["dirarchivo"];
                $extencionImg = $row["extencionimg"];
                $estado = $row["estado"];

                $imagen = new Imagen($imagenID, $nombre, $fechaIngreso, $dirArchivo, $extencionImg, $estado);
                $lista[$cont++] = $imagen;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
