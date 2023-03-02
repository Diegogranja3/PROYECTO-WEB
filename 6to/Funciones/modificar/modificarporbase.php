<?php
$conexion=mysqli_connect('localhost','root','','sql');
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
    <link href="C:\xampp\htdocs\xanpon\estilo.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Icons font CSS-->
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../../css/main.css" rel="stylesheet" media="all">
</head>
<style>
    body{
        background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)),url('https://cdn.discordapp.com/attachments/1068260110415179890/1080668816465481758/a.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
    img{
        max-width: 100%;
    }
    .centroform{
        margin: 0 auto;
        position:absolute;
        width:100%;
        text-align:center;
    }
    </style>
<body>
<form class="formulario" method="POST">
<div class="centroform"><center><h3 class="display-6" style="color: blanchedalmond;">Modificar registro</h3></center></div>
            <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                        <div class="row row-space">
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

               
<div class="col-2"><div class="input-group"><button type="submit" class="btn btn-primary" name="btnmod" value="ok">Modificar</button></div></div>
<div class="col-2"><div class="input-group"><a href='../../Base-de-datos/Basededatos.php' class='btn btn-danger'>Regresar</a></div></div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</div>
            </div>
        </div>
    </div>
</body>
</html>