<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://kit.fontawesome.com/5529d915fb.js" crossorigin="anonymous"></script>
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Base de datos</title>
<link rel="icon" type="image/png" href="images/base.png"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <center><h1>Graficar semestre</h1></center>
    <form class="col-4 p-3 m-auto" class="formulario" id="formulario" name="formulario" method="POST">
    <div class="mb-3">
            </div>
            <input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input>
            <input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input>
            <br>
            <select class="form-select" aria-label="Default select example" name="anio" id="anio">
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
              <option>2026</option>
              <option>2027</option>
              <option>2028</option>
              <option>2029</option>
</select>
<br>
            <input class="btn btn-primary" type="submit" class="btn" name="Continuar" value="Continuar">
            <a href="index.html" class="btn btn-danger">Regresar</a>
            </div>

    </form>
</body>
</html>
<?php
error_reporting(0);
$conexion=mysqli_connect('localhost','root','','sql');
if ($conexion->connect_error) {
 echo "Error en la base de datos";
}
$anio=$_POST['anio'];
if($_POST['si']==1){
  $fecha_inicio="$anio-01-01";
  $fecha_final="$anio-06-30";
}
elseif($_POST['si']==2){
  $fecha_inicio="$anio-07-01";
  $fecha_final="$anio-12-31";
}

$papSQL=$conexion->query("SELECT sum(Papel_KG) as Sumapapel from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$cartSQL=$conexion->query("SELECT sum(Carton_KG) as Sumacarton from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$vidSQL=$conexion->query("SELECT sum(Vidrio_KG) as Sumavidrio from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$petSQL=$conexion->query("SELECT sum(PET_KG) as SumaPET from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$peadSQL=$conexion->query("SELECT sum(PEAD_KG) as SumaPEAD from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$pebdSQL=$conexion->query("SELECT sum(PEBD_KG) as SumaPEBD from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$boppSQL=$conexion->query("SELECT sum(BOPP_KG) as SumaBOPP from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$aluminioSQL=$conexion->query("SELECT sum(Aluminio_KG) as SumaAluminio from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$hojalataSQL=$conexion->query("SELECT sum(Hojalata_KG) as SumaHojalata from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$bateriasSQL=$conexion->query("SELECT sum(Baterias_KG) as SumaBaterias from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$maderaSQL=$conexion->query("SELECT sum(Madera_KG) as SumaMadera from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$electronicosSQL=$conexion->query("SELECT sum(Electronicos_KG) as SumaElectronicos from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$cartuchosSQL=$conexion->query("SELECT sum(Cartuchos_toner_KG) as SumaToner from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$rebabaSQL=$conexion->query("SELECT sum(Rebaba_hierro_KG) as Sumarebaba from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
?>

<?php
while ($resultado = mysqli_fetch_assoc($papSQL)){?>
<?php
while ($resultadocart = mysqli_fetch_assoc($cartSQL)){ ?>
<?php
while ($resultadovid = mysqli_fetch_assoc($vidSQL)){ ?>
<?php
while ($resultadopet = mysqli_fetch_assoc($petSQL)){ ?>
<?php
while ($resultadopead = mysqli_fetch_assoc($peadSQL)){ ?>
<?php
while ($resultadopebd = mysqli_fetch_assoc($pebdSQL)){ ?>
<?php
while ($resultadobopp = mysqli_fetch_assoc($boppSQL)){ ?>
<?php
while ($resultadoalum = mysqli_fetch_assoc($aluminioSQL)){ ?>
<?php
while ($resultadohojalata = mysqli_fetch_assoc($hojalataSQL)){ ?>
<?php
while ($resultadobat = mysqli_fetch_assoc($bateriasSQL)){ ?>
<?php
while ($resultadomadera = mysqli_fetch_assoc($maderaSQL)){ ?>
<?php
while ($resultadoelect = mysqli_fetch_assoc($electronicosSQL)){ ?>
<?php
while ($resultadocartuchos = mysqli_fetch_assoc($cartuchosSQL)){ ?>
<?php
while ($resultadorebabas = mysqli_fetch_assoc($rebabaSQL)){ ?>
<?php $verificar= $resultado['Sumapapel']+$resultadocart['Sumacarton']+$resultadovid['Sumavidrio']+$resultadopet['SumaPET']+$resultadopead['SumaPEAD']+$resultadopebd['SumaPEBD']+$resultadobopp['SumaBOPP']+$resultadoalum['SumaAluminio']+$resultadohojalata['SumaHojalata']+$resultadobat['SumaBaterias']+$resultadomadera['SumaMadera']+$resultadoelect['SumaElectronicos']+$resultadocartuchos['SumaToner']+$resultadorebabas['Sumarebaba'];
$xd=0;
?>
<h6>Entre <?php echo $fecha_inicio;?> y <?php echo $fecha_final;?> estan los siguientes registros:</h6>
<table class="table">
<thead>
    <tr>
      <th scope="col">Papel</th>
      <th scope="col">Carton</th>
      <th scope="col">Vidrio</th>
      <th scope="col">PET</th>
      <th scope="col">PEAD</th>
      <th scope="col">PEBD</th>
      <th scope="col">BOPP</th>
      <th scope="col">Aluminio</th>
      <th scope="col">Hojalata</th>
      <th scope="col">Baterias</th>
      <th scope="col">Madera</th>
      <th scope="col">Electronicos</th>
      <th scope="col">Cartuchos de toner</th>
      <th scope="col">Rebaba de hierro</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td><?php echo $resultado['Sumapapel'];?></td>
      <td><?php echo $resultadocart['Sumacarton'];?></td>
      <td><?php echo $resultadovid['Sumavidrio'];?></td>
      <td><?php echo $resultadopet['SumaPET'];?></td>
      <td><?php echo $resultadopead['SumaPEAD'];?></td>
      <td><?php echo $resultadopebd['SumaPEBD'];?></td>
      <td><?php echo $resultadobopp['SumaBOPP'];?></td>
      <td><?php echo $resultadoalum['SumaAluminio'];?></td>
      <td><?php echo $resultadohojalata['SumaHojalata'];?></td>
      <td><?php echo $resultadobat['SumaBaterias'];?></td>
      <td><?php echo $resultadomadera['SumaMadera'];?></td>
      <td><?php echo $resultadoelect['SumaElectronicos'];?></td>
      <td><?php echo $resultadocartuchos['SumaToner'];?></td>
      <td><?php echo $resultadorebabas['Sumarebaba'];?></td>
      <td>
      <a href="graficossemestrre.php?papel=<?=$resultado['Sumapapel']?>&carton=<?=$resultadocart['Sumacarton']?>&vidrio=<?=$resultadovid['Sumavidrio']?>&pet=<?=$resultadopet['SumaPET']?>&pead=<?=$resultadopead['SumaPEAD']?>&pebd=<?=$resultadopebd['SumaPEBD']?>&bopp=<?=$resultadobopp['SumaBOPP']?>&aluminio=<?=$resultadoalum['SumaAluminio']?>&hojalata=<?=$resultadohojalata['SumaHojalata']?>&baterias=<?=$resultadobat['SumaBaterias']?>&madera=<?=$resultadomadera['SumaMadera']?>&electronicos=<?=$resultadoelect['SumaElectronicos']?>&toner=<?=$resultadocartuchos['SumaToner']?>&rebaba=<?=$resultadorebabas['Sumarebaba']?>" class="btn btn-small btn-danger"><i class="fa-solid fa-arrow-trend-up"></i></a>
        <br>
</tr>
      </td> 
      <?php
       }}}}}}}}}}}}}}
        ?>