<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!doctype html>
<html>
<head>
	<title>Mantenimiento Encuestas</title>
	<link rel = "stylesheet" type="text/css" href="../css/Listas.css">		
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/EstiloH.css">
</head>
<body>
<header>
	<div class="container">
        <div class="logo">
            <img src="../images/SLogo.png" alt="">
        </div>
    </div>
    <hr>
</header>			
	<div align="center">
	<h1>Mantenimiento de Encuestas</h1>
	</div>	
	<table>
		<thead>
			<th>ID Encuesta</th>
			<th>Nombre Cliente</th>
			<th>Compra</th>								
			<th>Calificacion Sitio</th>				
			<th>Pago Realizado</th>			
			<th></th>
			<th></th>
		</tr>			
		</thead>
		<tr>			
			<?php
			require("../php/conexion.php");
			$sql="Select * from encuesta";
			$encuestas=mysqli_query($conectado,$sql);
			while($filas=mysqli_fetch_array($encuestas))
			{
				echo '<tr>';
				echo '<td>'.$filas['idEncuesta'].'</td>';
				echo '<td>'.$filas['Nombre'].'</td>';				
				echo '<td>$'.$filas['Monto'].'</td>';								
				echo '<td>'.$filas['Calificacion'].'</td>';					
				echo '<td>'.$filas['Pago'].'</td>';
				echo '<td><a href="ListarEncuestas.php?id='.$filas['idEncuesta'].'">Ver Encuesta</a></td>';	

				$eliminar='return confirm("Esta seguro que quiere encuenta #'.$filas['idEncuesta'].'?");';	
					
				echo "<td><a href='EliminarEncuesta.php?id=".$filas['idEncuesta']."' onclick='".$eliminar."'>Eliminar</a></td>";	
				echo '</tr>';
			}
			?>
	</table>

	<center style="font-size: 30px">	
		<a href="../MenuAdmin/Listados.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>
	</center>
</body>
</html>