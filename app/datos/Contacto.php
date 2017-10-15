<?php

class Contacto {

    var $contactoID;
    var $nombre;
    var $apellido;
    var $sexo;
    var $parentesco;
    var $telefono;
    var $email;
    var $fecha_ini;
    var $fecha_fin;

    function __construct($contactoID, $nombre, $apellido, $sexo, $parentesco, $telefono, $email, $fecha_ini, $fecha_fin) {
        $this->contactoID = $contactoID;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->parentesco = $parentesco;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->fecha_ini = $fecha_ini;
        $this->fecha_fin = $fecha_fin;
    }

    function getFecha_ini() {
        return $this->fecha_ini;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getEmail() {
        return $this->email;
    }

    function setFecha_ini($fecha_ini) {
        $this->fecha_ini = $fecha_ini;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getContactoID() {
        return $this->contactoID;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getGenero() {
        return $this->genero;
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setContactoID($contactoID) {
        $this->contactoID = $contactoID;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}
