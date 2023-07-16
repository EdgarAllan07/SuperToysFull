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
		<tr>
			<td>Bicicleta PawPatrol</td>
			<td>$185.50</td>
			<td>2</td>
		</tr>
		<tr>
			<td>Combo Patines</td>
			<td>$99.99</td>
			<td>1</td>
		</tr>	
	</table>
</div>
<br>
<center><h3>Total Pagado $</h3></center>
<br>
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