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
       background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url("../../images/loginfondowo.png");
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
<div class="centroform"><center><h3 class="display-6" style="color: blanchedalmond;">Registro rapido</h3></center></div>
<form class="formulario" method="POST">
            <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                        <div class="row row-space">
   <center><label for="exempleInputEmail1" class="form-label m-auto">Nombre de la persona</label></center>
   <div class="mb-3"><input required type="text" class="form-control" name="nombre"></div>
                <div class="col-2"><div class="input-group">
                <input class="form-control" step="0.01" required="required" type="number" name="papel" placeholder="Papel(KG)">
            </div></div>
<div class="col-2"><div class="input-group">
                <input class="form-control" step="0.01"   required="required" type="number" name="carton" placeholder="Carton(KG)">
            </div></div>
            <div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="vidrio" placeholder="Vidrio(KG)">
</div></div>
<div class="col-2"><div class="input-group">
<input class="form-control" step="0.01"   required="required" type="number" name="pet" placeholder="PET(KG)">
</div></div>
<div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="pead" placeholder="PEAD(KG)">
            </div></div>
            <div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="elec" placeholder="Electonicos(KG)">
            </div></div>
            <div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="cton" placeholder="Cartuchos Toner(Pieza)">
            </div></div>
            <div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="lat" placeholder="Lata(KG)">
            </div></div>
            <div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="tapa" placeholder="Taparroscas(KG)">
            </div></div>
            <div class="col-2"><div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="resp" placeholder="Residuos Peligrosos(KG)">
            </div></div>
            <div class="mb-3">
                <center><label for="exempleInputEmail1" class="form-label m-auto">Fecha</label></center>
                <input required type="date" class="form-control" name="fecha">
</div>
<div class="mb-3">
            <p>Semestre correspondiente (verifica que sea acorde a la fecha)</p>
            <input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input>
            <input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input></div>
<center><div class="col-2"><div class="input-group"><button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Agregar registro</button></div></div></center>
</form>
<center><div><a href="../../Base-de-datos/Basededatos.php" class="btn btn-danger">Regresar</a></div></center>
</div>
            </div>
        </div>
    </div>
</body>
</html>


