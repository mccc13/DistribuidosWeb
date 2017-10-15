<?php

require '../negocio/DaoUsuario.php';



if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['userID'])) {

        // Obtener parámetro idUsuario
        $parametro = $_GET['userID'];

        // Tratar retorno
        $retorno = DaoUsuario::getById($parametro);


        if ($retorno) {

            $usuario["estado"] = "1";
            $usuario["usuario"] = $retorno;
            // Enviar objeto json de usuario
            print json_encode($usuario);
        } else {
            // Enviar respuesta de error general
            print json_encode(
                            array(
                                'estado' => '2',
                                'mensaje' => 'No se obtuvo el registro'
                            )
            );
        }
    } else {
        // Enviar respuesta de error
        print json_encode(
                        array(
                            'estado' => '3',
                            'mensaje' => 'Se necesita un identificador'
                        )
        );
    }
}
