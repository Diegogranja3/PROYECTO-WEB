<?php
            include '../../../Base-de-datos/conexion.php';
    
$conexion=mysqli_connect('sql10.freemysqlhosting.net','sql10618284','1El3h2gCt6','sql10618284');
$id=$_GET["id"];
$comprobacion=$_GET["comprobacion"];

if($comprobacion==1){
    $sql=$conexion->query("SELECT*FROM loginadmin WHERE ID_admin=$id"); 
}else{
    $sql=$conexion->query("SELECT*FROM loginoperador WHERE ID_operador=$id");
}

switch($comprobacion){
    case 1:
        $nombre="Nombre_admin";
        $usuario="Usuario_admin";
        $clavencrip="Clave_admin";
        $ext="administrador";

        $tercero =1;
setcookie('tercero', $tercero, time() + (86400 * 30), "/");
        break;
    case 0:    
        $ext="operador";
        $nombre="Nombre_operador";
        $usuario="Usuario_operador";
        $clavencrip="Clave_operador";
        $tercero =3;
        setcookie('tercero', $tercero, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Login Form</title>
	<style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
   body {
			background-image: url(../../../images/loginfondowo.png);
			background-size: cover;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		
		form {
			background-color: #fff;
			width: 300px;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
		}
		
		input[type="text"],
		input[type="password"],
		input[type="number"],
		select {
			display: block;
			width: 100%;
			margin-bottom: 10px;
			padding: 5px;
			font-size: 16px;
			border-radius: 3px;
			border: 1px solid #ccc;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			font-size: 16px;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		
		h2 {
			text-align: center;
			margin-top: 0;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<form method="POST" action="modusu.php">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <?php
            while($datos=$sql->fetch_object()){?>
		<h2 style="font-family: 'Montserrat', sans-serif;">Modificar usuarios</h2>
        
        <label for="username">Este usuario es...<?php echo $ext?></label>
        <br>
        <br>
		<label for="username">Nombre completo:</label>
		<input type="text" id="username" name="username" required pattern="[A-Za-z]+" value="<?=$datos->$nombre?>" required>
		<label for="username">Usuario (Numeros):</label>
		<input type="number" id="usu" name="usu" value="<?=$datos->$usuario?>" required>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password" placeholder="No podemos revelar contraseñas" required>

        <?php }
            ?>
		<center><input type="submit" name="btnusu" value="Modear">
        <a href="../../../Base-de-datos/usuarios.php" style="font-size:17px;" class="btn btn-danger">Regresar</a></center>
	</form>
</body>
</html>
