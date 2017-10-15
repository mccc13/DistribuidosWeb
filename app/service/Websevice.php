<?php

require_once '../negocio/DaoUsuario.php';

$usu = new DaoUsuario();
$lista = $usu->listarUsuarios();
echo json_encode($lista);


?>
