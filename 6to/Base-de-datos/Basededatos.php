<?php
error_reporting(0);
if(empty($_COOKIE['TestCookie1'])){
    echo '<h1>La cookies expiro o no se inicio sesion<h1>';
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Base de datos</title>
<link rel="icon" type="image/png" href="images/base.png"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/5529d915fb.js" crossorigin="anonymous"></script>
<?php 
$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "sql";
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}
if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
?>
<div class="container mt-5">
<div class="col-12">
<form method="POST" action="Basededatos.php">
<div class="mb-3">
<center><h3 class="display-6">Base de datos</h3></center>
<br>
<input type="text" class="form-control" id="buscar" name="buscar" placeholder="Dejar en blanco muestra todo">
<br>
<center><input type="submit"></center>
</div>
<center><a href="../Funciones/filtros/filtrofechas.php" class="btn btn-primary">Filtro por fecha</a>
<a href="../index.html" class="btn btn-danger">Salir</a>
<a href="../Funciones/ingresar/RegistroRapido.php" class="btn btn-success">Registro rapido</a>
<a href="../Funciones/graficar/graficasemestre.php" class="btn btn-primary">Graficar fechas grandes</a>
<center>
<br>
<script>

var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

var f=new Date();                                    

document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());

</script>
</form>
<br>
</form>
<div class="">
<div class="">
<!-- recuerda que si no te funciona con mysql_query tienes que cambiarlo por mysqli_query -->
<?php $busqueda=mysqli_query($conexion,"SELECT * FROM ds WHERE Nombre_completo LIKE LOWER('%".$_POST["buscar"]."%')"); echo "<br>";
$numero = mysqli_num_rows($busqueda); ?>
<h5 class="card-tittle">Resultado (<?php echo $numero; ?>)<br> Todas las cantidades son en kilos</h5>
<table border="1px" class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
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
      <th scope="col">Fecha</th>
      <th scope="col">Semestre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
   <tr>
       <?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
   <td><?php echo $resultado["ID"]; ?></td>
      <td><?php echo $resultado["Nombre_completo"]; ?></td>
      <td><?php echo $resultado["Papel_KG"]; ?></td>
      <td><?php echo $resultado["Carton_KG"]; ?></td>
      <td><?php echo $resultado["Vidrio_KG"]; ?></td>
      <td><?php echo $resultado["PET_KG"]; ?></td>
      <td><?php echo $resultado["PEAD_KG"]; ?></td>
      <td><?php echo $resultado["PEBD_KG"]; ?></td>
      <td><?php echo $resultado["BOPP_KG"]; ?></td>
      <td><?php echo $resultado["Aluminio_KG"]; ?></td>
      <td><?php echo $resultado["Hojalata_KG"]; ?></td>
      <td><?php echo $resultado["Baterias_KG"]; ?></td>
      <td><?php echo $resultado["Madera_KG"]; ?></td>
      <td><?php echo $resultado["Electronicos_KG"]; ?></td>
      <td><?php echo $resultado["Cartuchos_toner_KG"]; ?></td>
      <td><?php echo $resultado["Rebaba_hierro_KG"]; ?></td>
      <td><?php echo $resultado["Fecha_entrega"]?></td>
      <td><?php echo $resultado["Semestre"]; ?></td>
      <td>
      <a href="../Funciones/modificar/modificarporbase.php?id=<?=$resultado['ID']?>"class="btn btn-small btn-warning"  ><i class="fa-solid fa-pen-to-square"></i></a>
        <br>
        <a href="../Funciones/eliminar/eliminar.php?id=<?=$resultado['ID']?>" class="btn btn-small btn-danger" ><i   class="fa-solid fa-trash"></i></a>
        <br>
        <a href="../Funciones/graficar/graficarporbase.php?id=<?=$resultado['ID']?>&nombre=<?=$resultado['Nombre_completo']?>&papel=<?=$resultado['Papel_KG']?>&carton=<?=$resultado['Carton_KG']?>&vidrio=<?=$resultado['Vidrio_KG']?>&pet=<?=$resultado['PET_KG']?>&pead=<?=$resultado['PEAD_KG']?>&pebd=<?=$resultado['PEBD_KG']?>&bopp=<?=$resultado['BOPP_KG']?>&aluminio=<?=$resultado['Aluminio_KG']?>&hojalata=<?=$resultado['Hojalata_KG']?>&baterias=<?=$resultado['Baterias_KG']?>&madera=<?=$resultado['Madera_KG']?>&electronicos=<?=$resultado['Electronicos_KG']?>&cartuchos=<?=$resultado['Cartuchos_toner_KG']?>&rebaba=<?=$resultado['Rebaba_hierro_KG']?>" class="btn btn-small btn-primary"><i class="fa-solid fa-arrow-trend-up"></i></a>
        <br>
</tr>
      </td> 
      <?php }
        ?>
</div>
</div>


</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>