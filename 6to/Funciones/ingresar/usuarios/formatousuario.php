<?php
            include '../../../Base-de-datos/conexion.php';
        include 'crearusuario.php';
        error_reporting(0);
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
	<form method="POST">
		<h2 style="font-family: 'Montserrat', sans-serif;">Crear usuarios</h2>
		<label for="username">Nombre completo:</label>
		<input type="text" id="username" name="username" required>
		<label for="username">Usuario (Numeros):</label>
		<input type="number" id="usu" name="usu" required>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password" required>
		
		<label for="role">Rol:</label>
		<select id="role" name="role">
			<option value="operator">Operador</option>
			<option value="admin">Administrador</option>
		</select>
		
		<input type="submit" name="btnusu" value="Crear">
        <div style="position: absolute;
    top: 475px;
    left: 720px;
    width: 570px;
    height: 300px;"><a href="../../../Base-de-datos/usuarios.php" class="btn btn-danger">Regresar</a></div>
	</form>
</body>
</html>

