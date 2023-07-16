<?php
session_start();
require('ValidaAdmin.php');
if(!isset($_GET['id'])){
	header('location:../Login.html');
}
require("Base.php");
$codigo = $_GET['id'];
$sql = "select * from usuario where idCliente= '$codigo'";
$resultado = mysqli_query($miconexion,$sql);
$cliente = mysqli_fetch_array($resultado);
?>
<!doctype html>
<html>
<head>
	<title>Detalle Clientes</title>
	<link rel="stylesheet" type="text/css" href="../css/Listas.css">
</head>
<body>	
	<h1>Detalle Clientes</h1>
	
		<table width="600">
			<tr>
				<td>Nombre</td>
				<td><?php echo $cliente['Nombre_Cliente']; ?></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><?php echo $cliente['Apellido_Cliente']; ?></td>
			</tr>
			<tr>
				<td>Dui</td>
				<td><?php echo $cliente['Correo']; ?></td>
			</tr>
			<tr>
				<td>Direccion</td>
				<td><?php echo $cliente['Direccion']; ?></td>
			</tr>
			<tr>
				<td>Estado</td>
				<td><?php echo $cliente['Telefono']; ?></td>
			</tr>
			<tr>
				<td>Ciudad</td>
				<td><?php echo $cliente['Sexo']; ?></td>
			</tr>
			<tr>
				<td>Correo</td>
				<td><?php echo $cliente['Tipo_Usuario']; ?></td>
			</tr>																	
		</table>
		<div align="center">
			<a href="../php/ListarCliente.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>
		</div>        
</body>
</html>