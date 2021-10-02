<?php

class Registro {

    private $reg_id;
    private $reg_nombre;
    private $reg_fecha_ingreso;
    

    function __construct() {

    }

    function setRegId($reg_id){
        $this->reg_id = $reg_id;
    }

    function setRegNombre($reg_nombre){
        $this->reg_nombre = $reg_nombre;
    }

    function setRegFechaIngreso($reg_fecha_ingreso){
        $this->reg_fecha_ingreso = $reg_fecha_ingreso;
    }

   

    function getRegId() {
        return $this->reg_id;
    }

    function getRegNombre() {
        return $this->reg_nombre;
    }

    function getRegFechaIngreso() {
        return $this->reg_fecha_ingreso;
    }

    
}