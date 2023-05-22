<?php
if(empty($_COOKIE['TestCookie'])){
    echo "La sesion se cerro por seguridad";
    die();
}
$nombre=$_COOKIE['TestCookie'];
error_reporting(0);
$enlace=mysqli_connect('localhost','root','','sql');

if(!$enlace){
    echo"Error en la conexion con el servidor";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiales</title>
    <link rel="icon" type="image/png" href="images/aa.png"/>
    <link href="C:\xampp\htdocs\xanpon\estilo.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
        background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)),url('../../images/datowosfondo.jpg');
        background-repeat: no-repeat;
    background-size: cover;
    }
    img{
        max-width: 100%;
    }
    .centroform{
        margin: 0 auto;
        position:absolute;
        top:3%;
        width:100%;
        text-align:center;
    }
    </style>
<body>
    <div class="centroform">
<center><h1 style="color: blanchedalmond;">Bienvenido <?php echo $nombre;?></h1></center><br>
<center><h2 style="color: blanchedalmond;">Registro de datos</h2></center></div>
    <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST" action="../graficar/graficos.php" id="formulario" name="formulario" class="formulario">
                        <div class="row row-space">

                                <input class="form-control" hidden required="required" type="text" name="NON" value="<?php echo($nombre)?>">

<div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01" required="required" type="number" name="PAP" placeholder="Papel(KG)">
            </div>
            </div>
            <div class="col-2">
            <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="CAR" placeholder="Carton(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="VID" placeholder="Vidrio(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="PET" placeholder="PET(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="PEAD" placeholder="PEAD(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="ELEC" placeholder="Electronicos(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0"   required="required" type="number" name="CTON" placeholder="Cartuchos Toner(Pieza)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="LAT" placeholder="Latas(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="TAPA" placeholder="Taparroscas(KG)">
            </div></div>
            <div class="col-2">
                                <div class="input-group">
            <input class="form-control" step="0.01"   required="required" type="number" name="RESP" placeholder="Residuos Peligrosos(KG)">
            </div></div>
            <div class="col-15">
            <input class="form-control" step="0.01"  required="required" type="number" name="RPBI" placeholder="Residuos Peligrosos Biologico-Infecciosos">
            </div>
            <p>Semestre correspondiente (verifica que sea acorde a la fecha)</p>
            <div class="col-2"><div class="input-group"><input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input></div></div>
            <div class="col-2"><div class="input-group"><input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input></div></div>
</div>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Ld13xEjAAAAAHT11fl6fMk_dEnu3Pc7gKEJ6r8z"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Ld13xEjAAAAAHT11fl6fMk_dEnu3Pc7gKEJ6r8z', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
<center><div class="col-2"><div class="input-group"><input class="btn btn-primary" type="submit" class="btn" name="Continuar" value="Continuar"></div></div></center>
<center><a href="../../index.html" class="btn btn-danger">Regresar</a></center>
            </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
