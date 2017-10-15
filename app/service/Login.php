<?php

require '../negocio/DaoUsuario.php';

$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];
//
//$email = "hola";
//$pass = "juan";


$lista = DaoUsuario::verificarUser($email, $pass);
echo json_encode($lista);
//
// $pr=34;
// $pr1=50;
//echo DaoUsuario::suma($pr, $pr1);

?>
