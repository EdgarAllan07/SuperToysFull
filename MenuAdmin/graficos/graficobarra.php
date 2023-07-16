<?php
require("jpgraph/src/jpgraph.php");
require("Conexion.php");
require("jpgraph/src/jpgraph_bar.php");

$datosX = array('Muy Bajos','Bajos','Justos','Altos','Muy Altos');
$sql1 = "select * from encuesta where Precio ='Muy Bajos'";
$sql2 = "select * from encuesta where Precio ='Bajos'";
$sql3 = "select * from encuesta where Precio ='Justos'";
$sql4 = "select * from encuesta where Precio ='Altos'";
$sql5 = "select * from encuesta where Precio ='Muy Altos'";
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
$datosY = array($numero1,$numero2,$numero3,$numero4,$numero5);

$grafico = new Graph(500,500,'auto');
$grafico->SetScale("textint");

$grafico->title->set("Valorizacion de los precios por los clientes");
$tema= new OrangeTheme;
$grafico->SetTheme($tema);
//titulo del eje x

$grafico->xaxis->title->set("Calificacion");
//titulo del eje y
$grafico->yaxis->title->set("Cantidad");

$grafico->xaxis->SetTickLabels($datosX);
//los valores del eje y
$barra1 = new Barplot($datosY); //objetos de tipo barra
//agregar la barra al objeto grafico
$grafico->Add($barra1);
//Generamos o imprimimos el grafico
$grafico->Stroke();
?>