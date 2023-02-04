<?php
            include '../../Base-de-datos/conexion.php';
        include 'registrorapidoincluido.php';
        error_reporting(0);
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registro rapido</title>
    <link rel="icon" type="image/png" href="images/ed.png"/>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="display-6">Registro rapido</h3>
            <div class="mb-3">
 <label for="exempleInputEmail1" class="form-label m-auto">Nombre de la persona</label>
                <input required type="text" class="form-control" name="nombre">
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Papel(KG)</label>
                <input type="number" class="form-control" name="papel">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Carton(KG)</label>
                <input type="number" class="form-control" name="carton">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Vidrio(KG)</label>
                <input type="number" class="form-control" name="vidrio">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">PET(KG)</label>
                <input type="number" class="form-control" name="pet">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">PEAD(KG)</label>
                <input type="number" class="form-control" name="pead">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">PEBD(KG)</label>
                <input type="number" class="form-control" name="pebd">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">BOPP(KG)</label>
                <input type="number" class="form-control" name="bopp">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Aluminio(KG)</label>
                <input type="number" class="form-control" name="aluminio">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Hojalata(KG)</label>
                <input type="number" class="form-control" name="hojalata">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Baterias(KG)</label>
                <input type="number" class="form-control" name="baterias">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Madera(KG)</label>
                <input type="number" class="form-control" name="madera">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Electronicos(KG)</label>
                <input type="number" class="form-control" name="electronicos">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Cartuchos de toner(KG)</label>
                <input type="number" class="form-control" name="toner">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Rebaba de hierro(KG)</label>
                <input type="number" class="form-control" name="rebaba">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Fecha</label>
                <input required type="date" class="form-control" name="fecha">
</div>
<div class="mb-3">
            <p>Semestre correspondiente (verifica que sea acorde a la fecha)</p>
            <input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input>
            <input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input>
</div>
               
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Agregar registro</button>
<br>
</form>
<br>
<a href="../../Base-de-datos/Basededatos.php" class="btn btn-danger">Regresar a la base</a>

</body>
</html>



