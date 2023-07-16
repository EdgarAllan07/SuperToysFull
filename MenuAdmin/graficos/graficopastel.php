<?php
require("jpgraph/src/jpgraph.php");
require("Conexion.php");
require("jpgraph/src/jpgraph_pie.php");

$datosX = array('Muy Baja','Baja','Regular','Alta','Muy Alta');
$sql1 = "select Calidad from encuesta where Calidad ='Muy Baja'";
$sql2 = "select Calidad from encuesta where Calidad ='Baja'";
$sql3 = "select Calidad from encuesta where Calidad ='Regular'";
$sql4 = "select Calidad from encuesta where Calidad ='Alta'";
$sql5 = "select Calidad from encuesta where Calidad ='Muy Alta'";
$resultado1=  mysqli_query($miconexion,$sql1);
$resultado2=  mysqli_query($miconexion,$sql2);
$resultado3=  mysqli_query($miconexion,$sql3);
$resultado4=  mysqli_query($miconexion,$sql4);
$resultado5=  mysqli_query($miconexion,$sql5);
$numero1 =  mysqli_num_rows($resultado1);
$numero2 =  mysqli_num_rows($resultado2);
$numero3 =  mysqli_num_rows($resultado3);
$numero4 =  mysqli_num_rows($resultado4);
$numero5 =  mysqli_num_rows($resultado5);
/*
echo "Numero 1: ".$numero1."<br>";
echo "Numero 2: ".$numero2."<br>";
echo "Numero 3: ".$numero3."<br>";
echo "Numero 4: " .$numero4."<br>";
echo "Numero 5: ".$numero5."<br>";
*/

$datosY = array($numero1,$numero2,$numero3,$numero4,$numero5);

$grafico = new PieGraph(500,500,'auto');
$grafico->SetScale("textlint");

$grafico->title->set("Calida de nuestros productos segun nuestros cliente");

$pastel1 = new PiePlot($datosY);
$pastel1->SetLegends($datosX);

$grafico->Add($pastel1);
$grafico->Stroke();


?>