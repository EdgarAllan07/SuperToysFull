<?php

require('../FPDF/fpdf.php');
$pdf = new FPDF('P','mm','LETTER');
$pdf->AliasNbPages();

$pdf->AddPage('P','LETTER');
$pdf->SetFont('Arial','B',20);

$pdf->Cell(0,10,'Reporte de ventas',0,1,'C');
$pdf->Cell(0,10,'Tienda en linea SuperToys 2021',0,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(200,10,'Fecha de Impresion: '.Date("Y-m-d"),0,0,'R');
$pdf->Ln(15); //Salto de Linea
//$pdf->Line(10,55,210,55); 
$pdf->SetFillColor(140,123,110);
$pdf->Cell(15,10,'ID Venta',0,0,'C',1);
$pdf->Cell(50,10,'Cliente',0,0,'C',1);
$pdf->Cell(25,10,'Fecha',0,0,'C',1);
$pdf->Cell(40,10,'Tarjeta',0,0,'C',1);
$pdf->Cell(40,10,'Banco',0,0,'C',1);
$pdf->Cell(30,10,'Total',0,0,'C',1);
//$pdf->Line(10,64,210,64);
$pdf->Ln(10); 

//llenando reportes con datos de la DB
require('../php/conexion.php');
$sql="Select * from facturas order by idFactura";
$consulta=mysqli_query($conectado,$sql);
$Registros=mysqli_num_rows($consulta);
$total = 0;

while($fila=mysqli_fetch_array($consulta))
{
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(15,10,$fila['idFactura'],0,0,'C');
	$pdf->Cell(50,10,$fila['Nombre_Cliente'],0,0,'C');
	$pdf->Cell(25,10,$fila['Fecha_Compra'],0,0,'C');
	$pdf->Cell(40,10,$fila['TipoT'],0,0,'C');
	$pdf->Cell(40,10,$fila['BancoT'],0,0,'C');
	$pdf->Cell(30,10,'$'.$fila['Total'],0,0,'C');
	$pdf->Ln(10);
	$total = $total+$fila['Total'];

}

$pdf->Line(10,$pdf->GetY(),210,$pdf->GetY());
$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);
$pdf->Cell(0,10,'Total de Transacciones: '.$Registros,0,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,10,'Monto total de ventas: $'.$total,0,0,'C');




//Para imprimir
$pdf->OutPut();

?>