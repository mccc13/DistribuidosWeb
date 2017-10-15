<?php

require '../negocio/DaoUsuario.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    $usuario = DaoUsuario::listarUsuarios();

    if ($usuario) {

        $datos["estado"] = 1;
        $datos["usuario"] = $usuario;

        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
}

