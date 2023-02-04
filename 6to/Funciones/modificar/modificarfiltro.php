<?php
if (!empty($_POST['btnmod'])){
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $papel=$_POST["papel"];
    $carton=$_POST["carton"];
    $vidrio=$_POST["vidrio"];
    $pet=$_POST["pet"];
    $pead=$_POST["pead"];
    $pebd=$_POST["pebd"];
    $bopp=$_POST["bopp"];
    $aluminio=$_POST["aluminio"];
    $hojalata=$_POST["hojalata"];
    $baterias=$_POST["baterias"];
    $madera=$_POST["madera"];
    $electronicos=$_POST["electronicos"];
    $fecha=$_POST["fecha"];
    $sql=$conexion->query("UPDATE ds SET Nombre_completo='$nombre', Papel_KG='$papel', Carton_KG='$carton', Vidrio_KG='$vidrio', PET_KG='$pet', PEAD_KG='$pead', PEBD_KG='$pebd', BOPP_KG='$bopp', Aluminio_KG='$aluminio', Hojalata_KG='$hojalata', Baterias_KG= '$baterias', Madera_KG='$madera', Fecha_entrega='$fecha' WHERE ID=$id");
 if ($sql==1){
    header("location:../filtros/filtrofechas.php");
}else{
 echo "<div class='alert alert-warning'>Error</div>";
 }
}else{
    echo "<div class='alert alert-danger'>No insertar valores negativos como -1.</div>";
}
?>