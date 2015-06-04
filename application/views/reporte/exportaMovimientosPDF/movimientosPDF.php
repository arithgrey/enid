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
$html = '<h2 style="text-align:center"><font color="#000000">Listado de Usuarios Registrados (Ultimos 100)</font></h2>';
$html .= '<table border="1" cellspacing="2" cellpadding="2">';
$html .='<tr style="background-color:#53EB3F; color:#000; text-align: center;">
    <th style="width: 5%;"># </th>
    <th>Nombre</th>    

    <th>Fecha de Registro</th>
  
    </tr>';
// ---------------------------------------------------------

    foreach ($listado as $v) {
     
   
    $html .= '<tr ><td style="text-align: center;">' . $v['idclienteorg'] . '</td>';
    $html .= '<td style="text-align: center;">' . $v['nombrecompleto'] . '</td>';
    //$html .= '<td style="text-align: center;">' . $v['idempresa'] . '</td>';
    //$html .= '<td style="text-align: center;">' . $v['status'] . '</td>';
    $html .= '<td style="text-align: center;">' .  $v['fecha_registro'] . '</td></tr>';    

    }

/*
foreach ($listado as $v) {
    $i++;    
    if (($i % 2) == 0) {
        $style = 'style="background-color:#9FFF92 "';
    } else {
        $style = "";
    }
    $html .= '<tr ' . $style . '><td style="text-align: center;">' . $v['idclienteorg'] . '</td>';
    $html .= '<td style="text-align: center;">' . $v['nombrecompleto'] . '</td>';
    //$html .= '<td style="text-align: center;">' . $v['idempresa'] . '</td>';
    //$html .= '<td style="text-align: center;">' . $v['status'] . '</td>';
    $html .= '<td style="text-align: center;">' .  $v['fecha_registro'] . '</td></tr>';    

}*/


$html .= '</table>';

$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
$pdf->Output('Reporte.pdf', 'I');

/*$html = "";
foreach ($listado as $v) {
     
   
    $html .= '<tr ><td style="text-align: center;">' . $v['idclienteorg'] . '</td>';
    $html .= '<td style="text-align: center;">' . $v['nombrecompleto'] . '</td>';
    //$html .= '<td style="text-align: center;">' . $v['idempresa'] . '</td>';
    //$html .= '<td style="text-align: center;">' . $v['status'] . '</td>';
    $html .= '<td style="text-align: center;">' .  $v['fecha_registro'] . '</td></tr>';    

}

    echo $html;*/
?>

