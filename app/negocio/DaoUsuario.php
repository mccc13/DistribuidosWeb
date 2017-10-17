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
     * @param $fecha_ini   fecha de registro
     * @param $fecha_fin   fecha fin

     * @return 
     */
    public static function regitrarUsuario(Usuario $user) {
        try {
            global $con;
            $cout=$con->Execute("select max(usuarioid) from usuario");
            $maxx=$cout->fields[0]+1;
            $feis=$user->getFechai();
            $fer=$user->getFechaf();
          $tel=0;
//            $query = "INSERT INTO usuario(nombre, apellido, sexo, email, pass, estado, fechacre, fechamod) values('$nombre', '$apellido', '$sexo', '$email', '$pass', '$estado', '$fecha_ini', '$fecha_fin' )";
            $query2= "INSERT INTO usuario(usuarioid, nombre, apellido, sexo, email, pass, estado, fechacre, fechamod, telefono) VALUES (".$maxx.",'".$user->getNombre()."','".$user->getApellido()."','".$user->getSexo() ."','".$user->getEmail(). "','" .$user->getPass()."','habilitado','".$feis."','".$fer."',".$tel.")";
            $re = $con->Execute($query2);
            return TRUE;
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
                //array(10) { [0]=> string(6) "tdydyd" ["descripcion"]=> string(6) "tdydyd" [1]=> string(8) "jvjgjhgj"
                // ["email"]=> string(8) "jvjgjhgj" [2]=> string(5) "jkhkh" ["nombre"]=> string(5) "jkhkh" [3]=> string(2) "17" ["comentarios_sugerenciasid"]=> string(2) "17" [4]=> string(1) "1" ["paginaid"]=> string(1) "1" } 
                //   var_dump($row);
                $usuarioid = $row["usuarioid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $email = $row["email"];

                $estado = $row["estado"];
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechamod"];

                $user = new Usuario($usuarioid, $nombre, $apellido, $sexo, $email, "", $estado, $fecha_ini, $fecha_fin);
                //var_dump($coment);
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
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechamod"];
                $user = new Usuario($usuarioid, $nombre, $apellido, $sexo, $email, "", $estado, $fecha_ini, $fecha_fin);
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
     * @param $fecha_ini   fecha inicial
     * @param $fecha_fin   fecha final
     * 
     */
    public static function update($nombre, $apellido, $sexo, $email, $pass, $estado, $fecha_ini, $fecha_fin) {
        // Creando consulta UPDATE
        $consulta = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', sexo='$sexo', pass='$pass', estado='$estado', fechacre='$fecha_ini', fechamod='$fecha_fin' WHERE email='$email'";

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
            $cont=0;
            foreach ($re as $row) {
                $usuarioid = $row["usuarioid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $email = $row["email"];
                $pass = $row["pass"];
                $estado = $row["estado"];
                $fecha_ini = $row["fechacre"];
                $fecha_fin = $row["fechamod"];
                $user = new Usuario($usuarioid, $nombre, $apellido, $sexo, $email, $pass, $estado, $fecha_ini, $fecha_fin);
                //var_dump($coment);
                $lista[$cont++] = $user;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}
