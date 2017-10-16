<?php

include '../datos/Usuario.php';
include_once '../conexion/config.php';

class DaoUsuario {

    function __construct() {
        
    }

    /**
     * Insertar un nuevo usuario
     *
     * @param $usuarioid      identificador de usuario
     * @param $nombre      nombre de usuario
     * @param $apellido    apellido de usuario
     * @param $sexo        sexo de usuario
     * @param $email       email de usuario
     * @param $pass        contraseña de usuario
     * @param $estado 
     * @param fechacre   fecha de registro
     * @param $fechaactual   fecha fin

     * @return 
     */
    public static function regitrarUsuario($nombre, $apellido, $sexo, $email, $pass, $estado) {
        try {
            global $con;
            $time= time();
            $fechaactual= date("d/m/y H:i:s", $time);
            
            $query = "INSERT INTO usuario(nombre, apellido, sexo, email, pass, estado, fechacre, fechamod) values('".$nombre."','".$apellido."', '".$sexo."', '".$email."', '".$pass."', '".$estado."', ".$fechaactual.", ".$fechaactual." )";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Retorna lalista de los usuarios
     *
     * @param $usuarioid Identificador del registro
     * @return array Datos del registro
     */
    public static function listarUsuarios() {
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute("select *from usuario");
            foreach ($re as $row) {
             
                $usuarioid = $row["usuarioid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $email = $row["email"];

                $estado = $row["estado"];
                $fechaactual= $rows["fechaactual"];
                $fechaactual = $row["fechamod"];

                $user = new Usuario($usuarioid, $nombre, $apellido, $sexo, $email, "", $estado, fechacre, $fechaactual);
                $lista[$cont++] = $user;
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
     * @param $userID Identificador del usuario
     * @return lista
     */
    public static function getById($userID) {
        $query = "SELECT *FROM usuario where usuarioid='$userID'";
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $usuarioid = $row["usuarioid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $email = $row["email"];
                $estado = $row["estado"];
                $fechaactual = $row["fechaactual"];
                $fechaactual = $row["fechaactual"];
                $user = new Usuario($usuarioid, $nombre, $apellido, $sexo, $email, "", $estado, $fechaactual, $fechaactual);
                $lista[$cont++] = $user;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    /**
     * Actualiza un registro de la bases de datos basado
     * en los nuevos valores relacionados con un identificador
     *
     * @param $nombre      nuevo nombre
     * @param $apellido    nueva apellido
     * @param $sexo        sexo de usuario
     * @param $email       email
     * @param $pass        contraseña
     * @param $estado      estado de usuario
     * @param fechacre   fecha inicial
     * @param $fechaactual   fecha final
     * 
     */
    public static function update($nombre, $apellido, $sexo, $email, $pass, $estado, $fechaactual , $fechaactual) {
        // Creando consulta UPDATE
        $consulta = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', sexo='$sexo', pass='$pass', estado='$estado', fechacre='$fechaactual', fechamod='$fechaactual' WHERE email='$email'";

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
     * @param $email identificador de la meta
     * @return bool Respuesta de la eliminación
     */
    public static function eliminar($email) {
        // Sentencia DELETE
        $comando = "DELETE *FROM usuario WHERE email='$email'";

        try {
            global $con;
            $re = $con->Execute($comando);
            echo $re;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public static function suma($param1, $parma2) {
        return $param1 + $parma2;
    }

    public static function verificarUser($parm1, $parm2) {
        try {
            $query = "SELECT *FROM usuario where email = '".$parm1."' and pass = '".$parm2."'";

            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $usuarioid = $row["usuarioid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $email = $row["email"];
                $pass = $row["pass"];
                $estado = $row["estado"];
                $fechaactual = $row["fechacre"];
                $fechaactual = $row["fechamod"];
                $user = new Usuario($usuarioid, $nombre, $apellido, $sexo, $email, $pass, $estado, $fechaactual, $fechaactual);
                //var_dump($coment);
                $lista[$cont++] = $user;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
