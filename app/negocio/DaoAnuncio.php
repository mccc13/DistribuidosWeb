<?php

include '../datos/Anuncio.php';
include_once '../conexion/config.php';

class DaoAnuncio {

    function __construct() {
        
    }

    /**
     * Insertar nuevo anuncio
     * 
     * @param $desaparecidoID ientificador de desaparecido
     * @param $contactoID Identificador de contacto
     * @param $usuarioID Identificador de usuario
     * @param $estado estado de anuncio
     * @param $fechacre Fecha inicial de la publicacion
     * @param $fechaMod Fecha final de la publicacion
     * @param $imagenID Identificador de imagen
     * @param $observacion Observacion de la imagen
     * 
     */
    public static function registrar($desaparecidoID, $contactoID, $usuarioID, $estado, $fechacre, $fechaMod, $imagenID, $observacion) {
        try {
            global $con;
            $query = "INSERT INTO anuncio( desaparecidoid, contactoid, usuarioid, estado, fechacre, fechaMod, imagenid, observacion)
    VALUES('$desaparecidoID', '$contactoID', '$usuarioID', '$estado', '$fechacre', '$fechaMod', '$imagenID', '$observacion' )";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Modificar anuncio
     * 
     * @param $anuncioID identificador de anuncio
     * @param $desaparecidoID ientificador de desaparecido
     * @param $contactoID Identificador de contacto
     * @param $usuarioID Identificador de usuario
     * @param $estado estado de anuncio
     * @param $fechacre Fecha inicial de la publicacion
     * @param $fechaMod Fecha final de la publicacion
     * @param $imagenID Identificador de imagen
     * @param $observacion Observacion de la imagen
     * 
     */
    public static function update($anuncioID, $desaparecidoID, $contactoID, $usuarioID, $estado, $fechacre, $fechaMod, $imagenID, $observacion) {
        // Creando consulta UPDATE
        $consulta = "UPDATE anuncio SET desaparecidoid='$desaparecidoID', contactoid='$contactoID', usuarioid='$usuarioID', estado='$estado', 
       fechacre='$fechacre', fechaMod='$fechaMod', imagenid='$imagenID', observacion='$observacion' WHERE anuncioid='$anuncioID'";

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
     * @param $anuncioID identificador 
     * @return bool Respuesta de la eliminación
     */
    public static function eliminar($anuncioID) {
        // Sentencia DELETE
        $comando = "DELETE *FROM anuncio WHERE anuncioid='$anuncioID'";
        try {
            global $con;
            $re = $con->Execute($comando);
            return $re;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    /**
     * Retorna la lista de anuncios 
     *
     * @param $anuncioid Identificador del registro
     * @return lista Datos del registro
     */
    public static function listarAnuncio() {
        $cont = 0;

        try {
            global $con;
            $re = $con->Execute("select *from anuncio");
            foreach ($re as $row) {
                $anuncioID = $row["anuncioid"];
                $desaparecidoID = $row["desaparecidoid"];
                $contactoID = $row["contactoid"];
                $usuarioID = $row["usuarioid"];
                $estado = $row["estado"];
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechaMod"];
                $imagenID = $row["imagenid"];
                $observacion = $row["observacion"];
                $anuncio = new Anuncio($anuncioID, $desaparecidoID, $contactoID, $usuarioID, $estado, $fecha_ini, $fecha_fin, $imagenID, $observacion);
                $lista[$cont++] = $anuncio;
            }
            return $lista;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Obtiene los campos de un usuario con un identificador
     * determinado
     *
     * @param $anuncioID Identificador del usuario
     * @return lista
     */
    public static function getById($anuncioID) {
        $query = "SELECT *FROM anuncio where anuncioid='$anuncioID'";
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $anuncioID = $row["anuncioid"];
                $desaparecidoID = $row["desaparecidoid"];
                $contactoID = $row["contactoid"];
                $usuarioID = $row["usuarioid"];
                $estado = $row["estado"];
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechaMod"];
                $imagenID = $row["imagenid"];
                $observacion = $row["observacion"];
                $anuncio = new Anuncio($anuncioID, $desaparecidoID, $contactoID, $usuarioID, $estado, $fecha_ini, $fecha_fin, $imagenID, $observacion);
                $lista[$cont++] = $anuncio;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
