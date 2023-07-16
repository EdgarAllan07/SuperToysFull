<?php
require("Conexion.php");
require("jpgraph/src/jpgraph.php");
require("jpgraph/src/jpgraph_bar.php");

$datosY =array();//datos en el eje y;
$datosY2 =array();
$datosX =array();
$producto;
$sql1 = "select * from productos";
$resultado1 = mysqli_query($miconexion,$sql1);

while ($filas1 =mysqli_fetch_array($resultado1)) {
	$datosX[] =  $filas1["Nombre_Producto"];
	$datosY2[] = $filas1["Cantidad"];
	$producto = $filas1['Nombre_Producto'];
	$sql3 = "select * from detalle_factura where Producto = '$producto'";
	$resultado3 =  mysqli_query($miconexion,$sql3);
		$numeros = mysqli_num_rows($resultado3);
		$datosY[] = $numeros;

}

//Definir o crear el objeto de mi grafico y la escala
$grafico = new Graph(1300,600,'auto'); //ancho, alto
$grafico->SetScale("textint"); //escala a usar
//seleccionar el un tema de color para el grafico
$tema= new OceanTheme;
$grafico->SetTheme($tema);

$grafico->title->set('Cantidad de juguetes que hay actualmente en la tienda');
$grafico->xgrid->show(); //esto muestra la cuadricula del grafico
$grafico->xaxis->SetTickLabels($datosX);

//crear linea de datos
$l1 = new BarPlot($datosY);
$l1->SetColor("#717491D");
$l1->SetLegend("Vendidos");


//crear line2a de datos
$l2 = new BarPlot($datosY2);
$l2->SetColor("#627491");
$l2->SetLegend("Cantidad");


//para agrupar las barras
$grupo =array($l1,$l2);
$ventas= new GroupBarPlot($grupo);
$grafico->add($ventas);

 $grafico->Stroke();

?>