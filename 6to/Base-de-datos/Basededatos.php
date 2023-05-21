<?php
///Verificacion de inicio de sesion
error_reporting(0);
if(empty($_COOKIE['TestCookie1'])){
  echo '<p>La sesion se cerro, la página se redirigirá al índice en:</p>
  <div id="contador">5</div>
  <script>
    var segundos = 5;
    setInterval(function() {
      segundos--;
      document.getElementById("contador").innerHTML = segundos;
    }, 1000);
  </script>';
  
    header("Refresh: 5; url=../index.html");
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--Carga de fuentes e iconos necesarios!-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Base de datos</title>
<link rel="icon" type="image/png" href="images/base.png"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
 body{
  background-repeat: no-repeat;
    background-size: cover;
  background-image:url("../images/basesfondowo.jpg");
}
table {
  width: 100%;
  table-layout: auto;
  font-size: 0.9em;
  color:blue;
}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
  color:blue;
}

th,
td {
  text-align: center;
  color:blue;
}
thead{
  text-align:center;
  color:blue;
}
  </style>
<body>
<script src="https://kit.fontawesome.com/5529d915fb.js" crossorigin="anonymous"></script>
<?php 
 ///Conexion a la base de datos
$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "sql";
$conexion=mysqli_connect('localhost','root','','sql');
///Comprobacion de conexion
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}
if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
?>
<!--Creacion de la interfaz!-->
<div>
<div class="container mt-5">
<div class="col-12">
<form method="POST" action="Basededatos.php">
<div class="mb-3">
<center><h3 class="display-5">Base de datos</h3><a href="usuarios.php" style="text-decoration: none; color: black"><p>Ir a tabla de usuarios <i class="fa-solid fa-circle-arrow-right fa-fade fa-xl" style="color: #1100ff;"></i></a></p></center>
<br>
</div>
</div>
<div>
<!--Otras funciones del programa!-->
<center><a href="../Funciones/filtros/filtrofechas.php" class="btn btn-primary">Filtro por fecha</a>
<a href="../index.html" class="btn btn-danger">Salir</a>
<a href="../Funciones/ingresar/RegistroRapido.php" class="btn btn-success">Registro rapido</a>
<a href="../Funciones/graficar/graficasemestre.php" class="btn btn-primary">Graficar fechas grandes</a>
<a href="../Funciones/imprimir/formatoimpresion.php" class="btn btn-dark">Imprimir</a>
</center>
</div>
<br>
</div>
<!--Recolectar fecha actual!-->
<center><div>
<script>

var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

var f=new Date();                                    

document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
</center>
</form>
<br>
</form>
<!--Sentencia que usa el buscador para la base!-->
<?php $busqueda=mysqli_query($conexion,"SELECT * FROM ds WHERE Nombre_completo LIKE LOWER('%".$_POST["buscar"]."%')"); echo "<br>";
$numero = mysqli_num_rows($busqueda); ?>
</div>
<center>
<h5 class="card-tittle">Resultado (<?php echo $numero; ?>)</h5>
</div>

<table id="example" class="display" style="width:100%" text-align="center">
    <!--Creacion de la tabla donde se muestran los datos!-->
    <div>
    <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Papel</th>
      <th>Carton</th>
      <th>Vidrio</th>
      <th>PET</th>
      <th>PEAD</th>
      <th>Electronicos</th>
      <th>Toners</th>
      <th>Latas</th>
      <th>Taparroscas</th>
      <th>Residuos</th>
      <th>Fecha</th>
      <th>Semestre</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
   <tr>
</div>
       <!--Datos provenientes de la base!-->
       <?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?> <!--Crea una columna en la tabla por cada registro que haya!-->
   <td><?php echo $resultado["ID"]; ?></td>
      <td><?php echo $resultado["Nombre_completo"]; ?></td>
      <td><?php echo $resultado["Papel_KG"]; ?></td>
      <td><?php echo $resultado["Carton_KG"]; ?></td>
      <td><?php echo $resultado["Vidrio_KG"]; ?></td>
      <td><?php echo $resultado["PET_KG"]; ?></td>
      <td><?php echo $resultado["PEAD_KG"]; ?></td>
      <td><?php echo $resultado["Electronicos_KG"]; ?></td>
      <td><?php echo $resultado["Cartuchos_toner"]; ?></td>
      <td><?php echo $resultado["Latas_KG"]; ?></td>
      <td><?php echo $resultado["Taparroscas_KG"]; ?></td>
      <td><?php echo $resultado["Residuos_peligrosos_KG"]; ?></td>
      <td><?php echo $resultado["Fecha_entrega"]?></td>
      <td><?php echo $resultado["Semestre"]; ?></td>
      <td>
          <!--Funciones extra para cada registro en la tabla!-->
      <a href="../Funciones/modificar/modificarporbase.php?id=<?=$resultado['ID']?>"class="btn btn-small btn-warning"  ><i class="fa-solid fa-pen-to-square"></i></a>
        <br>
        <a href="../Funciones/eliminar/eliminar.php?id=<?=$resultado['ID']?>" class="btn btn-small btn-danger" ><i   class="fa-solid fa-trash"></i></a>
        <br>
        <a href="../Funciones/graficar/graficarporbase.php?id=<?=$resultado['ID']?>&nombre=<?=$resultado['Nombre_completo']?>&papel=<?=$resultado['Papel_KG']?>&carton=<?=$resultado['Carton_KG']?>&vidrio=<?=$resultado['Vidrio_KG']?>&pet=<?=$resultado['PET_KG']?>&pead=<?=$resultado['PEAD_KG']?>&electronicos=<?=$resultado['Electronicos_KG']?>&cartuchos=<?=$resultado['Cartuchos_toner']?>&latas=<?=$resultado['Latas_KG']?>&taparroscas=<?=$resultado['Taparroscas_KG']?>&residuos=<?=$resultado['Residuos_peligrosos_KG']?>" class="btn btn-small btn-primary"><i class="fa-solid fa-arrow-trend-up"></i></a>
        <br>
</tr>
      </td> 
      <?php }
        ?>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
     <script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</div>
</div>
</center>


</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>
