<?php
session_start();
if(isset($_SESSION['carrito']))
	$carrito=$_SESSION['carrito']; else $carrito=false;

if($carrito){
	
	$valorcompra=$_SESSION['ValorPagar'];
	$idCliente=$_SESSION['vsCodigo'];
	$fechacompra=date("Y-m-d");
	//Datos de la tarjeta
	extract($_REQUEST);

	//Creando copia del carrito para imprimir ticket
	$carritoArrayObject = new ArrayObject($carrito);
	$copy = $carritoArrayObject->getArrayCopy();

	//Guardando Numero de Tarjeta
	$Tnumero=$num1.$num2.$num3.$num4;
	$Last4=$num4;
	$First4=$num1;
		
	require("../php/conexion.php");

	//Insertando Compra
	$sqlfactura="insert into facturas (idCliente,Nombre_Cliente,Fecha_Compra,Total,TipoT,NombreT,BancoT,NumeroT,VenceMes,VenceYear) values ($idCliente,'$nomcliente','$fechacompra',$valorcompra,'$tipo','$nombre','$emisor','$Tnumero','$mesv','$aniov')";

	$guardar = mysqli_query($conectado,$sqlfactura);
	$idCompra = mysqli_insert_id($conectado);

	mysqli_close($conectado);

	if($idCompra > 0){

		//Ahora agregamos datos a tabla detalle_factura
		foreach ($carrito as $indice => $items) {

			require("../php/conexion.php");
			$producto=$items['producto'];
			$cantidad=$items['cantidad'];
			$precio=$items['precio'];

			$sqldetalle = "insert into detalle_factura (idFactura,Producto,Precio,Cantidad) values($idCompra,'$producto',$precio,$cantidad)";

			$detalle=mysqli_query($conectado,$sqldetalle);

			if(!$detalle){

				echo "Transaccion Fallida!! <br>",$sqldetalle;
				echo "<br> <a href = 'VerCarrito.php'>Regresar</a>";

			}

			mysqli_close($conectado);
			unset($_SESSION['carrito']);
			
		}		
		//Borramos datos del carrito
		$carrito=false;		
				
	} 
	else{

		echo "Transaccion Fallida!! <br>",$sqlfactura;
		echo "<br> <a href = 'VerCarrito.php'>Regresar</a>";
	}

}
else{
	header('location:SinProductos.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pago Exitoso</title>
	<style type="text/css">

		@media print
		{
			.NoPrint{ visibility: hidden;}

		}
		body
		{
			background:#ffbb9c;
		}
		table{			
			width: 95%;	
		}
		thead
		{
			background-color: gray;
			border-bottom: solid 7px #220802; 
			color: white;
			text-align: center;
			font-size: 14pt;
		}
		th,td
		{
			border: 0px;
			padding: 5px;
			text-align: center;
			font-size: 14pt;
		}
		h1,h2
		{
			font-family: serif;
		}
	</style>		
<header>
	<div align="center">        
        <img src="../images/SLogo.png" width="250px" height="150px">        
    </div>
    <hr>
</header>
<body>
<div align="center">
	<p align="center">
		<h1>PAGO REALIZADO CON EXITO<br></h1>
		<h2>GRACIAS POR SU COMPRA<h2>		
	</p>
</div>
<div>
	<h4>
		Detalle de compra:
	</h4>
</div>
<div align="center">
	<table>
		<thead>
		<th>Producto</th>
		<th>Precio</th>
		<th>Cantidad</th>
		</thead>
		<?php
			
			foreach($copy as $k => $v){

				echo '<tr>';
				echo '<td>'.$v['producto'].'</td>';
				echo '<td>$'.$v['precio'].'</td>';
				echo '<td>'.$v['cantidad'].'</td>';
				echo '</tr>';			
			}

		?>	
	</table>
</div>
<br>
<center><h3>Total Pagado $<?php echo $valorcompra; ?></h3>
<br>
<h3>Tarjeta Numero: <?php echo $First4; ?>-xxxx-xxxx-<?php echo $Last4; ?></h3></center>
<br><br>
<h3 align="center" class="NoPrint">Imprime tu ticket!</h3>
<div align="center">
	<table width="100%" class="NoPrint">
		<tr>
			<td align="left"><a href="ProductosCliente.php?"><img src="../Fotos/Back.png" width="250px" height="80px"></a></td>
			<td align="right"><input type="image" name="Imprimir" src="../Fotos/Print1.png" width="300px" height="100px"onclick="window.print();"></td>
		</tr>
	</table>
</div>
</body>
</html>