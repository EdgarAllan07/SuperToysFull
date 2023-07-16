<?php
if (!isset($_GET['id'])) {
	header("location:login.html");
}
require("Conexion.php");
$codigo = $_GET['id'];
$sql = "select * from productos where idProductos= '$codigo'";
$resultado = mysqli_query($miconexion,$sql);
$productos = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detalle del producto</title>
	<link rel="stylesheet" type="text/css" href="css/Ddetalle.css">
</head>
<body>
<h1>Detalle del producto</h1>
<a href="#" onclick="window.close();"><img src="images/salir2.png" width="75" /></a>
	<table width="600" height ="300" class="tabla">
		<tr>
			<td>Nombre:</td>
			<td><?php echo $productos['Nombre_Producto']; ?></td>
		</tr>	
		<tr>
			<td>Precio:</td>
			<td><?php echo $productos['Precio']; ?></td>
		</tr>	
		<tr>
			<td>Stock:</td>
			<td><?php echo $productos['Cantidad']; ?></td>
		</tr>	
		<tr>
			<td>Categoria:</td>
			<td><?php echo $productos['Marca_Producto']; ?></td>
		</tr>
		<tr>
			<td>Fecha de Registro:</td>
			<td>
				<?php echo $productos['Fecha_Registro']; ?>
			</td>
		</tr>	
		<tr>
			<td>Detalles:</td>
			<td><?php echo $productos['Detalles']; ?></td>
		</tr>	
		<tr>
			<td>Foto :</td>
			<td><?php echo'<img src="../../Fotos/'.$productos['Foto'].'" class="u-full-width" width="120px" height="120px">';?><td>
		</tr>
		<br>	
		
			
	</table>
</form>
</body>
</html>
<?php mysqli_close($miconexion);?>