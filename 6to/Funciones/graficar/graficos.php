<?php
session_start();
session_destroy();
$enlace=mysqli_connect('localhost','root','','sql');

if(!$enlace){
  echo"Error en la conexion con el servidor";
}
if($_POST['si']==1){
$sem="Enero-Junio";
}
elseif($_POST['si']==2){
$sem="Julio-Diciembre";
}
$nombre=$_POST['NON'];
$papel=$_POST['PAP'];
$carton=$_POST['CAR'];
$vidrio=$_POST['VID'];
$pet=$_POST['PET'];
$pead=$_POST['PEAD'];
$electronicos=$_POST['ELEC'];
$toner=$_POST['CTON'];
$latas=$_POST['LAT'];
$taparrosca=$_POST['TAPA'];
$residuos=$_POST['RESP'];
date_default_timezone_set('America/Mexico_City');
$fecha= date('y/m/d');
$semestre=$sem;
$TOTALMATERIAL=($papel+$carton+$vidrio+$pet+$pead+$electronicos+$toner+$latas+$taparrosca+$residuos);

$insertar="INSERT INTO ds(Nombre_completo, Papel_KG, Carton_KG, Vidrio_KG, PET_KG, PEAD_KG, Electronicos_KG, Cartuchos_toner, Latas_KG, Taparroscas_KG, Residuos_peligrosos_KG, Fecha_entrega, Semestre)VALUES('$nombre','$papel','$carton','$vidrio','$pet','$pead','$electronicos','$toner','$latas','$taparrosca','$residuos','$fecha','$semestre')";

  $ejecutarINSERTAR=mysqli_query($enlace,$insertar);

  if(!$ejecutarINSERTAR){
      echo"Error al insertar registros";
  }
  //Variables para graficos
//arboles
$papelARBOL=($papel*0.017);
$cartonARBOL=($carton*0.04);
$TOTALARBOLES=($papelARBOL+$cartonARBOL);

$petCO2=($pet*3.8);
$peadCO2=($pead*1.8);
$vidrioCO2=($vidrio*0.3);
$latasCO2=($latas*0.2);
$papelCO2=($papel*1.5);
$cartonCO2=($carton*0.75);
$taparroscasCO2=($taparrosca*0.2);
$electronicosCO2=($electronicos*1.8);
$residuosCO2=($residuos*3.8);
$TOTALCO2=($petCO2+$peadCO2+$vidrioCO2+$latasCO2+$papelCO2+$cartonCO2+$taparroscasCO2+$electronicosCO2+$residuosCO2);

//Electricidad
$papelElec=($papel*4);
$cartonElec=($carton*4.3);
$petElec=($pet*0.55);
$peadElec=($pead*0.55);
$taparroscasElec=($taparrosca*0.03);
$tonerElec=($toner*7.5);
$latasElec=($latas*0.33);
$electronicosElec=($electronicos*6.425);
$TOTALELEC=($papelElec+$cartonElec+$petElec+$peadElec+$taparroscasElec+$tonerElec+$latasElec+$electronicosElec);

//agua 3.7
$peadAGUA=($pead*26.5);
$petAGUA=($pet*26);
$papelAGUA=($papel*8);
$cartonAGUA=($carton*4.3);
$vidrioAGUA=($vidrio*0.15);
$latasAGUA=($latas*5);
$taparroscasAGUA=($taparrosca*2.5);
$TOTALAGUA=($peadAGUA+$petAGUA+$papelAGUA+$cartonAGUA+$vidrioAGUA+$latasAGUA+$taparroscasAGUA);

?>
<!DOCTYPE html>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Ld13xEjAAAAAHT11fl6fMk_dEnu3Pc7gKEJ6r8z"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Ld13xEjAAAAAHT11fl6fMk_dEnu3Pc7gKEJ6r8z', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="/../6to/layout/styles/estilosD.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Material', 'Kilogramos'],
          ['Papel', <?php echo($papel)?>],
          ['Carton', <?php echo($carton)?>],  
          ['Vidrio', <?php echo($vidrio)?>],
          ['PET', <?php echo($pet)?>],
          ['PEAD', <?php echo($pead)?>],
          ['Toner', <?php echo($toner)?>], 
          ['Latas', <?php echo($latas)?>],
          ['Residuos', <?php echo($residuos)?>], 
          ['Taparroscas', <?php echo($taparroscas)?>], 
          ['Electronicos', <?php echo($electronicos)?>]
        ]);


        var options = {
          title: 'MATERIAL EN BRUTO',
          legend: 'a',
          pieSliceText: 'a',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Dias', 'Dias', { role: 'style' } ],
        ['PAP', <?php echo $papelAGUA?>, 'color: gray'],
        ['CAR', <?php echo $cartonAGUA?>, 'color: gray'],
        ['VID', <?php echo $vidrioAGUA?>, 'color: gray'],
        ['PET', <?php echo $petAGUA?>, 'color: gray'],
        ['PEAD', <?php echo $peadAGUA?>, 'color: gray'],
        ['LAT', <?php echo $latasAGUA?>, 'color: gray'],
        ['TAPA', <?php echo $taparroscasAGUA?>, 'color: gray'],
        ['TOTAL', <?php echo $TOTALAGUA?>, 'opacity: 0.2']
        ]);
    

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Dias que puede vivir una persona con el agua reciclada",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Materiales', 'KG de CO2'],
          ["PAP", <?php echo($papelCO2) ?>],
          ["CAR", <?php echo($cartonCO2) ?>],
          ["VID", <?php echo($vidrioCO2) ?>],
          ["PET", <?php echo($petCO2) ?>],
          ["PEAD", <?php echo($peadCO2) ?>],
          ["LAT", <?php echo($latasCO2) ?>],
          ["TAPA", <?php echo($taparroscasCO2) ?>],
          ["RESP", <?php echo($residuosCO2) ?>],
          ["ELEC", <?php echo($electronicosCO2) ?>],
          ['TOTAL', <?php echo($TOTALCO2) ?>]
        ]);

        var options = {
          title: 'Cantidad de CO2 que se evitara producir',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Cantidad de CO2 que se evitara producir',
                   subtitle: 'por los materiales reciclados' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Material (en kilos)'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
   
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graficos</title>
  <link rel="icon" type="image/png" href="images/a.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/5529d915fb.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="divid">
 
  <h3 class="display-6">Graficos generados correctamente</h3>
  <a href="/../6to/index.html"  class="btn btn-danger">Volver</a>
    </div>

    <div class="divid1"> <div id="piechart" style="width:700px; height: 500px;"></div></div>

<div class="dividpay">
  <br><br>
<p id="pid">Cantidad total de material: <?php echo $TOTALMATERIAL?> KG</p>
<br><br>
<p id="pid">Cantidad total de emisiones de CO2 evitadas: <?php echo $TOTALCO2?> KG</p>
<br><br>
<p id="pid">Cantidad total de dias con agua: <?php echo $TOTALAGUA?> dias</p>
<br><br>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><h2>CO2</h2><center>
<br><br>

<center><div id="top_x_div" style="width:  900px; height: 500px;"></div><center><br>
<center><h2>AGUA</h2><center>
<br>
  <br>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
