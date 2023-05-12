<?php
// Aquí va el código PHP para procesar los datos y generar las variables
// ...

// Finalmente, imprimir los valores en formato JSON
$data = [
    ['Material', 'Kilogramos'],
    ['Papel', $papel],
    ['Carton', $carton],
    ['Vidrio', $vidrio],
    ['PET', $pet],
    ['PEAD', $pead],
    ['Toner', $toner],
    ['Latas', $latas],
    ['Residuos', $residuos],
    ['Taparroscas', $taparroscas],
    ['Electronicos', $electronicos]
];

header('Content-Type: application/json');
echo json_encode($data);
?>
