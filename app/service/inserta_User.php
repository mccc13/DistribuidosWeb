<?php

require '../negocio/DaoUsuario.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);
    $user =new Usuario(NULL, $_REQUEST['nombre'],$_REQUEST['apellido'], $_REQUEST['sexo'], $_REQUEST['email'], $_REQUEST['pass'], "", "", "");
//    $nombre, $apellido, $sexo, $email, $pass, $estado, $fecha_ini, $fecha_fin
    $time=  time();
    $hoy=  date("y-m-d H:i:s",$time);
    $user->setFechaf($hoy);
    $user->setFechai($hoy);
     $retorno = DaoUsuario::regitrarUsuario($user);

    if ($retorno) {
        // Código de éxito
        print json_encode(
                        array(
                            'estado' => '1',
                            'mensaje' => 'Creación exitosa')
        );
    } else {
        // Código de falla
        print json_encode(
                        array(
                            'estado' => '2',
                            'mensaje' => 'Creación fallida')
        );
    }
}

