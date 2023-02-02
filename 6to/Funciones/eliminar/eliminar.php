<?php
include ("../../Base-de-datos/conexion.php");
$id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM ds WHERE ID='$id'");
header("location:/../6to/Base-de-datos/Basededatos.php");
?>
