<?php

require('../FPDF/fpdf.php');
$pdf = new FPDF('L','mm','LETTER');
$pdf->AliasNbPages();

$pdf->AddPage('L','LETTER');
$pdf->SetFont('Arial','B',20);

$pdf->Cell(0,10,'Registro de Encuestas de Usuarios',0,1,'C');
$pdf->Cell(0,10,'Super Toys 2021',0,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,'Fecha de Impresion: '.Date("Y-m-d"),0,0,'R');
$pdf->Ln(15); //Salto de Linea
//$pdf->Line(10,55,210,55); 
$pdf->SetFillColor(140,123,110);
$pdf->Cell(15,10,'ID',0,0,'C',1);
$pdf->Cell(40,10,'Nombre',0,0,'C',1);
$pdf->Cell(15,10,'Edad',0,0,'C',1);
$pdf->Cell(25,10,'Pudo Pagar',0,0,'C',1);
$pdf->Cell(25,10,'Compra',0,0,'C',1);
$pdf->Cell(30,10,'Nuetros Precios',0,0,'C',1);
$pdf->Cell(30,10,'Lo encontraste',0,0,'C',1);
$pdf->Cell(25,10,'Calidad',0,0,'C',1);
$pdf->Cell(30,10,'Facil Navegacion',0,0,'C',1);
$pdf->Cell(25,10,'Calificacion',0,0,'C',1);
//$pdf->Line(10,64,210,64);
$pdf->Ln(10); 

//llenando reportes con datos de la DB
require('../php/conexion.php');
$sql="Select * from encuesta order by idencuesta";
$consulta=mysqli_query($conectado,$sql);
$Registros=mysqli_num_rows($consulta);

while($fila=mysqli_fetch_array($consulta))
{
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(15,10,$fila['idEncuesta'],0,0,'C');
	$pdf->Cell(40,10,$fila['Nombre'],0,0,'C');
	$pdf->Cell(15,10,$fila['Edad'],0,0,'C');
	$pdf->Cell(25,10,$fila['Pago'],0,0,'C');
	$pdf->Cell(25,10,'$'.$fila['Monto'],0,0,'C');
	$pdf->Cell(30,10,$fila['Precio'],0,0,'C');
	$pdf->Cell(30,10,$fila['Encontrar'],0,0,'C');
	$pdf->Cell(25,10,$fila['Calidad'],0,0,'C');
	$pdf->Cell(30,10,$fila['Navegar'],0,0,'C');
	$pdf->Cell(25,10,$fila['Calificacion'],0,0,'C');
	$pdf->Ln(10);
}

$pdf->Line(10,$pdf->GetY(),270,$pdf->GetY());
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Total de Encuestas: '.$Registros,0,0,'L');

//Para imprimir
$pdf->OutPut();