<?php
include "conexion.php";
$id=$_GET["id"];
echo $id;
    $sql=$conexion->query("DELETE FROM ds WHERE ID='$id'");
 if ($sql==1)
    header("location:filtrofechas.php");
?>
<input type="text" name="id" value="<?=$_GET["id"]?>">