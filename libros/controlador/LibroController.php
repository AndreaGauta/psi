<?php

use function PHPSTORM_META\type;

class LibroController {


    private $conexion;

    function __construct() {
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function listar()
    {
        try {
            $sql = "select * from libro";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);

            $resultado = [];

            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $libro = new Libro;
                $libro->setLibId($row->lib_id);
                $libro->setLibNombre($row->lib_nombre);
                $libro->setLibFechaPrestamo($row->lib_fecha_prestamo);
                $libro->setLibFechaEntrega($row->lib_fecha_entrega);
                array_push($resultado, $libro);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }

    function crear($libro)
    {
        $resultado = [];
        try {
            $sql = "insert into libro values (?,?,?,?)";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $libro->getLibId(),
                $libro->getLibNombre(),
                $libro->getLibFechaPrestamo(),
                $libro->getLibFechaEntrega(),

            ));

            if($ps->rowCount() > 0){
                $mensaje = "Se creó el libro correctamente";
                $type    = "success";
            }else {
                $mensaje = "No se pudo crear el libro";
                $type    = "error";
            }
            $this->conexion = null;
        }catch(PDOException $e){
            $mensaje = "No se pudo crear el libro " .$e->getMessage();
            $type    = "error";
        }

        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];

        return $resultado;
    }

    function buscar($lib_id)
    {
        try{
            $sql = "select * from libro where lib_id=?";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                    $lib_id
            
            ));

            $resultado = [];
            while($row =$ps->fetch(PDO::FETCH_OBJ)){
                $libro = new Libro;
                $libro->setLibId($row->lib_id);
                $libro->setLibNombre($row->lib_nombre);
                $libro->setLibFechaPrestamo($row->lib_fecha_prestamo);
                $libro->setLibFechaEntrega($row->lib_fecha_entrega);
                array_push($resultado,$libro);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo "Ocurrio un error" . $e->getMessage();
        }
        return $resultado;
    }

    function actualizar($libro){
        $resultado = [];

        $sql = "update libro set lib_nombre=? where lib_id=? ";
        $ps = $this->conexion->getConexion()->prepare($sql);
        $ps->execute(array(
                   
                    $libro->getLibNombre(),
                    $libro->getLibId()
        ));

        if($ps->rowCount() > 0){
            $mensaje = "SE actalizo correctamente el libro";
            $type = "success";
        }else{
            $mensaje = "No se puede actualizar el libro";
            $type = "error";
        }
        $this->conexion= null;
        $resultado = [
            "mensaje"=> $mensaje,
            "type" => $type
        ];

        return $resultado;
    }

    function eliminar($libro)
    {
        $resultado = [];

        $sql = "delete from libro where lib_id=?";
        $ps = $this->conexion->getConexion()->prepare($sql);
        $ps->execute(array(
                    $libro->getLibId()
        ));

        if($ps->rowCount() > 0){
            $mensaje = "Se elimino correctamente el libro";
            $type = "success";
        }else{
            $mensaje = "No se puede eliminar el libro";
            $type = "error";
        }

        $this->conexion= null;
        $resultado = [
            "mensaje"=> $mensaje,
            "type" => $type
        ];

        return $resultado;
    }
}