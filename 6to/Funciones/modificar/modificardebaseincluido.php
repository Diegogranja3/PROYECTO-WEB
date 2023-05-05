<?php
error_reporting(0);
if($_POST['si']==1){
    $sem="Enero-Junio";
    }
    elseif($_POST['si']==2){
    $sem="Julio-Diciembre";
    }
if (!empty($_POST['btnmod'])){
    $nombre=$_POST["nombre"];
    $papel=$_POST["papel"];
    $carton=$_POST["carton"];
    $vidrio=$_POST["vidrio"];
    $pet=$_POST["pet"];
    $pead=$_POST["pead"];
    $electronicos=$_POST["elec"];
    $toner=$_POST["cton"];
    $latas=$_POST["lat"];
    $taparroscas=$_POST["tapa"];
    $residuos=$_POST["resp"];
    $fecha=$_POST["fecha"];
    $semestre=$sem;
    $sql=$conexion->query("UPDATE ds SET Nombre_completo='$nombre', Papel_KG='$papel', Carton_KG='$carton', Vidrio_KG='$vidrio', PET_KG='$pet', PEAD_KG='$pead', Electronicos_KG='$electronicos', Cartuchos_toner='$toner', Latas_KG='$latas', Taparroscas_KG='$taparroscas', Residuos_peligrosos_KG= '$residuos', Fecha_entrega='$fecha', Semestre='$semestre' WHERE ID=$id");
 if ($sql==1){
      echo "<div class='alert alert-success'>Registro modificado correctamente!</div>";
     echo "<center><a href='../../Base-de-datos/Basededatos.php' class='btn btn-danger'>Regresar a la base</a></center>";
     header("../../Base-de-datos/Basededatos.php");
}else{
 echo "<div class='alert alert-warning'>Error</div>";
 }
}else{
    echo "<div class='alert alert-danger'>No insertar valores negativos como -1.</div>";
}
?>
