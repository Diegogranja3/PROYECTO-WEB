<?php
///Se conecta a la base
include ("../../Base-de-datos/conexion.php");
///Recolecta un ID
$id=$_GET["id"];
///Imprime el ID
echo $id;
///Borra el registro que contenga ese ID
    $sql=$conexion->query("DELETE FROM ds WHERE ID='$id'");
///Si se borra entonces nos regresa a los filtros
 if ($sql==1)
    header("location:../filtros/filtrofechas.php");
?>
<input type="text" name="id" value="<?=$_GET["id"]?>">
