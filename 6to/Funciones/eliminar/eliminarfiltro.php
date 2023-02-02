<?php
include ("../../Base-de-datos/conexion.php");
$id=$_GET["id"];
echo $id;
    $sql=$conexion->query("DELETE FROM ds WHERE ID='$id'");
 if ($sql==1)
    header("location:../filtros/filtrofechas.php");
?>
<input type="text" name="id" value="<?=$_GET["id"]?>">