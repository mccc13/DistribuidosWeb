<?php

include '../datos/Desaparecido.php';
include_once '../conexion/config.php';

class DaoDesaparecido {

    function __construct() {
        
    }

    /**
     * Insertar 
     * 
     * @param $nombre 
     * @param $apellido 
     * @param $edad
     * @param $sexo
     * @param $estatura
     * @param $colorpelo
     * @param $colorpiel
     * @param $vestimenta
     * @param $constiucion
     * @param $otros
     * @param $fechacre
     * @param $fechaMod
     * 
     */
    public static function registrar($nombre, $apellido, $edad, $sexo, $estatura, $colorpelo, $colorpiel, $vestimenta, $constiucion, $otros, $fechacre, $fechaMod) {
        try {
            global $con;
            $query = "INSERT INTO desaparecido(nombre, apellido, edad, sexo, estatura, colorpelo, colorpiel, vestimenta, constitucion, otros, fechacre, fechaMod)
    VALUES('$nombre', '$apellido', '$edad', '$sexo', '$estatura', '$colorpelo', '$colorpiel', '$vestimenta', '$constiucion', '$otros', '$fechacre', '$fechaMod' )";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Modificar desaparecid
     * 
     * @param $desaparecidoID
     * @param $nombre 
     * @param $apellido 
     * @param $edad
     * @param $sexo
     * @param $estatura
     * @param $colorpelo
     * @param $colorpiel
     * @param $vestimenta
     * @param $constiucion
     * @param $otros
     * @param $fechacre
     * @param $fechaMod
     * 
     */
    public static function update($desaparecidoID, $nombre, $apellido, $edad, $sexo, $estatura, $colorpelo, $colorpiel, $vestimenta, $constiucion, $otros, $fechacre, $fechaMod) {
        // Creando consulta UPDATE
        $consulta = "UPDATE desaparecido SET nombre='$nombre', apellido='$apellido', edad='$edad', sexo='$sexo', estatura='$estatura', 
        colorpelo='$colorpelo', colorpiel='$colorpiel', vestimenta='$vestimenta', constitucion='$constiucion', otros='$otros', 
        fechacre='$fechacre', fechaMod='$fechaMod' WHERE WHERE desaparecidoid='$desaparecidoID'";
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
     * @param $desaparecidoID identificador 
     * @return bool Respuesta de la eliminación
     */
    public static function eliminar($desaparecidoID) {
        // Sentencia DELETE
        $comando = "DELETE *FROM desaparecido WHERE desaparecidoid='$desaparecidoID'";
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
     * @param $desaparecidoID Identificador del registro
     * @return lista Datos del registro
     */
    public static function listarContacto() {
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute("select *from desaparecido");
            foreach ($re as $row) {
                $desaparecidoID = $row["desaparecidoid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $edad = $row["edad"];
                $sexo = $row["sexo"];
                $estatura = $row["estatura"];
                $colorpelo = $row["colorpelo"];
                $colorpiel = $row["colorpiel"];
                $vestimenta = $row["vestimenta"];        
                $constitucion = $row["constitucion"];       
                $otros = $row["otros"];
                    $fecha_ini   = $row["fechacre"]; 
               $fecha_fin = $row["fechaMod"];
                        
                $imagen = new Desaparecido($desaparecidoID, $nombre, $apellido, $edad, $sexo, $estatura, $colorpelo, $colorpiel, $vestimenta, $constitucion, $otros, $fecha_ini, $fecha_fin);
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
    public static function getById($desaparecidoID) {
        $query = "SELECT *FROM desaparecido where imagenid='$desaparecidoID'";
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $desaparecidoID = $row["desaparecidoid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $edad = $row["edad"];
                $sexo = $row["sexo"];
                $estatura = $row["estatura"];
                $colorpelo = $row["colorpelo"];
                $colorpiel = $row["colorpiel"];
                $vestimenta = $row["vestimenta"];        
                $constitucion = $row["constitucion"];       
                $otros = $row["otros"];
                    $fecha_ini   = $row["fechacre"]; 
               $fecha_fin = $row["fechaMod"];
                        
                $imagen = new Desaparecido($desaparecidoID, $nombre, $apellido, $edad, $sexo, $estatura, $colorpelo, $colorpiel, $vestimenta, $constitucion, $otros, $fecha_ini, $fecha_fin);
                $lista[$cont++] = $imagen;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
