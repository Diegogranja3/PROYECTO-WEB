<?php
header("location:Basededatos.php");
include "conexion.php";
$id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM ds WHERE ID='$id'");
?>
