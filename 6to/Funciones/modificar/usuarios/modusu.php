<?php
$conexion=mysqli_connect('localhost','root','','sql');
$tercero = $_COOKIE['tercero'];
    if($tercero==1){
        $id=$_POST["id"];
        $nombre=$_POST["username"];
        $usuario=$_POST["usu"];
        $lave=$_POST["password"];
        $clave=password_hash("$lave", PASSWORD_DEFAULT);
        $sql=$conexion->query("UPDATE loginadmin SET Nombre_admin='$nombre', Usuario_admin='$usuario', Clave_admin='$clave' WHERE ID_admin=$id");
        header('Location: ../../../Base-de-datos/admins.php');
    }else{

        $id=$_POST["id"];
        $nombre=$_POST["username"];
        $usuario=$_POST["usu"];
        $lave=$_POST["password"];
        $clave=password_hash("$lave", PASSWORD_DEFAULT);
        $sql=$conexion->query("UPDATE loginoperador SET Nombre_operador='$nombre', Usuario_operador='$usuario', Clave_operador='$clave' WHERE ID_operador=$id");
        header("Location: ../../../Base-de-datos/usuarios.php");


    }

?>
