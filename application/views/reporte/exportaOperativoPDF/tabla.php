<?php

include("../libraries/fonts/times.php"); //tcpdf
include("../libraries/config/lang/spa.php"); //tcpdf
//$this->load->library('tcpdf'); //tcpdf
 
//*************
ob_end_clean(); //rompimiento de pagina
//*************
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
 
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SOFTWARE-CREAM');
$pdf->SetTitle('codigoweblibre.comli.co - codigoweblibre.wordpress.com');
$pdf->SetSubject('PDF');
$pdf->SetKeywords('Reporte, ESTUDIANTES');
 
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
//set some language-dependent strings
//$pdf->setLanguageArray($l);
// ---------------------------------------------------------
// set default font subsetting mode
$pdf->setFontSubsetting(true);
 
$pdf->SetFont('helvetica', '', 10, '', true);
 
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(false); //no imprime la cabecera ni la linea
$pdf->setPrintFooter(false); // imprime el pie ni la linea
$pdf->AddPage();
 
$i = 0;
$tipo_documento = "";
$style = "";
$html = "";
$html = '<h2 style="text-align:center"><font color="#000000">Reporte General</font></h2>';
$html .= '<table border="1" cellspacing="2" cellpadding="2">';
$html .='<tr style="background-color:#53EB3F; color:#000; text-align: center;">
    <th>Listado </th>
    <th>Cantidad</th>
    </tr>';
// ---------------------------------------------------------

    $i++;    
    if (($i % 2) == 0) {
        $style = 'style="background-color:#9FFF92 "';
    } else {
        $style = "";
    }

    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Fisicas</td>';
    $html .= '<td style="text-align: center;">' . $numeropersonamoral . '</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Morales</td>';
    $html .= '<td style="text-align: center;">' . $numeropersonasfisicas . '</td></tr>'; 
    $html .= '<tr ' . $style . '><td style="text-align: center;">Total de clientes en el sistema</td>';
    $html .= '<td style="text-align: center;">' . $totalclientes . '</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Alertas Morales</td>';
    $html .= '<td style="text-align: center;">' . $numeroalertasmorales . '</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Alertas Fisicas</td>';
    $html .= '<td style="text-align: center;">' . $numeroalertasfisicas . '</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Total de alertas generadas</td>';
    $html .= '<td style="text-align: center;">' . $TotalAlertas . '</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Expedientes de personas morales</td>';
    $html .= '<td style="text-align: center;">' . $ExpedientesPersonasMorales . '</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Expedientes de personas fisicas</td>';
    $html .= '<td style="text-align: center;">' . $ExpedientesPersonasFisicas . '</td></tr>';      
    $html .= '<tr ' . $style . '><td style="text-align: center;">Total de expedientes en el sistema</td>';
    $html .= '<td style="text-align: center;">' . $TotalExpedientes . '</td></tr>';  


$html .= '</table>';

$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
$pdf->Output('Reporte.pdf', 'I');
?>

