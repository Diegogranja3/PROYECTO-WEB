<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Title Page-->
    <title>Login de operador</title>
    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/5529d915fb.js" crossorigin="anonymous"></script>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
</head>
<style>
body{
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url("https://media.discordapp.net/attachments/1068260110415179890/1080292960228352141/932271.jpg?width=788&height=513");
}
.palao{
    font-size:18px;
    align-items:right;
    text-align:right;
}
    </style>
<body>
    <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                <h4 class="palao"><i class="fa-solid fa-calendar"></i> <script>date = new Date().toLocaleDateString();document.write(date);</script></h4>
                    <h2 class="title">Inicio de sesión </h2> 
                    <form method="POST" id="formulario" name="formulario">
                    <?php
                include("../Base-de-datos/conexion.php"); 
                include("../ciberseguridad/sesiones/controladoroperador.php");
                ?>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Usuario</label>
                                    <input placeholder="Ingrese su usuario" name="usuario" class="input--style-4" type="text">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Clave</label>
                                    <input placeholder="Ingrese su clave" name="clave" class="input--style-4" type="password" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit"name="Continuar" value="Continuar">Continuar</button>
                        <a href="../index.html" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
