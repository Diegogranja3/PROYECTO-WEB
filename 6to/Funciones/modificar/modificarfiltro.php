<?php
if (!empty($_POST['btnmod'])){
    $campos = array("papel", "carton", "vidrio","pet","pead","elec","cton","lat","tapa","resp"); // Agrega los nombres de los campos que deseas validar

foreach ($campos as $campo) {
    if ($_POST[$campo] < 0) {
        $_POST[$campo] = '0';
    }
}
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $papel=$_POST["papel"];
    $carton=$_POST["carton"];
    $vidrio=$_POST["vidrio"];
    $pet=$_POST["pet"];
    $pead=$_POST["pead"];
    $electronicos=$_POST["elec"];
    $toner=$_POST["cton"];
    $latas=$_POST["lat"];
    $tapas=$_POST["tapa"];
    $residuos=$_POST["resp"];
    $rpbi=$_POST["rpbi"];
    $fecha=$_POST["fecha"];
    $sql=$conexion->query("UPDATE ds SET Nombre_completo='$nombre', Papel_KG='$papel', Carton_KG='$carton', Vidrio_KG='$vidrio', PET_KG='$pet', PEAD_KG='$pead', Electronicos_KG='$electronicos', Cartuchos_Toner='$toner', Latas_KG='$latas', Taparroscas_KG='$tapas', Residuos_peligrosos_KG='$residuos', Residuos_biologicos='$rpbi', Fecha_entrega='$fecha' WHERE ID=$id");
 if ($sql==1){
    header("location:../filtros/filtrofechas.php");
}else{
 echo "<div class='alert alert-warning'>Error</div>";
 }
}else{
    echo "<div class='alert alert-danger'>No insertar valores negativos como -1.</div>";
}
?>
