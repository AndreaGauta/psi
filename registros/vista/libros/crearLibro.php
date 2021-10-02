<!doctype html>
<?php
include_once '../../modelo/Libro.php';
include_once '../../modelo/conexion.php';
include_once '../../controlador/LibroController.php';
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
            <div class="col-md-10 offset-md-1">
                <h1>Crear libro</h1>
                <?php
                    try{
                        if(!isset($_REQUEST["lib_id"])){
                            throw new Exception("Por favor ingrese el Id de la dependencia");
                        }

                        if(!isset($_REQUEST["lib_nombre"])){
                            throw new Exception("Por favor ingrese el Id de la dependencia");
                        }

                        if(!isset($_REQUEST["lib_fecha_prestamo"])){
                            throw new Exception("Por favor ingrese el Id de la dependencia");
                        }

                        if(!isset($_REQUEST["lib_fecha_entrega"])){
                            throw new Exception("Por favor ingrese el Id de la dependencia");
                        }

                        $lib_id = $_REQUEST["lib_id"];
                        $lib_nombre = $_REQUEST["lib_nombre"];
                        $lib_fecha_prestamo = $_REQUEST["lib_fecha_prestamo"];
                        $lib_fecha_entrega = $_REQUEST["lib_fecha_entrega"];

                        $libro = new Libro;
                        $libro->setLibId($lib_id);
                        $libro->setLibNombre($lib_nombre);
                        $libro->setLibFechaPrestamo($lib_fecha_prestamo);
                        $libro->setLibFechaEntrega($lib_fecha_entrega);

                        $LibroController = new LibroController;

                        $resultado = $LibroController->crear($libro);

                        if($resultado["type"] == "success"){
                            echo '<h2 class="text-center text-success" >' .$resultado["mensaje"].  '</h2>';
                        }else{
                            echo '<h2 class="text-center text-danger" >' .$resultado["mensaje"].  '</h2>';
                        }

                    }catch(Exception $ex){
                        echo $ex->getMessage();
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="listarLibro.php" class="btn btn-primary">Regresar al listado</a>
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