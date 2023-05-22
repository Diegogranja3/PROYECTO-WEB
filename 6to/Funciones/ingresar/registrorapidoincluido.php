<?php
  error_reporting(0);
  $campos = array("papel", "carton", "vidrio","pet","pead","elec","cton","lat","tapa","resp","rpbi"); // Agrega los nombres de los campos que deseas validar

foreach ($campos as $campo) {
    if ($_POST[$campo] < 0) {
        $_POST[$campo] = '0';
    }
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
      $rpbi=$_POST["rpbi"];
      $fecha=$_POST["fecha"];
      $semestre=$sem;
$sql=$conexion->query("INSERT INTO ds(Nombre_completo, Papel_KG, Carton_KG, Vidrio_KG, PET_KG, PEAD_KG, Electronicos_KG, Cartuchos_toner, Latas_KG, Taparroscas_KG, Residuos_peligrosos_KG, Residuos_biologicos, Fecha_entrega, Semestre) VALUES ('$nombre','$papel','$carton','$vidrio','$pet','$pead','$electronicos','$toner','$latas','$taparroscas','$residuos', '$rpbi','$fecha','$semestre')");
if($sql==1){
    echo '<div class="alert alert-success">REGISTRO EXITOSO!!!</div>';
}else{
        echo '<div class="alert alert-danger">EL REGISTRO NO FUE EXITOSO</div>';
    }

}
?>
