<?php
error_reporting(E_ALL);
ini_set('display_errors','Off');
$conexion=mysqli_connect('localhost','root','','sql');
///error_reporting(E_ALL);
//ini_set('display_errors','Off');
?>



<html lang="es">
	<head> 
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://kit.fontawesome.com/5529d915fb.js" crossorigin="anonymous"></script>
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Base de datos</title>
<link rel="icon" type="image/png" href="images/base.png"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

		<title>Filtro de fechas</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h3>Filtro de Fechas</h3>
			</div>
		</header>

<form class="form-inline"  method="POST"  name="formFechas" id="formFechas">
    <div class="col-xs-10 col-xs-offset-3">
        <div class="form-group">
        <a href="/../6to/Base-de-datos/Basededatos.php"  class="btn btn-danger">Salir</a>
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" class="form-control" name="fecha_inicio" required>
        </div>
        <div class="form-group">
            <label for="fecha_final">Fecha Final:</label>
            <input type="date" class="form-control" name="fecha_final" required>
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
    
        </div>
    </div>
</form>

<br><br><br>

<section id="tabla_resultado">

<?php
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final  = $_POST['fecha_final'];

$materialista = $conexion->query("SELECT * FROM ds WHERE fecha_entrega BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'");?>


<div class="card col-12 mt-5">
<div class="card-body">
<table border="1px" class="table table-striped">
  <thead class="bg-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Pap</th>
      <th scope="col">Car</th>
      <th scope="col">Vid</th>
      <th scope="col">PET</th>
      <th scope="col">PEAD</th>
      <th scope="col">PEBD</th>
      <th scope="col">BOPP</th>
      <th scope="col">Alum</th>
      <th scope="col">Hoj</th>
      <th scope="col">Bat</th>
      <th scope="col">Madera</th>
      <th scope="col">Elect</th>
      <th scope="col">Car. toner</th>
      <th scope="col">Reb. hierro</th>
      <th scope="col">Fecha</th>
      <th scope="col">Semestre</th>
      <th scope="col">Opciones</th>
  </tr>
  </thead>
  <tbody>
<tr> 
<?php while($material =$materialista->fetch_object()){?>
<td><?=$material->ID?></td>
			<td><?=$material->Nombre_completo?></td>
			<td><?=$material->Papel_KG?></td>
			<td><?=$material->Carton_KG?></td>
            <td><?=$material->Vidrio_KG?></td>
			<td><?=$material->PET_KG?></td>
            <td><?=$material->PEAD_KG?></td>
			<td><?=$material->PEBD_KG?></td>
            <td><?=$material->BOPP_KG?></td>
			<td><?=$material->Aluminio_KG?></td>
            <td><?=$material->Hojalata_KG?></td>
			<td><?=$material->Baterias_KG?></td>
            <td><?=$material->Madera_KG?></td>
            <td><?=$material->Electronicos_KG?></td>
            <td><?=$material->Cartucho_toner_KG?></td>
            <td><?=$material->Rebaba_hierro_KG?></td>
			<td><?=$material->Fecha_entrega?></td>
			<td><?=$material->Semestre?></td>
            <td>
            <br>
    <a href="../modificar/modificar2.0.1.php?id=<?=$material->ID?>"class="btn btn-small btn-warning"  ><i class="fa-solid fa-pen-to-square"></i></a>
        <br>
        <br>
        <a href="/../6to/Funciones/eliminar/eliminarfiltro.php?id=<?=$material->ID?>" class="btn btn-small btn-danger" ><i   class="fa-solid fa-trash"></i></a>
        <br>
        <br>
      </td> 
		</tr>
<?php 
}?>
</div>
</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>


<script type="text/javascript">
 
    $('formFechas').submit(function(e){

        e.preventDefault();

        var form = $($this);
        var url = form.attr('action');

        $.ajax(
        {
            type: "POST",
            url: 'filtro.php',
            data: form.serialize(),
            success: function(data)
            {
                $('#tabla_resultado').html('');
                $('#tabla_resultado').append(data); 
            }
        });
    }); 

</script>
