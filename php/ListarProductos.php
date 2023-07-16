<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!doctype html>
<html>
<head>
	<title>Productos</title>
	<link rel = "stylesheet" type="text/css" href="../css/Listas.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/categorias.css">	
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="../MenuAdmin/Listados.php"><img src="../images/SLogo.png" alt=""></a>
        </div>
    </div>
    <hr>
</header>			
	<div>
	<h2>Registro de Productos</h>
	</div>	
	<table>
		<thead>
			<th>ID Producto</th>
			<th>Nombre del Producto</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Proveedor</th>
			<th>Fecha de Registro</th>
			<th>Marca del Producto</th>
			<th>Categorias</th>
			<th>Detalles</th>
			<th>Foto</th>
			<th></th>
		</tr>			
		</thead>
		<tr>	
		<?php
				require("conexion.php");
				$sql="Select * from productos";
				$productos=mysqli_query($conectado,$sql);
				while($filas=mysqli_fetch_array($productos))
				{
					echo '<tr>';
					echo '<td>'.$filas['idProductos'],'</td>';
					echo '<td>'.$filas['Nombre_Producto'],'</td>';
					echo '<td>'.$filas['Precio'],'</td>';
					echo '<td>'.$filas['Cantidad'],'</td>';
					echo '<td>'.$filas['Proveedor'],'</td>';
					echo '<td>'.$filas['Fecha_Registro'],'</td>';
					echo '<td>'.$filas['Marca_Producto'],'</td>';
					echo '<td>'.$filas['Categoria'],'</td>';
					echo '<td>'.$filas['Detalles'],'</td>';
					echo '<td>','<img src="../Fotos/'.$filas['Foto'].'" class="u-full-width" width="120px" height="120px">','</td>';
					echo '<td>','<a href="../MenuAdmin/Productos/mantoproductos.php">Mantenimiento</a>','</td>';
					echo '</tr>';
				}
		?>
		</tr>
	</table>
	<center style="font-size: 30px";>
	<br>
		<a href="../MenuAdmin/Listados.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>
	</center>
</body>
</html>

