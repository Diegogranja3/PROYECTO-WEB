<?php
error_reporting(0);
$anio=$_POST['anio'];
$conexion=mysqli_connect('localhost','root','','sql');
if (isset($_POST['Ene'])) {
$sqlEnepapel=$conexion->query("SELECT sum(Papel_KG) as Papel_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31' ");
$sqlEnecarton=$conexion->query("SELECT sum(Carton_KG) as Carton_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEneVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEnePET=$conexion->query("SELECT sum(PET_KG) as PET_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEnePEAD=$conexion->query("SELECT sum(PEAD_KG) as PEAD_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEneElectronicos=$conexion->query("SELECT sum(Electronicos_KG) as Electronicos_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEneCartuchosT=$conexion->query("SELECT sum(Cartuchos_toner_KG) as CartuchosT_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEneLatas=$conexion->query("SELECT sum(Latas) as Latas_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEneTaparroscas=$conexion->query("SELECT sum(Taparroscas) as Taparroscas_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");
$sqlEneResiduosP=$conexion->query("SELECT sum(Residuos_peligrosos) as ResiduosP_enero from ds where Fecha_entrega BETWEEN '{$anio}-01-01' and '{$anio}-01-31'");

$resultadopapelEne = mysqli_fetch_assoc($sqlEnepapel);
$resultadocartonEne = mysqli_fetch_assoc($sqlEnecarton);
$resultadovidrioEne = mysqli_fetch_assoc($sqlEneVidrio);
$resultadopetEne = mysqli_fetch_assoc($sqlEnePET);
$resultadopeadEne = mysqli_fetch_assoc($sqlEnePEAD);
$resultadoelectroEne = mysqli_fetch_assoc($sqlEneElectronicos);
$resultadocartuchostEne = mysqli_fetch_assoc($sqlEneCartuchosT);
$resultadolatasEne = mysqli_fetch_assoc($sqlEneLatas);
$resultadotaparroscasEne = mysqli_fetch_assoc($sqlEneTaparroscas);
$resultadoresiduospEne = mysqli_fetch_assoc($sqlEneResiduosP);
  }
   if (isset($_POST['Feb'])) {
    $sqlFebpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29' ");
    $sqlFebcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebPET=$conexion->query("SELECT sum(PET_KG) as PET_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebPEAD=$conexion->query("SELECT sum(PEAD_KG) as PEAD_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebElectronicos=$conexion->query("SELECT sum(Electronicos_KG) as Electronicos_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebCartuchosT=$conexion->query("SELECT sum(Cartuchos_toner_KG) as CartuchosT_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebLatas=$conexion->query("SELECT sum(Latas) as Latas_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebTaparroscas=$conexion->query("SELECT sum(Taparroscas) as Taparroscas_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    $sqlFebResiduosP=$conexion->query("SELECT sum(Residuos_peligrosos) as ResiduosP_febrero from ds where Fecha_entrega BETWEEN '{$anio}-02-01' and '{$anio}-02-29'");
    
    $resultadopapelFeb = mysqli_fetch_assoc($sqlFebpapel);
    $resultadocartonFeb = mysqli_fetch_assoc($sqlFebcarton);
    $resultadovidrioFeb = mysqli_fetch_assoc($sqlFebVidrio);
    $resultadopetFeb = mysqli_fetch_assoc($sqlFebPET);
    $resultadopeadFeb = mysqli_fetch_assoc($sqlFebPEAD);
    $resultadoelectroFeb = mysqli_fetch_assoc($sqlFebElectronicos);
    $resultadocartuchostFeb = mysqli_fetch_assoc($sqlFebCartuchosT);
    $resultadolatasFeb = mysqli_fetch_assoc($sqlFebLatas);
    $resultadotaparroscasFeb = mysqli_fetch_assoc($sqlFebTaparroscas);
    $resultadoresiduospFeb = mysqli_fetch_assoc($sqlFebResiduosP);
      }
      if (isset($_POST['Mar'])) {
        $sqlMarpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31' ");
        $sqlMarcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarPET=$conexion->query("SELECT sum(PET_KG) as PET_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarPEAD=$conexion->query("SELECT sum(PEAD_KG) as PEAD_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarElectronicos=$conexion->query("SELECT sum(Electronicos_KG) as Electronicos_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarCartuchosT=$conexion->query("SELECT sum(Cartuchos_toner_KG) as CartuchosT_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarLatas=$conexion->query("SELECT sum(Latas) as Latas_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarTaparroscas=$conexion->query("SELECT sum(Taparroscas) as Taparroscas_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        $sqlMarResiduosP=$conexion->query("SELECT sum(Residuos_peligrosos) as ResiduosP_marzo from ds where Fecha_entrega BETWEEN '{$anio}-03-01' and '{$anio}-03-31'");
        
        $resultadopapelMar = mysqli_fetch_assoc($sqlMarpapel);
        $resultadocartonMar = mysqli_fetch_assoc($sqlMarcarton);
        $resultadovidrioMar = mysqli_fetch_assoc($sqlMarVidrio);
        $resultadopetMar = mysqli_fetch_assoc($sqlMarPET);
        $resultadopeadMar = mysqli_fetch_assoc($sqlMarPEAD);
        $resultadoelectroMar = mysqli_fetch_assoc($sqlMarElectronicos);
        $resultadocartuchostMar = mysqli_fetch_assoc($sqlMarCartuchosT);
        $resultadolatasMar = mysqli_fetch_assoc($sqlMarLatas);
        $resultadotaparroscasMar = mysqli_fetch_assoc($sqlMarTaparroscas);
        $resultadoresiduospMar = mysqli_fetch_assoc($sqlMarResiduosP);
          } 
          if (isset($_POST['Abr'])) {
            $sqlAbrpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31' ");
            $sqlAbrcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrPET=$conexion->query("SELECT sum(PET_KG) as PET_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrPEAD=$conexion->query("SELECT sum(PEAD_KG) as PEAD_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrElectronicos=$conexion->query("SELECT sum(Electronicos_KG) as Electronicos_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrCartuchosT=$conexion->query("SELECT sum(Cartuchos_toner_KG) as CartuchosT_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrLatas=$conexion->query("SELECT sum(Latas) as Latas_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrTaparroscas=$conexion->query("SELECT sum(Taparroscas) as Taparroscas_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");
            $sqlAbrResiduosP=$conexion->query("SELECT sum(Residuos_peligrosos) as ResiduosP_abril from ds where Fecha_entrega BETWEEN '{$anio}-04-01' and '{$anio}-04-31'");

            $resultadopapelAbr = mysqli_fetch_assoc($sqlAbrpapel);
            $resultadocartonAbr = mysqli_fetch_assoc($sqlAbrcarton);
            $resultadovidrioAbr = mysqli_fetch_assoc($sqlAbrVidrio);
            $resultadopetAbr = mysqli_fetch_assoc($sqlAbrPET);
            $resultadopeadAbr = mysqli_fetch_assoc($sqlAbrPEAD);
            $resultadoelectroAbr = mysqli_fetch_assoc($sqlAbrElectronicos);
            $resultadocartuchostAbr = mysqli_fetch_assoc($sqlAbrCartuchosT);
            $resultadolatasAbr = mysqli_fetch_assoc($sqlAbrLatas);
            $resultadotaparroscasAbr = mysqli_fetch_assoc($sqlAbrTaparroscas);
            $resultadoresiduospAbr = mysqli_fetch_assoc($sqlAbrResiduosP);
              } 
              if (isset($_POST['May'])) {
                $sqlMaypapel=$conexion->query("SELECT sum(Papel_KG) as Papel_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31' ");
                $sqlMaycarton=$conexion->query("SELECT sum(Carton_KG) as Carton_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayPET=$conexion->query("SELECT sum(PET_KG) as PET_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayPEAD=$conexion->query("SELECT sum(PEAD_KG) as PEAD_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayElectronicos=$conexion->query("SELECT sum(Electronicos_KG) as Electronicos_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayCartuchosT=$conexion->query("SELECT sum(Cartuchos_toner_KG) as CartuchosT_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayLatas=$conexion->query("SELECT sum(Latas) as Latas_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayTaparroscas=$conexion->query("SELECT sum(Taparroscas) as Taparroscas_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                $sqlMayResiduosP=$conexion->query("SELECT sum(Residuos_peligrosos) as ResiduosP_mayo from ds where Fecha_entrega BETWEEN '{$anio}-05-01' and '{$anio}-05-31'");
                
                $resultadopapelMay = mysqli_fetch_assoc($sqlMaypapel);
                $resultadocartonMay = mysqli_fetch_assoc($sqlMaycarton);
                $resultadovidrioMay = mysqli_fetch_assoc($sqlMayVidrio);
                $resultadopetMay = mysqli_fetch_assoc($sqlMayPET);
                $resultadopeadMay = mysqli_fetch_assoc($sqlMayPEAD);
                $resultadoelectroMay = mysqli_fetch_assoc($sqlMayElectronicos);
                $resultadocartuchostMay = mysqli_fetch_assoc($sqlMayCartuchosT);
                $resultadolatasMay = mysqli_fetch_assoc($sqlMayLatas);
                $resultadotaparroscasMay = mysqli_fetch_assoc($sqlMayTaparroscas);
                $resultadoresiduospMay = mysqli_fetch_assoc($sqlMayResiduosP);
                  } 
                  if (isset($_POST['Jun'])) {
                    $sqlJunpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31' ");
                    $sqlJuncarton=$conexion->query("SELECT sum(Carton_KG) as Carton_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunPET=$conexion->query("SELECT sum(PET_KG) as PET_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunPEAD=$conexion->query("SELECT sum(PEAD_KG) as PEAD_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunElectronicos=$conexion->query("SELECT sum(Electronicos_KG) as Electronicos_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunCartuchosT=$conexion->query("SELECT sum(Cartuchos_toner_KG) as CartuchosT_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunLatas=$conexion->query("SELECT sum(Latas) as Latas_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunTaparroscas=$conexion->query("SELECT sum(Taparroscas) as Taparroscas_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                    $sqlJunResiduosP=$conexion->query("SELECT sum(Residuos_peligrosos) as ResiduosP_junio from ds where Fecha_entrega BETWEEN '{$anio}-06-01' and '{$anio}-06-31'");
                   
                    $resultadopapelJun = mysqli_fetch_assoc($sqlJunpapel);
                    $resultadocartonJun = mysqli_fetch_assoc($sqlJuncarton);
                    $resultadovidrioJun = mysqli_fetch_assoc($sqlJunVidrio);
                    $resultadopetJun = mysqli_fetch_assoc($sqlJunPET);
                    $resultadopeadJun = mysqli_fetch_assoc($sqlJunPEAD);
                    $resultadoelectroJun = mysqli_fetch_assoc($sqlJunElectronicos);
                    $resultadocartuchostJun = mysqli_fetch_assoc($sqlJunCartuchosT);
                    $resultadolatasJun = mysqli_fetch_assoc($sqlJunLatas);
                    $resultadotaparroscasJun = mysqli_fetch_assoc($sqlJunTaparroscas);
                    $resultadoresiduospJun = mysqli_fetch_assoc($sqlJunResiduosP);
                      } 
                      if (isset($_POST['Jul'])) {
                        $sqlJulpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_julio from ds where Fecha_entrega BETWEEN '{$anio}-07-01' and '{$anio}-07-31' ");
                        $sqlJulcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_julio from ds where Fecha_entrega BETWEEN '{$anio}-07-01' and '{$anio}-07-31'");
                        $sqlJulVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_julio from ds where Fecha_entrega BETWEEN '{$anio}-07-01' and '{$anio}-07-31'");
                        
                        $resultadopapelJul = mysqli_fetch_assoc($sqlJulpapel);
                        $resultadocartonJul = mysqli_fetch_assoc($sqlJulcarton);
                        $resultadovidrioJul = mysqli_fetch_assoc($sqlJulVidrio);
                          } 
                          if (isset($_POST['Ago'])) {
                            $sqlAgopapel=$conexion->query("SELECT sum(Papel_KG) as Papel_agosto from ds where Fecha_entrega BETWEEN '{$anio}-08-01' and '{$anio}-08-31' ");
                            $sqlAgocarton=$conexion->query("SELECT sum(Carton_KG) as Carton_agosto from ds where Fecha_entrega BETWEEN '{$anio}-08-01' and '{$anio}-08-31'");
                            $sqlAgoVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_agosto from ds where Fecha_entrega BETWEEN '{$anio}-08-01' and '{$anio}-08-31'");
                            
                            $resultadopapelAgo = mysqli_fetch_assoc($sqlAgopapel);
                            $resultadocartonAgo = mysqli_fetch_assoc($sqlAgocarton);
                            $resultadovidrioAgo = mysqli_fetch_assoc($sqlAgoVidrio);
                              } 
                              if (isset($_POST['Sep'])) {
                                $sqlSeppapel=$conexion->query("SELECT sum(Papel_KG) as Papel_septiembre from ds where Fecha_entrega BETWEEN '{$anio}-09-01' and '{$anio}-09-31' ");
                                $sqlSepcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_septiembre from ds where Fecha_entrega BETWEEN '{$anio}-09-01' and '{$anio}-09-31'");
                                $sqlSepVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_septiembre from ds where Fecha_entrega BETWEEN '{$anio}-09-01' and '{$anio}-09-31'");
                                
                                $resultadopapelSep = mysqli_fetch_assoc($sqlSeppapel);
                                $resultadocartonSep = mysqli_fetch_assoc($sqlSepcarton);
                                $resultadovidrioSep = mysqli_fetch_assoc($sqlSepVidrio);
                                  } 
                                  if (isset($_POST['Oct'])) {
                                    $sqlOctpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_octubre from ds where Fecha_entrega BETWEEN '{$anio}-10-01' and '{$anio}-10-31' ");
                                    $sqlOctcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_octubre from ds where Fecha_entrega BETWEEN '{$anio}-10-01' and '{$anio}-10-31'");
                                    $sqlOctVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_octubre from ds where Fecha_entrega BETWEEN '{$anio}-10-01' and '{$anio}-10-31'");
                                   
                                    $resultadopapelOct = mysqli_fetch_assoc($sqlOctpapel);
                                    $resultadocartonOct = mysqli_fetch_assoc($sqlOctcarton);
                                    $resultadovidrioOct = mysqli_fetch_assoc($sqlOctVidrio);
                                      } 
                                      if (isset($_POST['Nov'])) {
                                        $sqlNovpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_noviembre from ds where Fecha_entrega BETWEEN '{$anio}-11-01' and '{$anio}-11-31' ");
                                        $sqlNovcarton=$conexion->query("SELECT sum(Carton_KG) as Carton_noviembre from ds where Fecha_entrega BETWEEN '{$anio}-11-01' and '{$anio}-11-31'");
                                        $sqlNovVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_noviembre from ds where Fecha_entrega BETWEEN '{$anio}-11-01' and '{$anio}-11-31'");
                                       
                                        $resultadopapelNov = mysqli_fetch_assoc($sqlNovpapel);
                                        $resultadocartonNov = mysqli_fetch_assoc($sqlNovcarton);
                                        $resultadovidrioNov = mysqli_fetch_assoc($sqlNovVidrio);
                                          } 
                                          if (isset($_POST['Dic'])) {
                                            $sqlDicpapel=$conexion->query("SELECT sum(Papel_KG) as Papel_diciembre from ds where Fecha_entrega BETWEEN '{$anio}-12-01' and '{$anio}-12-31' ");
                                            $sqlDiccarton=$conexion->query("SELECT sum(Carton_KG) as Carton_diciembre from ds where Fecha_entrega BETWEEN '{$anio}-12-01' and '{$anio}-12-31'");
                                            $sqlDicVidrio=$conexion->query("SELECT sum(Vidrio_KG) as Vidrio_diciembre from ds where Fecha_entrega BETWEEN '{$anio}-12-01' and '{$anio}-12-31'");
                                           
                                            $resultadopapelDic = mysqli_fetch_assoc($sqlDicpapel);
                                            $resultadocartonDic = mysqli_fetch_assoc($sqlDiccarton);
                                            $resultadovidrioDic = mysqli_fetch_assoc($sqlDicVidrio);
                                              } 
          
$resultadopapelgeneral= $resultadopapelEne['Papel_enero'] + $resultadopapelFeb['Papel_febrero'] + $resultadopapelMar['Papel_marzo'] + $resultadopapelAbr['Papel_abril'] + $resultadopapelMay['Papel_mayo']+ $resultadopapelJun['Papel_junio'] + $resultadopapelJul['Papel_julio'] + $resultadopapelAgo['Papel_agosto'] + $resultadopapelSep['Papel_septiembre'] + $resultadopapelOct['Papel_octumbre'] + $resultadopapelNov['Papel_noviembre'] + $resultadopapelDic['Papel_diciembre'];
$resultadocartongeneral= $resultadocartonEne['Carton_enero'] + $resultadocartonFeb['Carton_febrero'] + $resultadocartonMar['Carton_marzo'] + $resultadocartonAbr['Carton_abril']+ $resultadocartonMay['Carton_mayo'] + $resultadocartonJun['Carton_junio']+$resultadocartonJul['Carton_julio']+$resultadocartonAgo['Carton_agosto']+$resultadocartonSep['Carton_septiembre']+$resultadocartonOct['Carton_octubre']+$resultadocartonNov['Carton_noviembre']+$resultadocartonDic['Carton_diciembre'];
$resultadovidriogeneral= $resultadovidrioEne['Vidrio_enero']+$resultadovidrioFeb['Vidrio_febrero']+$resultadovidrioMar['Vidrio_marzo']+$resultadovidrioAbr['Vidrio_abril']+$resultadovidrioMay['Vidrio_mayo']+$resultadovidrioJun['Vidrio_junio']+$resultadovidrioJul['Vidrio_julio']+$resultadovidrioAgo['Vidrio_agosto']+$resultadovidrioSep['Vidrio_septiembre']+$resultadovidrioOct['Vidrio_octubre']+$resultadovidrioNov['Vidrio_noviembre']+$resultadovidrioDic['Vidrio_diciembre'];
$resaguapapel=($resultadopapelgeneral*79);
$resaguacarton=($resultadocartongeneral*50);
$resaguavidrio=($resultadovidriogeneral*0);
?>
<?php
require('FPDF/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$cellWidth = 20.3;
$cellHeight = 12;
$numRows = 5;
$numCols = 14;
$data = array(
    array("Material:", "Papel", "Carton","Vidrio","Madera","Baterias","PEAD","PET","BOPP","","","","",""),
    array("Cantidad: ", $resultadopapelgeneral, $resultadocartongeneral, $resultadovidriogeneral,"","","","","","","","","",""),
    array("CO2: ", $resultadopapelgeneral, $resultadocartongeneral, $resultadovidriogeneral,"","","","","","","","","",""),
    array("Agua: ", $resaguapapel, $resaguacarton, $resaguavidrio,"","","","","","","","","",""),
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
