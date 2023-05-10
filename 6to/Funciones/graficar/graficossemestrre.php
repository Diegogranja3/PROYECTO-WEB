<?php
$enlace=mysqli_connect('localhost','root','','sql');

if(!$enlace){
    echo"Error en la conexion con el servidor";
}
$papel=$_GET['papel'];
$carton=$_GET['carton'];
$vidrio=$_GET['vidrio'];
$pet=$_GET['pet'];
$pead=$_GET['pead'];
$toner=$_GET['toner'];
$latas=$_GET['latas'];
$taparroscas=$_GET['taparroscas'];
$residuos=$_GET['residuos'];
$electronicos=$_GET['electronicos'];
$TOTALMATERIAL=($papel+$carton+$vidrio+$pet+$pead+$electronicos+$latas+$taparroscas+$residuos+$toner);
$numero_aleatorio = rand(1, 5);
$mensaje;
switch ($numero_aleatorio) {
  case 1:
    $mensaje="El CO2 es que es un gas esencial para la vida en la Tierra, pero en altas concentraciones puede ser peligroso para la salud humana y el medio ambiente.";
    break;
  case 2:
    $mensaje="El CO2 tiene un impacto directo en el sabor de las bebidas carbonatadas";
    break;
  case 3:
   $mensaje="La concentración de CO2 en la atmósfera ha aumentado significativamente desde la Revolución Industrial";
    break;
  case 4:
    $mensaje="El CO2 es que es un gas inodoro, incoloro e insípido, lo que significa que no tiene sabor, color ni olor perceptible para los humanos";
    break;
  case 5:
    $mensaje="La presencia de CO2 en la atmósfera es necesaria para mantener una temperatura habitable en la Tierra";
  break;
}



  //Variables para graficos

//arboles
$papelARBOL=($papel*0.017);
$cartonARBOL=($carton*0.04);
$TOTALARBOLES=($papelARBOL+$cartonARBOL);

//CO2
$petCO2=($pet*3.8);
$peadCO2=($pead*1.8);
$vidrioCO2=($vidrio*0.3);
$latasCO2=($latas*0.2);
$papelCO2=($papel*1.5);
$cartonCO2=($carton*0.75);
$taparroscasCO2=($taparroscas*0.2);
$electronicosCO2=($electronicos*1.8);
$residuosCO2=($residuos*3.8);
$TOTALCO2=($petCO2+$peadCO2+$vidrioCO2+$latasCO2+$papelCO2+$cartonCO2+$taparroscasCO2+$electronicosCO2+$residuosCO2);

//Electricidad
$papelElec=($papel*4);
$cartonElec=($carton*4.3);
$petElec=($pet*0.55);
$peadElec=($pead*0.55);
$taparroscasElec=($taparroscas*0.03);
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
$taparroscasAGUA=($taparroscas*2.5);
$TOTALAGUA=($peadAGUA+$petAGUA+$papelAGUA+$cartonAGUA+$vidrioAGUA+$latasAGUA+$taparroscasAGUA);





?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="graficos eco">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="..\..\css\estilos.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<title>Graficar por semestre</title>
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
          backgroundColor: 'transparent',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
          legend: {
      textStyle: {
        color: 'white'
      }
    },
    pieSliceTextStyle: {
      color: 'white'
    },
    titleTextStyle: {
      color: 'white'
    }
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafico'));
        chart.draw(data, options);
      }
    </script>
    <body>
    <nav class="menu">
    <h1 id="titulo">Graficos generados correctamente</h1>
    <center><a href="graficasemestre.php"  class="btn">Volver</a></center>
</nav>
<div id="grafico" style="width:700px; height: 500px;"></div>
<div class="div-dos">
  <div class="contenido">
    Cantidad total de material: <?php echo $TOTALMATERIAL?> KG
    <br><br>
    Cantidad total de emisiones de CO2 evitadas: <?php echo $TOTALCO2?> KG
    <br><br>
    Cantidad total de dias con agua: <?php echo $TOTALAGUA?> dias
    <br><br>
    Cantidad total de árboles que se evitan talar: <?php echo $TOTALARBOLES?>
  </div>
</div>
<div class="chart-container">
<canvas id="myChart"></canvas>
  </div>
  <div class="div-dospt2">
<h2 class="dato">Sabias que...<h2>
  <br>
  <p class="mensaje"><?php echo $mensaje; ?></p>
  </div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <h3 id="titulo">Cada vez que graficas piensas en el mundo</h3>
  <div id="chart_div"></div>
  <div class="overlay"></div>
</div>
<div class="container">
    <div class="cube">
    </div>
  </div>
  <script>
    var ctx1 = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Papel', 'Carton', 'Vidrio', 'C.Toner', 'Taparroscas', 'Latas','Elect.','Res.P','PET','PEAD'],
        datasets: [{
            label: 'Kilos de CO2',
            data: [<?php echo $papelCO2?>,<?php echo $cartonCO2?>, <?php echo $vidrioCO2?>, 0,<?php echo $taparroscasCO2?>,<?php echo $latasCO2?>, <?php echo $electronicosCO2?>, <?php echo $residuosCO2?>, <?php echo $petCO2?>, <?php echo $peadCO2?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
myChart.update();

</script>
<script>
   google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Material', 'Litros',],
        ['Papel', <?php echo $papelAGUA?>],
        ['Carton', <?php echo $cartonAGUA?>],
        ['Vidrio', <?php echo $vidrioAGUA?>],
        ['PET', <?php echo $petAGUA?>],
        ['PEAD', <?php echo $peadAGUA?>],
        ['Latas', <?php echo $latasAGUA?>],
        ['Taparroscas', <?php echo $taparroscasAGUA?>],
        
      ]);

      var options = {
        backgroundColor: 'transparent',
        title: 'Agua en Litros',
        titleTextStyle: { color: '#fff' },
        chartArea: {width: '50%'},
        hAxis: {
          minValue: 0,
           textStyle: { color: '#fff' }
        },
        vAxis: {
          textStyle: { color: '#fff' }
        },       legend: {
      textStyle: {
        color: 'white'
      }
    },
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
  <div class="chart-container">
  <canvas id="lineas"></canvas>
  </div>
  <div class="lineasgrafi">
  <script>
    
    var ctx1 = document.getElementById('lineas').getContext('2d');
var myChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Papel', 'Carton', 'C.Toner', 'Taparroscas', 'Latas','Elect.','PET','PEAD'],
        datasets: [{
            label: 'Electricidad ahorrada',
            data: [<?php echo $papelElec?>,<?php echo $cartonElec?>, <?php echo $tonerElec?>, 0,<?php echo $taparroscasElec?>,<?php echo $latasElec?>, <?php echo $electronicosElec?>, <?php echo $petElec?>, <?php echo $peadElec?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
myChart.update();

</script>
</div>
</body>
</html>
