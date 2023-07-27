<?php
/*call the FPDF library*/
require('lib/fpdf/fpdf.php');
include 'config.php';


	
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm','A4');
$signature = "../digital_signature/signature.png";


$pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','B',20);

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'Invoice RPL',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'COMUNITY',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Rincian',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,'SMKN 1 Ciamis',0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,'0012',0,1);

$pdf->Cell(130 ,5,'Jl.jendsud',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,'27th July 2023',0,1);
 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$pdf->Cell(34 ,5,'ORD001',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(20 ,6,'',0,0,'C');
$pdf->Cell(30 ,6,'Banyaknya',1,0,'C');
$pdf->Cell(80 ,6,'Jenis Layanan',1,0,'C');
$pdf->Cell(30 ,6,'Satuan',1,0,'C');
$pdf->Cell(25 ,6,'Jumlah',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
$data = mysqli_query($config,"SELECT  * FROM tbl_latihan_invoice");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(20 ,6,'',0,0,'C');
  $pdf->Cell(30,6, $d['banyaknya'],1,0);
  $pdf->Cell(80,6, $d['jenis_layanan'],1,0);
  $pdf->Cell(30,6, $d['satuan'],1,0,'R');  
  $pdf->Cell(25,6, $d['jumlah'],1,1,'R');
}
		

$pdf->Cell(115 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'151000.00',1,1,'R');
$pdf->Cell(118 ,6,'',0,0);

$pdf->Cell(30 ,6,'',0,0);
$pdf->Cell(0 ,20,'Hormat Kami,',0,1);
$pdf->Cell(128 ,0,'',0,0);

$pdf->Cell( 0,20, $pdf->Image($signature, $pdf->GetX(), $pdf->GetY(), 70), 0, 1);
$pdf->Cell(50 ,6,'',0,1);


$pdf->Cell(150 ,6,'',0,0);
$pdf->Cell(0 ,0,'Satya N.R',0,0);

$pdf->Output();

?>