<?php
  error_reporting(0);
if (!empty($_POST["btnusu"])){     
    $nombre=$_POST["username"];
    $precontra=$_POST["password"];
    $usuario=$_POST["usu"];
    $rol=$_POST["role"];
if($rol=="operator"){
    $contra=password_hash("$precontra", PASSWORD_DEFAULT);
    $sql=$conexion->query("INSERT INTO loginoperador(Nombre_operador,Usuario_operador,Clave_operador) VALUES ('$nombre','$usuario','$contra')");
}else{
    $contra=password_hash("$precontra", PASSWORD_DEFAULT);
    $sql=$conexion->query("INSERT INTO loginadmin(Nombre_admin,Usuario_admin,Clave_admin) VALUES ('$nombre','$usuario','$contra')");
}
}
?>
