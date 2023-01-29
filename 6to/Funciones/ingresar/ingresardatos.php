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

</head>
<body>
<h1 class="text-center p-3">Bienvenido <?php echo $nombre;?></h1>
<h2 class="text-center p-3">Registro de datos</h2>
    <div class="contenedor">
        <form class="col-4 p-3 m-auto" action="graficos.php" class="formulario" id="formulario" name="formulario" method="POST">
            <div class="contenedor-inputs">
            <div class="mb-3">
            <input class="form-control" hidden required="required" type="text" name="NON" value="<?php echo($nombre)?>">
</div>
<div class="mb-3">
            <input class="form-control" step="0.01" required="required" type="number" name="PAP" placeholder="Papel(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="CAR" placeholder="Carton(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="VID" placeholder="Vidrio(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="PET" placeholder="PET(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="PEAD" placeholder="PEAD(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="PEBD" placeholder="PEBD(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="BOPP" placeholder="BOPP(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="ALUM" placeholder="Aluminio(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="HOJ" placeholder="Hojalata(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="BAT" placeholder="Baterias(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="MAD" placeholder="Madera(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="ELEC" placeholder="Electronicos(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="TON" placeholder="Cartuchos de toner(KG)">
            </div>
            <div class="mb-3">
            <input class="form-control" step="0.01"   required="required" type="number" name="REB" placeholder="Rebabas de hierro(KG)">
            </div>
            <div class="mb-3">
            <p>Semestre correspondiente (verifica que sea acorde a la fecha)</p>
            <input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input>
            <input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input>
</div>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Ld13xEjAAAAAHT11fl6fMk_dEnu3Pc7gKEJ6r8z"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Ld13xEjAAAAAHT11fl6fMk_dEnu3Pc7gKEJ6r8z', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
            <input class="btn btn-primary" type="submit" class="btn" name="Continuar" value="Continuar">
               <a href="cerrarsesion.php" class="btn btn-danger">Regresar</a>
            </div>
</form>
</div>
</body>
</html>

