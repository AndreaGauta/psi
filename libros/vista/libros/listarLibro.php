<!doctype html>
<?php
include_once '../../controlador/LibroController.php';
include_once '../../modelo/conexion.php';
include_once '../../modelo/Libro.php';
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
                    Listado de Libros 
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="formularioCrearLibro.php" class="btn btn-primary">Crear un nuevo libro</a>
            </div>
        </div>
        

        <br><br>
        <div class="row">
            <div class="col-md-10 ofsset-md-1">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <td class="table-secondary"> Id</td>
                            <td class="table-warning">Nombre</td>
                            <td class="table-success">FechaPrestamo</td>
                            <td class="table-danger">FechaEntrega</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $LibroController = new LibroController;
                            $libros = $LibroController->listar();
                            foreach ($libros as $libro ){
                        ?>
                        <tr>
                            <td >
                                <?php echo $libro->getLibId() ?>
                            </td>
                            <td>
                                <?php echo $libro->getLibNombre() ?>
                            </td>
                            <td>
                                <?php echo $libro->getLibFechaPrestamo() ?>
                            </td>
                            <td>
                                <?php echo $libro->getLibFechaEntrega() ?>
    
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="formularioEditarLibro.php?lib_id=<?php echo $libro->getLibId() ?>" class="btn btn-outline-secondary">Editar</a>
                                    </div>
                                    <div class="col">
                                        <a href="formularioEliminarLibro.php?lib_id=<?php echo $libro->getLibId() ?>" class="btn btn-outline-danger">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
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