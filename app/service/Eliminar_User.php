<?php

require '../negocio/DaoUsuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);

    $retorno = DaoUsuario::eliminar($body['userID']);

    if ($retorno) {
        print json_encode(
                        array(
                            'estado' => '1',
                            'mensaje' => 'Eliminación exitosa')
        );
    } else {
        print json_encode(
                        array(
                            'estado' => '2',
                            'mensaje' => 'Eliminación fallida')
        );
    }
}

