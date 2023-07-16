<?php
if (!isset($_GET['id'])){
	header('location:../Login.html');
}

$encuesta=$_GET['id'];
?>
<!doctype html>
<html>
<head>
	<title>Registro de Encuestas</title>
	<link rel = "stylesheet" type="text/css" href="../css/Listas.css">	
</head>
<body>			
	<header>
	<h1>Detalle de Encuesta</h1>
	</header>	
	<table>
		<thead>
			<th>ID Encuesta</th>
			<th>Nombre Cliente</th>
			<th>Edad Cliente</th>
			<th>Fecha de Compra</th>
			<th>Monto de Compra</th>
			<th>Nuestros Precios</th>
			<th>Genero</th>
			<th>Encontrar Productos</th>
			<th>Calida Productos</th>
			<th>Te gustaron los juguetes</th>
			<th>Color Favorito</th>
			<th>Calificacion Sitio</th>
			<th>Facil Navegacion</th>
			<th>Te gusto el sitio</th>
			<th>Pago Realizado</th>
			<th>Comentarios Adicionales</th>
			<th>Fallas Tecnicas</th>			
		</tr>			
		</thead>
		<tr>			
			<?php
			require("../php/conexion.php");
			$sql="Select * from encuesta where idEncuesta = $encuesta";
			$encuestas=mysqli_query($conectado,$sql);
			while($filas=mysqli_fetch_array($encuestas))
			{
				echo '<tr>';
				echo '<td>'.$filas['idEncuesta'].'</td>';
				echo '<td>'.$filas['Nombre'].'</td>';
				echo '<td>'.$filas['Edad'].'</td>';
				echo '<td>'.$filas['Fecha'].'</td>';
				echo '<td>$'.$filas['Monto'].'</td>';
				echo '<td>'.$filas['Precio'].'</td>';
				echo '<td>'.$filas['Genero'].'</td>';
				echo '<td>'.$filas['Encontrar'].'</td>';
				echo '<td>'.$filas['Calidad'].'</td>';
				echo '<td>'.$filas['Gustar'].'</td>';
				echo '<td>'.$filas['Color'].'</td>';
				echo '<td>'.$filas['Calificacion'].'</td>';
				echo '<td>'.$filas['Navegar'].'</td>';
				echo '<td>'.$filas['Pagina'].'</td>';
				echo '<td>'.$filas['Pago'].'</td>';
				echo '<td>'.$filas['Comentario'].'</td>';
				echo '<td>'.$filas['Fallas'].'</td>';					
				echo '</tr>';
			}
			mysqli_close($conectado);
			?>
	</table>

	<center style="font-size: 30px";>
	<br><br>
		<a href="MantenimientoEncuestas.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>
	</center>
</body>
</html>