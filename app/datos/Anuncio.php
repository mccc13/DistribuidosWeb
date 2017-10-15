<?php

class Anuncio {

    var $anuncioID;
    var $desaparecidoID;
    var $contactoID;
    var $usuarioID;
    var $estado;
    var $fecha_ini;
    var $fecha_fin;
    var $imagenID;
    var $observacion;

    function __construct($anuncioID, $desaparecidoID, $contactoID, $usuarioID, $estado, $fecha_ini, $fecha_fin, $imagenID, $observacion) {
        $this->anuncioID = $anuncioID;
        $this->desaparecidoID = $desaparecidoID;
        $this->contactoID = $contactoID;
        $this->usuarioID = $usuarioID;
        $this->estado = $estado;
        $this->fecha_ini = $fecha_ini;
        $this->fecha_fin = $fecha_fin;
        $this->imagenID = $imagenID;
        $this->observacion = $observacion;
    }

   
    function getAnuncioID() {
        return $this->anuncioID;
    }

    function getDesaparecidoID() {
        return $this->desaparecidoID;
    }

    function getContactoID() {
        return $this->contactoID;
    }

    function getUsuarioID() {
        return $this->usuarioID;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha_ini() {
        return $this->fecha_ini;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getImagenID() {
        return $this->imagenID;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function setAnuncioID($anuncioID) {
        $this->anuncioID = $anuncioID;
    }

    function setDesaparecidoID($desaparecidoID) {
        $this->desaparecidoID = $desaparecidoID;
    }

    function setContactoID($contactoID) {
        $this->contactoID = $contactoID;
    }

    function setUsuarioID($usuarioID) {
        $this->usuarioID = $usuarioID;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecha_ini($fecha_ini) {
        $this->fecha_ini = $fecha_ini;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setImagenID($imagenID) {
        $this->imagenID = $imagenID;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

}
