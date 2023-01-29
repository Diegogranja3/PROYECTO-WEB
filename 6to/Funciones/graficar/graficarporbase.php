
<?php
$enlace=mysqli_connect('localhost','id19794482_dora','ch-TBe&#tKlmy]T4','id19794482_beta6');

if(!$enlace){
    echo"Error en la conexion con el servidor";
}
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$papel=$_GET['papel'];
$carton=$_GET['carton'];
$vidrio=$_GET['vidrio'];
$pet=$_GET['pet'];
$pead=$_GET['pead'];
$pebd=$_GET['pebd'];
$bopp=$_GET['bopp'];
$aluminio=$_GET['aluminio'];
$hojalata=$_GET['hojalata'];
$baterias=$_GET['baterias'];
$madera=$_GET['madera'];
$electronicos=$_GET['electronicos'];
$TOTALMATERIAL=($papel+$carton+$vidrio+$pet+$pead+$pebd+$bopp+$aluminio+$hojalata+$baterias+$madera+$electronicos);




  //Variables para graficos

//arboles
$papelARBOL=($papel/66);
$cartonARBOL=($carton);

//CO2
$petCO2=($pet*1.87);
$peadCO2=($pead*1.33);
$pebdCO2=($pebd*1.29);
$papelCO2=($papel*3.3);
$cartonCO2=($carton*1.5);
$vidrioCO2=($vidrio*0.12);
$boppCO2=($bopp*1.31);
$aluminioCO2=($aluminio*7);
$hojalataCO2=($hojalata*1.50);
$bateriasCO2=($baterias*0.01);
$maderaCO2=($madera*1.64);
$electronicosCO2=($electronicos*4.26);
$TOTALCO2=($petCO2+$peadCO2+$pebdCO2+$papelCO2+$cartonCO2+$vidrioCO2+$boppCO2+$aluminioCO2+$hojalataCO2+$bateriasCO2+$maderaCO2+$electronicosCO2);


//Electricidad

//agua 3.7
$peadAGUA=($pead*2);
$boppAGUA=($bopp*1.57);
$petAGUA=($pet*0);
$pebdAGUA=($pebd*0);
$papelAGUA=($papel*79);
$cartonAGUA=($carton*79);
$vidrioAGUA=($vidrio*0);
$aluminioAGUA=($aluminio*23);
$maderaAGUA=($madera*50);
$hojalataAGUA=($hojalata*0);
$bateriasAGUA=($baterias*31185);
$electronicosAGUA=($electronicos*48667);
$TOTALAGUA=($peadAGUA+$petAGUA+$boppAGUA+$pebdAGUA+$papelAGUA+$cartonAGUA+$vidrioAGUA+$aluminioAGUA+$maderaAGUA+$hojalataAGUA+$bateriasAGUA+$electronicosAGUA);





?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="layout/styles/estilosD.css" rel="stylesheet" type="text/css">
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
          ['PEBD', <?php echo($pebd)?>],
          ['BOPP', <?php echo($bopp)?>], 
          ['Aluminio', <?php echo($aluminio)?>], 
          ['Hojalata', <?php echo($hojalata)?>],
          ['Baterias', <?php echo($baterias)?>],
          ['Madera', <?php echo($madera)?>],
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
        ['papel', <?php echo $papelAGUA?>, 'color: gray'],
        ['Carton', <?php echo $cartonAGUA?>, 'color: gray'],
        ['PET', <?php echo $petAGUA?>, 'color: gray'],
        ['PEAD', <?php echo $peadAGUA?>, 'color: gray'],
        ['PEBD', <?php echo $pebdAGUA?>, 'color: gray'],
        ['BOPP', <?php echo $boppAGUA?>, 'color: gray'],
        ['Aluminio', <?php echo $aluminioAGUA?>, 'color: gray'],
        ['Hojalata', <?php echo $hojalata?>, 'color: #76A7FA'],
        ['Baterias', <?php echo $bateriasAGUA?>, 'color: #76A7FA'],
        ['Madera', <?php echo $maderaAGUA?>, 'opacity: 0.2'],
        ['Electronicos', <?php echo $electronicosAGUA?>, 'opacity: 0.2'],
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
          ["Papel",<?php echo($papelCO2) ?>],
          ["Carton", <?php echo($cartonCO2) ?>],
          ["Vidrio", <?php echo($vidrioCO2) ?>],
          ["PET", <?php echo($petCO2) ?>],
          ["PEAD", <?php echo($peadCO2) ?>],
          ["PEBD", <?php echo($pebdCO2) ?>],
          ["Aluminio", <?php echo($aluminioCO2) ?>],
          ["Hojalata", <?php echo($hojalataCO2) ?>],
          ['Baterias', <?php echo($bateriasCO2) ?>],
          ['Madera', <?php echo($maderaCO2) ?>],
          ['Electronicos', <?php echo($electronicosCO2) ?>],
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
              0: { side: 'top', label: 'Materiales (en kilos)'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top22'));
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
  <a href="Basededatos.php"  class="btn btn-danger">Volver</a>
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

<center><div id="top22" style="width:  900px; height: 500px;"></div><center><br>
<center><h2>AGUA</h2><center>
<br>
  <br>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>