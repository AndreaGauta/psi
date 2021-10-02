<?php

use function PHPSTORM_META\type;

class RegistroController {


    private $conexion;

    function __construct() {
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function listar()
    {
        try {
            $sql = "select * from registro";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);

            $resultado = [];

            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $registro = new Registro;
                $registro->setRegId($row->reg_id);
                $registro->setRegNombre($row->reg_nombre);
                $registro->setRegFechaIngreso($row->reg_fecha_ingreso);
            
                array_push($resultado, $registro);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }

    function crear($registro)
    {
        $resultado = [];
        try {
            $sql = "insert into registro values (?,?,?)";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $registro->getRegId(),
                $registro->getRegNombre(),
                $registro->getRegFechaIngreso(),
                
            ));

            if($ps->rowCount() > 0){
                $mensaje = "Se creó el registro correctamente";
                $type    = "success";
            }else {
                $mensaje = "No se pudo crear el registro";
                $type    = "error";
            }
            $this->conexion = null;
        }catch(PDOException $e){
            $mensaje = "No se pudo crear el registro " .$e->getMessage();
            $type    = "error";
        }

        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];

        return $resultado;
    }

    function buscar($reg_id)
    {
        try{
            $sql = "select * from registro where reg_id=?";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                    $reg_id
            
            ));

            $resultado = [];
            while($row =$ps->fetch(PDO::FETCH_OBJ)){
                $registro = new Registro;
                $registro->setRegId($row->reg_id);
                $registro->setRegNombre($row->reg_nombre);
                $registro->setRegFechaIngreso($row->reg_fecha_ingreso);
                
                array_push($resultado,$registro);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo "Ocurrio un error" . $e->getMessage();
        }
        return $resultado;
    }

    function actualizar($registro){
        $resultado = [];

        $sql = "update registro set reg_nombre=? where reg_id=? ";
        $ps = $this->conexion->getConexion()->prepare($sql);
        $ps->execute(array(
                   
                    $registro->getRegNombre(),
                    $registro->getRegId()
        ));

        if($ps->rowCount() > 0){
            $mensaje = "SE actalizo correctamente el registro";
            $type = "success";
        }else{
            $mensaje = "No se puede actualizar el registro";
            $type = "error";
        }
        $this->conexion= null;
        $resultado = [
            "mensaje"=> $mensaje,
            "type" => $type
        ];

        return $resultado;
    }

    function eliminar($registro)
    {
        $resultado = [];

        $sql = "delete from registro where reg_id=?";
        $ps = $this->conexion->getConexion()->prepare($sql);
        $ps->execute(array(
                    $registro->getRegId()
        ));

        if($ps->rowCount() > 0){
            $mensaje = "Se elimino correctamente el registro";
            $type = "success";
        }else{
            $mensaje = "No se puede eliminar el registro";
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