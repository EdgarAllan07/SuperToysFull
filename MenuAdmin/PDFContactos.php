<?php

require('../FPDF/fpdf.php');
$pdf = new FPDF('L','mm','LETTER');
$pdf->AliasNbPages();

$pdf->AddPage('L','LETTER');
$pdf->SetFont('Arial','B',20);

$pdf->Cell(0,10,'Solicitudes de formulario Contactanos',0,1,'C');
$pdf->Cell(0,10,'SuperToys 2021',0,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'Fecha de Impresion: '.Date("Y-m-d"),0,0,'R');
$pdf->Ln(15); //Salto de Linea
//$pdf->Line(10,55,210,55); 
$pdf->SetFillColor(140,123,110);
$pdf->Cell(15,10,'ID',0,0,'C',1);
$pdf->Cell(50,10,'Nombre Cliente',0,0,'C',1);
$pdf->Cell(30,10,'Telefono',0,0,'C',1);
$pdf->Cell(65,10,'Correo',0,0,'C',1);
$pdf->Cell(0,10,'Mensaje',0,0,'C',1);
//$pdf->Line(10,64,210,64);
$pdf->Ln(10); 

//llenando reportes con datos de la DB
require('../php/conexion.php');
$sql="Select * from contactos order by idContactos";
$consulta=mysqli_query($conectado,$sql);
$Registros=mysqli_num_rows($consulta);

while($fila=mysqli_fetch_array($consulta))
{
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(15,10,$fila['idContactos'],0,0,'C');
	$pdf->Cell(50,10,$fila['Nombre'],0,0,'C');
	$pdf->Cell(30,10,$fila['Telefono'],0,0,'C');
	$pdf->Cell(65,10,$fila['Correo'],0,0,'C');
	$pdf->Cell(0,10,$fila['Mensaje'],0,0,'L');	
	$pdf->Ln(10);
}

$pdf->Line(10,$pdf->GetY(),270,$pdf->GetY());
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Total de solicitudes: '.$Registros,0,0,'L');

//Para imprimir
$pdf->OutPut();