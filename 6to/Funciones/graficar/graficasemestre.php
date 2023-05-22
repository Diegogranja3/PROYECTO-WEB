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
<link rel="icon" type="image/png" href="https://static.vecteezy.com/system/resources/previews/001/187/079/non_2x/chart-png.png"/>
<title>Graficos Semestrales</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
  body{
    background-image: url("../../images/loginfondowo.png");
    margin: 0px;
	padding: 50px;
  background-repeat: no-repeat;
    background-size: cover;
}
  </style>
<body>
<div class="card card-4">
                <div class="card-body">
                        <div class="row row-space">
  <center><h1>Graficar por semestre</h1></center>
    <form class="col-4 p-3 m-auto" class="formulario" id="formulario" name="formulario" method="POST">
    <div class="mb-3">
            </div>
            <center><input  class="form-check-input" type="radio" name="si" id="si" value="1" checked="true">Enero-Junio</input>
            <input  class="form-check-input" type="radio" name="si" id="si" value="2">Julio-Diciembre</input>
            <br><br>
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
            <a href="../../Base-de-datos/Basededatos.php" class="btn btn-danger">Regresar</a>
            </div></center>

    </form>
</body>
</html>
<?php
error_reporting(0);
$conexion=mysqli_connect('localhost','root','','sql');
if ($conexion->connect_error) {
 echo "Error en la base de datos";
}
if(!empty($_POST["Continuar"])){
  $xd=1;
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
$latasSQL=$conexion->query("SELECT sum(Latas_KG) as SumaLatas from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$RESQL=$conexion->query("SELECT sum(Residuos_peligrosos_KG) as SumaRes from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$electronicosSQL=$conexion->query("SELECT sum(Electronicos_KG) as SumaElectronicos from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$cartuchosSQL=$conexion->query("SELECT sum(Cartuchos_toner) as SumaToner from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$taparroscasSQL=$conexion->query("SELECT sum(Taparroscas_KG) as SumaTapa from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
$rpbiSQL=$conexion->query("SELECT sum(Residuos_biologicos) as SumaRPBI from ds where Fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");
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
while ($resultadolatas = mysqli_fetch_assoc($latasSQL)){ ?>
<?php
while ($resultadoRES = mysqli_fetch_assoc($RESQL)){ ?>
<?php
while ($resultadoelect = mysqli_fetch_assoc($electronicosSQL)){ ?>
<?php
while ($resultadocartuchos = mysqli_fetch_assoc($cartuchosSQL)){ ?>
<?php
while ($resultadotapa = mysqli_fetch_assoc($taparroscasSQL)){ ?>
<?php
while ($resultadoRPBI = mysqli_fetch_assoc($rpbiSQL)){ ?>
<br>
<?php
if($xd==1){ 
?>
<center><h6>Entre "<?php echo $fecha_inicio;?>" y "<?php echo $fecha_final;?>" están los siguientes registros:</h6></center>
<table class="table">
<thead>
    <tr>
      <th scope="col">Papel</th>
      <th scope="col">Carton</th>
      <th scope="col">Vidrio</th>
      <th scope="col">PET</th>
      <th scope="col">PEAD</th>
      <th scope="col">Electronicos</th>
      <th scope="col">Toners</th>
      <th scope="col">Latas</th>
      <th scope="col">Taparroscas</th>
      <th scope="col">Residuos</th>
      <th scope="col">RPBI</th>
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
      <td><?php echo $resultadoelect['SumaElectronicos'];?></td>
      <td><?php echo $resultadocartuchos['SumaToner'];?></td>
      <td><?php echo $resultadolatas['SumaLatas'];?></td>
      <td><?php echo $resultadotapa['SumaTapa'];?></td>
      <td><?php echo $resultadoRES['SumaRes'];?></td>
      <td><?php echo $resultadoRPBI['SumaRPBI'];?></td>
      <td>
      <a href="graficossemestrre.php?papel=<?=$resultado['Sumapapel']?>&carton=<?=$resultadocart['Sumacarton']?>&vidrio=<?=$resultadovid['Sumavidrio']?>&pet=<?=$resultadopet['SumaPET']?>&pead=<?=$resultadopead['SumaPEAD']?>&toner=<?=$resultadocartuchos['SumaToner']?>&latas=<?=$resultadolatas['SumaLatas']?>&taparroscas=<?=$resultadotapa['SumaTapa']?>&residuos=<?=$resultadoRES['SumaRes']?>&electronicos=<?=$resultadoelect['SumaElectronicos']?>&rpbi=<?=$resultadoRPBI['SumaRPBI']?>" class="btn btn-small btn-danger"><i class="fa-solid fa-arrow-trend-up"></i></a>
        <br>
        </td>
</tr>
      <?php
       }else{
        echo '<center><h4>Seleccione una fecha</h4></center>';
       }}}}}}}}}}}}
        ?>
        </div>
            </div>
        </div>
