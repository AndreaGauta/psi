<!doctype html>

    <?php
        include_once '../../modelo/Registro.php';
        include_once '../../modelo/conexion.php';
        include_once '../../controlador/RegistroController.php';
     ?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col text-center pt-5">
                <h1 class="text-success">
                   Editar registro
                </h1>
            </div>
        </div>
        
            <?php
                if(!isset($_GET["reg_id"])){
                    throw new Exception("No se recibio el ID del registro");
                }
                 try{
                     $reg_id = $_GET["reg_id"];
                     $RegistroController = new RegistroController;
                     $resultado = $RegistroController->buscar($reg_id);

                     if(count($resultado) > 0){
                         $registro = $resultado[0];
                     }
                    }catch(Exception $e){
                        echo $e->getMessage();
                    }
            ?>        
        <br><br>
        <div class="row">
            <div class="col-md-10 ofsset-md-1">
                <form action="crearRegistro.php" method="post">
                    <div class="form-group">
                        <label for="reg_id">ID</label>
                        <input type="number" class="form-control" id="reg_id" name="reg_id" value="<?php echo $registro->getRegId(); ?>" >
                    </div>
                    <div class="form-group">
                        <label for="reg_nombre">Nombre</label>
                        <input type="text" class="form-control" id="reg_nombre" name="reg_nombre" value="<?php echo $registro->getRegNombre(); ?>">
                    </div>
                    <div class="form-group">
                        <label for="reg_fecha_ingreso">Fecha de ingreso</label>
                        <input type="text" class="form-control" id="reg_fecha_ingreso" name="reg_fecha_ingreso" value="<?php echo $registro->getRegFechaIngreso(); ?>">
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="/vista/registros/listarRegistro.php" class="btn btn-primary">Regresar al listado</a>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>