<?php

class Comentario {

    var $comentarioID;
    var $descripcion;
    var $anuncioid;
    var $fechai;
    var $fechaf;

    function __construct($comentarioID, $descripcion, $anuncioid, $fechai, $fechaf) {
        $this->comentarioID = $comentarioID;
        $this->descripcion = $descripcion;
        $this->anuncioid = $anuncioid;
        $this->fechai = $fechai;
        $this->fechaf = $fechaf;
    }

    function getComentarioID() {
        return $this->comentarioID;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getAnuncioid() {
        return $this->anuncioid;
    }

    function getFechai() {
        return $this->fechai;
    }

    function getFechaf() {
        return $this->fechaf;
    }

    function setComentarioID($comentarioID) {
        $this->comentarioID = $comentarioID;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setAnuncioid($anuncioid) {
        $this->anuncioid = $anuncioid;
    }

    function setFechai($fechai) {
        $this->fechai = $fechai;
    }

    function setFechaf($fechaf) {
        $this->fechaf = $fechaf;
    }

}
