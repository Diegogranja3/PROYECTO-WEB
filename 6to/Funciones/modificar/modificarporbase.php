<?php
$conexion=mysqli_connect('localhost','id19794482_dora','ch-TBe&#tKlmy]T4','id19794482_beta6');
$id=$_GET["id"];
$sql=$conexion->query("SELECT*FROM ds WHERE ID=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="icon" type="image/png" href="images/ed.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="display-6">Modificar registro</h3>
            <input type="hidden" name="id" value="<?=$_GET["id"]?>">
            <?php
            include "modificardebaseincluido.php";
            while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
 <label for="exempleInputEmail1" class="form-label m-auto">Nombre de la persona</label>
                <input required type="text" class="form-control" name="nombre" value="<?=$datos->Nombre_completo?>">
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Papel(KG)</label>
                <input required type="number" class="form-control" name="papel" value="<?=$datos->Papel_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Carton(KG)</label>
                <input required type="number" class="form-control" name="carton" value="<?=$datos->Carton_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Vidrio(KG)</label>
                <input required type="number" class="form-control" name="vidrio" value="<?=$datos->Vidrio_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">PET(KG)</label>
                <input required type="number" class="form-control" name="pet" value="<?=$datos->PET_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">PEAD(KG)</label>
                <input required type="number" class="form-control" name="pead" value="<?=$datos->PEAD_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">PEBD(KG)</label>
                <input required type="number" class="form-control" name="pebd" value="<?=$datos->PEBD_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">BOPP(KG)</label>
                <input required type="number" class="form-control" name="bopp" value="<?=$datos->BOPP_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Aluminio(KG)</label>
                <input required type="number" class="form-control" name="aluminio" value="<?=$datos->Aluminio_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Hojalata(KG)</label>
                <input required type="number" class="form-control" name="hojalata" value="<?=$datos->Hojalata_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Baterias(KG)</label>
                <input required type="number" class="form-control" name="baterias" value="<?=$datos->Baterias_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Madera(KG)</label>
                <input required type="number" class="form-control" name="madera" value="<?=$datos->Madera_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Electronicos(KG)</label>
                <input required type="number" class="form-control" name="electronicos" value="<?=$datos->Electronicos_KG?>">
</div>
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Cartuchos de toner(KG)</label>
                <input required type="number" class="form-control" name="toner" value="<?=$datos->Cartuchos_toner_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Rebabas de hierro(KG)</label>
                <input required type="number" class="form-control" name="rebaba" value="<?=$datos->Rebaba_hierro_KG?>">
</div>
<div class="mb-3">
                <label for="exempleInputEmail1" class="form-label m-auto">Fecha</label>
                <input required type="date" class="form-control" name="fecha" value="<?=$datos->Fecha_entrega?>">
</div>
<div class="mb-3">
            <p>Semestre correspondiente (verifica que sea acorde a la fecha)</p>
            <input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input>
            <input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input>
</div>
            <?php }
            ?>

               
<button type="submit" class="btn btn-primary" name="btnmod" value="ok">Modificar registro</button>
<a href='Basededatos.php' class='btn btn-danger'>Regresar a la base</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>