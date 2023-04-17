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
  <center><h1>Formato de impresion</h1></center>
    <form class="col-4 p-3 m-auto" action="imprimir.php" class="formulario" id="formulario" name="formulario" method="POST">
    <div class="mb-3">
            </div>
            <br>
            <h4>Selecciona uno o varios meses</h4>
            <input type="checkbox" id="Ene" name="Ene">
            <label for="Ene">Enero</label><br>
            <input type="checkbox" id="Feb" name="Feb">
            <label for="Feb">Febrero</label><br>
            <input type="checkbox" id="Mar" name="Mar">
            <label for="Mar">Marzo</label><br>
            <input type="checkbox" id="Abr" name="Abr">
            <label for="Abr">Abril</label><br>
            <input type="checkbox" id="May" name="May">
            <label for="May">Mayo</label><br>
            <input type="checkbox" id="Jun" name="Jun">
            <label for="Jun">Junio</label><br>
            <input type="checkbox" id="Jul" name="Jul">
            <label for="Jul">Julio</label><br>
            <input type="checkbox" id="Ago" name="Ago">
            <label for="Ago">Agosto</label><br>
            <input type="checkbox" id="Sep" name="Sep">
            <label for="Sep">Septiembre</label><br>
            <input type="checkbox" id="Oct" name="Oct">
            <label for="Oct">Octubre</label><br>
            <input type="checkbox" id="Nov" name="Nov">
            <label for="Nov">Noviembre</label><br>
            <input type="checkbox" id="Dic" name="Dic">
            <label for="Dic">Diciembre</label><br>
<br>
            <br>
            <h4>Selecciona un año</h4>
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
            </div>

    </form>
</body>
</html>
