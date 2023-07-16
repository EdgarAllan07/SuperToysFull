<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!doctype html>
<html>
<head>
	<title>Clientes</title>
	<link rel = "stylesheet" type="text/css" href="../css/Listas.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/categorias.css">
	
</head>

<header class="header">
    <div class="container">
     	<div class="logo">
     		<a href="MenuAdmin.php"><img src="../images/SLogo.png" alt=""></a>
    	</div>
    </div>
    <hr>
</header>	
<body>
	<table>
		<thead>
			<th>ID Cliente</th>
			<th>Nombre Cliente</th>
			<th>Apellido Cliente</th>
			<th>Correo</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Genero</th>
			<th>Usuario Tipo</th>
			<th></th>
		</tr>			
		</thead>
		<tr>			
			<?php
			require("conexion.php");
			$sql="Select * from usuario";
			$cliente=mysqli_query($conectado,$sql);
			while($filas=mysqli_fetch_array($cliente))
			{
				echo '<tr>';
				echo '<td>'.$filas['idCliente'].'</td>';
				echo '<td>'.$filas['Nombre_Cliente'].'</td>';
				echo '<td>'.$filas['Apellido_Cliente'].'</td>';
				echo '<td>'.$filas['Correo'].'</td>';
				echo '<td>'.$filas['Direccion'].'</td>';
				echo '<td>'.$filas['Telefono'].'</td>';
				echo '<td>'.$filas['Sexo'].'</td>';
				echo '<td>'.$filas['Tipo_Usuario'].'</td>';
				echo '<td>','<a href="detallecliente.php?id='.$filas["idCliente"].'"> Mantenimiento </a>','</td>';
				echo '</tr>';
			}
			?>
	</table>

	<center style="font-size: 30px";>
	<br><br>
		<a href="../MenuAdmin/Listados.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>		
	</center>
</body>
</html>