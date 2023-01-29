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
   <style>
  body{
background: rgb(0,212,255);
background: -moz-linear-gradient(90deg, rgba(0,212,255,0) 0%, rgba(1,148,130,0) 0%, rgba(134,1,1,0.5046393557422969) 0%, rgba(0,60,222,0) 49%, rgba(1,144,122,1) 100%, rgba(1,132,98,0) 100%);
background: -webkit-linear-gradient(90deg, rgba(0,212,255,0) 0%, rgba(1,148,130,0) 0%, rgba(134,1,1,0.5046393557422969) 0%, rgba(0,60,222,0) 49%, rgba(1,144,122,1) 100%, rgba(1,132,98,0) 100%);
background: linear-gradient(90deg, rgba(0,212,255,0) 0%, rgba(1,148,130,0) 0%, rgba(134,1,1,0.5046393557422969) 0%, rgba(0,60,222,0) 49%, rgba(1,144,122,1) 100%, rgba(1,132,98,0) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00d4ff",endColorstr="#018462",GradientType=1);
      font-family: "century ghotic";
    }
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

    .input-field:focus {
        border: 2px solid dodgerblue;
    }
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

    .btn:hover {
        opacity: 1;
    }

    .mayor{
        margin:10%;
        border-radius:25px;
    background-color: #f2f2f2;
    padding: 20px;
       
    }

    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    box-shadow: 10px 10px 10px #BDBFD5;
  }

  input[type=text]:focus {
  background-color:   #cce6ff;
  } 

  input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    box-shadow: 10px 10px 10px #BDBFD5;
  }

  input[type=password]:focus {
  background-color:   #cce6ff;
  } 

 input[type=button], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    box-shadow: 10px 10px 10px #BDBFD5;
  }

  input[type=button]:focus {
  background-color:   #cce6ff;
  } 

  h2{
     font-family: "Verdana";
  }

   </style>
  </head>

<body>
 <div class="mayor">
    <form  style="max-width:500px;margin:auto" id="formulario" name="formulario" method="POST">
        <?php
                include("../Base-de-datos/conexion.php"); 
                 include("../ciberseguridad/sesiones/controladmin.php"); 
                ?>
  <CENTER><h2><b>Login de administrador</b></h2></CENTER>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Usuario" name="usuario">
  </div>
  
  <div class="input-container">
    <input class="input-field" type="password" placeholder="Clave" name="clave">
  </div>

        <input type="submit" class="btn" name="Continuar" value="Continuar">
        <br>        <br>
    <a href="../index.html" class="btn btn-danger">Regresar</a>
</form>
    </div>
  </h2>
</body>
</html>

