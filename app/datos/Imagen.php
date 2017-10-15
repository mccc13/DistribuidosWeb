<?php

class Imagen {

    var $imagenID;
    var $nombre;
    var $fechaIngreso;
    var $dirArchivo;
    var $extencionImg;
    var $estado;

    function __construct($imagenID, $nombre, $fechaIngreso, $dirArchivo, $extencionImg, $estado) {
        $this->imagenID = $imagenID;
        $this->nombre = $nombre;
        $this->fechaIngreso = $fechaIngreso;
        $this->dirArchivo = $dirArchivo;
        $this->extencionImg = $extencionImg;
        $this->estado = $estado;
    }

    function getImagenID() {
        return $this->imagenID;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    function getDirArchivo() {
        return $this->dirArchivo;
    }

    function getExtencionImg() {
        return $this->extencionImg;
    }

    function getEstado() {
        return $this->estado;
    }

    function setImagenID($imagenID) {
        $this->imagenID = $imagenID;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;
    }

    function setDirArchivo($dirArchivo) {
        $this->dirArchivo = $dirArchivo;
    }

    function setExtencionImg($extencionImg) {
        $this->extencionImg = $extencionImg;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
