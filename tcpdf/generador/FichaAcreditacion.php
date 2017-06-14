<?php 
	
	require_once('tcpdf_include.php');

	$Nombre = $_GET["nombre"];
	$Email	= $_GET["email"];

	
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


$pdf->SetFont('times', '', 14);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

$html1 = '<h1 align="center">FICHA DE ACREDITACION</h1>
	<hr>
	<p align="left">
		<br>
	</p>

	<p align="justify">
		Estimado(a) <strong>'.$Nombre.'</strong> por favor presenta este documento al momento de ingresar.
	</p>

	<<p align="right"></p>';

$htmlTab1 = '<table border="2" cellpadding="5" cellpadding="0">

			<tr align="justify">
				<td class="active" align="justifi">
					<table cellpadding="10" >
						<tr>
							<td colspan="2" ><strong></strong></td>
							<td colspan="4"></td>
						</tr>
						<tr align="center">
							<td colspan="2" ><strong>Nombre</strong></td>
							<td colspan="4" > '.$Nombre.'</td>
						</tr>
						<tr>
							<td colspan="2" ><strong>Email</strong></td>
							<td colspan="4" >'.$Email.'</td>
						</tr>
						<tr align="center">
							<td colspan="2" ><strong></strong></td>
							<td colspan="4" ></td>
						</tr>
						<tr align="center">
							<td colspan="2" ><strong></strong></td>
							<td colspan="4" ></td>
						</tr>
					</table>
				</td>
				<td class="active" align="center">
					<br>
					<img src="../../QRUsuarios/".$Email.".png"/>
				</td>
			</tr>';

$htmlTab2 = '</table>';
 
$html3 = '<hr>
			<div align="center">
			</div>';

$html = $html1.'<br />'.$htmlTab1.$htmlTab2.'<br />'.$html3;

$pdf->writeHTML($html, true, false, true, false, '');

$NombreArchivo = "FichaAcreditacion.pdf";

$pdf->Output($NombreArchivo, "I");

?>