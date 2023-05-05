<?php
  error_reporting(0);
if(empty($_POST["papel"])){
    $_POST["papel"]='0';
}
if(empty($_POST["carton"])){
    $_POST["carton"]='0';
}
if(empty($_POST["vidrio"])){
    $_POST["vidrio"]='0';
}
if(empty($_POST["pet"])){
    $_POST["pet"]='0';
}
if(empty($_POST["pead"])){
    $_POST["pead"]='0';
}
if(empty($_POST["elec"])){
    $_POST["elec"]='0';
}
if(empty($_POST["cton"])){
    $_POST["cton"]='0';
}
if(empty($_POST["lat"])){
    $_POST["lat"]='0';
}
if(empty($_POST["tapa"])){
    $_POST["tapa"]='0';
}
if(empty($_POST["resp"])){
    $_POST["resp"]='0';
}
if($_POST['si']==1){
    $sem="Enero-Junio";
    }
    elseif($_POST['si']==2){
    $sem="Julio-Diciembre";
    }
if (!empty($_POST["btnregistrar"])){     
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
$sql=$conexion->query("INSERT INTO ds(Nombre_completo, Papel_KG, Carton_KG, Vidrio_KG, PET_KG, PEAD_KG, Electronicos_KG, Cartuchos_toner, Latas_KG, Taparroscas_KG, Residuos_peligrosos_KG, Fecha_entrega, Semestre) VALUES ('$nombre','$papel','$carton','$vidrio','$pet','$pead','$electronicos','$toner','$latas','$taparroscas','$residuos','$fecha','$semestre')");
if($sql==1){
    echo '<div class="alert alert-success">REGISTRO EXITOSO!!!</div>';
}else{
        echo '<div class="alert alert-danger">EL REGISTRO NO FUE EXITOSO</div>';
    }

}else{
 echo '<div class="alert alert-danger">No agregar valores negativos como -1</div>';
}
?>
