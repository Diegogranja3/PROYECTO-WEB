<?php
require('FPDF/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$cellWidth = 20;
$cellHeight = 10;
$numRows = 1;
$numCols = 14;
$data = array(
    array("Nombre", "Edad", "Sexo","","","","","","","","","","",""),
);
$pdf->SetFont('Arial', '', 12);
for ($i = 0; $i < $numRows; $i++) {
    for ($j = 0; $j < $numCols; $j++) {
        $pdf->Cell($cellWidth, $cellHeight, $data[$i][$j], 1);
    }
    $pdf->Ln();
}
$pdf->Output();
?>