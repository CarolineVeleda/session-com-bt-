<?php

require_once("pdf/fpdf.php");
session_start();

$pdf= new FPDF("P","pt","A4");
 
 
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Dados",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(8);
 
 
//nome
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Nome:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$_SESSION['usuario'],0,1,'L');
 
//email
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"E-mail:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$_SESSION['email'],0,1,'L');






$pdf->Output();

?>