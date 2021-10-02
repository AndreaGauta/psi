<!doctype html>
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
                    Listado de libros
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="/vista/libros/listarLibro.php" class="btn btn-primary">Regresar al listado</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-10 ofsset-md-1">
                <form action="crearLibro.php" method="post">
                    <div class="form-group">
                        <label for="lib_id">ID</label>
                        <input type="number" class="form-control" id="lib_id" name="lib_id">
                    </div>
                    <div class="form-group">
                        <label for="lib_nombre">Nombre</label>
                        <input type="text" class="form-control" id="lib_nombre" name="lib_nombre">
                    </div>

                    <div class="form-group">
                        <label for="lib_fecha_prestamo">Fecha de prestamo</label>
                        <input type="date" class="form-label" id="lib_fecha_prestamo" name="lib_fecha_prestamo">
                    </div>

                    <div class="form-group">
                        <label for="lib_fecha_entrega">Fecha entrega</label>
                        <input type="date" class="form-label" id="lib_fecha_entrega" name="lib_fecha_entrega">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
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