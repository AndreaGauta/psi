<?php

class Libro {

    private $lib_id;
    private $lib_nombre;
    private $lib_fecha_prestamo;
    private $lib_fecha_entrega;

    function __construct() {

    }

    function setLibId($lib_id){
        $this->lib_id = $lib_id;
    }

    function setLibNombre($lib_nombre){
        $this->lib_nombre = $lib_nombre;
    }

    function setLibFechaPrestamo($lib_fecha_prestamo){
        $this->lib_fecha_prestamo = $lib_fecha_prestamo;
    }

    function setLibFechaEntrega($lib_fecha_entrega){
        $this->lib_fecha_entrega = $lib_fecha_entrega;
    }

    function getLibId() {
        return $this->lib_id;
    }

    function getLibNombre() {
        return $this->lib_nombre;
    }

    function getLibFechaPrestamo() {
        return $this->lib_fecha_prestamo;
    }

    function getLibFechaEntrega() {
        return $this->lib_fecha_entrega;
    }
}