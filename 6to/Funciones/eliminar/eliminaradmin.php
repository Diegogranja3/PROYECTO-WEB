<?php
///Conexion con la base de datos
include ("../../Base-de-datos/conexion.php");
///Recolecta el ID
$id=$_GET["id"];
///Borra el registro que contenga ese ID
    $sql=$conexion->query("DELETE FROM loginadmin WHERE ID_admin='$id'");
///Regresa a la base de datos
header("location:/../6to/Base-de-datos/admins.php");
?>
