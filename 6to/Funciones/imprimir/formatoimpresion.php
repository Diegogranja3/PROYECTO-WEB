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
<link href="C:\xampp\htdocs\xanpon\estilo.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" type="image/png" href="images/base.png"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
    .centrotest{
        margin: 0 auto;
        width:12%;
        text-align:center;
    }

    </style>
<body>
  <div class="centroform"><center><h1 style="color: blanchedalmond;">Formato de impresion</h1></center>
  <form class="formulario" action="imprimir.php" class="formulario" id="formulario" name="formulario" method="POST">
  <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                        <div class="row row-space">
                        <div class="m-4">
            <center><h4>Selecciona uno o varios meses</h4></center>
            <div class="btn-group">
        <input type="checkbox" class="btn-check" name="Ene" id="Ene" autocomplete="off">
        <label class="btn btn-outline-primary" for="Ene">Enero</label>
                <input type="checkbox" class="btn-check" name="Feb" id="Feb" autocomplete="off">
        <label class="btn btn-outline-primary" for="Feb">Febrero</label>
                <input type="checkbox" class="btn-check" name="Mar" id="Mar" autocomplete="off">
        <label class="btn btn-outline-primary" for="Mar">Marzo</label>
        <input type="checkbox" class="btn-check" name="Abr" id="Abr" autocomplete="off">
        <label class="btn btn-outline-primary" for="Abr">Abril</label>
        <br>
    </div><br><br>
    <div class="btn-group">
        <input type="checkbox" class="btn-check" name="May" id="May" autocomplete="off">
        <label class="btn btn-outline-primary" for="May">Mayo</label>
                <input type="checkbox" class="btn-check" name="Jun" id="Jun" autocomplete="off">
        <label class="btn btn-outline-primary" for="Jun">Junio</label>
                <input type="checkbox" class="btn-check" name="Jul" id="Jul" autocomplete="off">
        <label class="btn btn-outline-primary" for="Jul">Julio</label>
        <input type="checkbox" class="btn-check" name="Ago" id="Ago" autocomplete="off">
        <label class="btn btn-outline-primary" for="Ago">Agosto</label>
        <br></div>
        <br><br>
    <div class="btn-group">
        <input type="checkbox" class="btn-check" name="Sep" id="Sep" autocomplete="off">
        <label class="btn btn-outline-primary" for="Sep">Septiembre</label>
                <input type="checkbox" class="btn-check" name="Oct" id="Oct" autocomplete="off">
        <label class="btn btn-outline-primary" for="Oct">Octubre</label>
                <input type="checkbox" class="btn-check" name="Nov" id="Nov" autocomplete="off">
        <label class="btn btn-outline-primary" for="Nov">Noviembre</label>
        <input type="checkbox" class="btn-check" name="Dic" id="Dic" autocomplete="off">
        <label class="btn btn-outline-primary" for="Dic">Diciembre</label>
        <br>
    </div><br><br>
            <h4>Selecciona un año</h4>
            <div class="centrotest">
            <select style="text-align:center" class="form-select" aria-label="Default select example" name="anio" id="anio">
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
              <option>2026</option>
              <option>2027</option>
              <option>2028</option>
              <option>2029</option>
</select></div>
<br>
<input class="btn btn-primary" type="submit" class="btn" name="Continuar" value="Continuar">
            <a href="../../Base-de-datos/Basededatos.php" class="btn btn-danger">Regresar</a>
            </div>
            </div>
    </form>
</body>
</html>
