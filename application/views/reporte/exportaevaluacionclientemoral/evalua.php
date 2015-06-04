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
$html .='<tr style="background-color:#46CC46;">
            <th></th>
            <th>Persona Moral</th>
            <th>Cliente</th>
            <th>RFC </th>
            <th>Ejecutivo a cargo</th>
            <th>Comentarios</th>
            <th>Fecha registro</th>
            <th>Fecha</th>
            <th>Tipo crédito</th>
            <th>Calificación</th>
            <th>Monto</th>
            <th>Folio</th>
            <th>Porcentaje completado</th> 
            <th>Omisiones Graves</th>
            </tr>';
   
    $html .= '<tr><td>'. $informe[0]["idhistorial_crediticio_moral"] .'</td>';
    $html .= '<td>'. $informe[0]["idpersonamoral"] .'</td>';
    $html .= '<td>'. $informe[0]["nombreempresa"]  .'</td>';
    $html .= '<td>'. $informe[0]["RFC"]  .'</td>';
    $html .= '<td>'. $informe[0]["Ejecutivoacargo"] .'</td>';
    $html .= '<td>'. $informe[0]["Comentarios"] .'</td>';
    $html .= '<td>'. $informe[0]["f"]  .'</td>';
    $html .= '<td>'. $informe[0]["Fecha"]  .'</td>';
    $html .= '<td>'. $informe[0]["nombre"]  .'</td>';
    $html .= '<td>'. $informe[0]["calificacion"] .'</td>';
    $html .= '<td>'. $informe[0]["monto"] .'</td>';
    $html .= '<td>'. $informe[0]["numerocredito"] .'</td>';
    $html .= '<td>'. $informe[0]["Completoporcentaje"] .'</td>';
    $html .= '<td>'. $informe[0]["omisionesgraves"] .'</td></tr>';
   
   

    $html .= '</table>';
    $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1,
     $fill = 0, $reseth = true, $align = '', $autopadding = true);
  
    $pdf->Output('Reporte.pdf', 'I');

?>
