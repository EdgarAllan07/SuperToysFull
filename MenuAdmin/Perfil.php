<?php
	session_start();
	require('../php/conexion.php');
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perfil ||Cliente||</title>
	<link rel="stylesheet" type="text/css" href="../css/perfil.css">
</head>
<body>
	<form action="Perfil.php" method="POST">

		<table border="1" width="700" height="180" align="center">
			<tr>
				<td ><center><img src="../images/user.jpg" width="50%"></center></td>
				<td width="80%"><p><center>
					<?php 
					
					echo "<font face ='Bahnschrift' size='14'>".$_SESSION['vsNombre']." ".$_SESSION['vsApellido']."</font>";
				?>
				</center></p></td>
				</tr>
			</table>
			<br>
			<table border="1" width="1000" height ="350" align="center">
				<tr >
					<td colspan="2"><p>Correo: <?php
						echo "<font face ='Bahnschrift' size='6'>".$_SESSION["vsCorreo"]."</font>";
					?></p></td>
				</tr>

				<tr >
					<td colspan="2"><p>Direccion: <?php
					echo "<font face ='Bahnschrift' size='6'>".$_SESSION["vsDireccion"]."</font>";
					?></p></td>
				</tr>

				<tr >
					<td colspan="2"><p>Telefono: <?php
						echo "<font face ='Bahnschrift' size='6'> ".$_SESSION["vsTelefono"]."</font>";
					?></p>
						
					</td>
				</tr>

				<tr >
					<td colspan="2"><p>Sexo: <?php
						echo "<font face ='Bahnschrift' size='6'> ".$_SESSION['vsSexo']."</font>";
					?></p></td>
				</tr>


		</table>
		<center style="font-size: 30px";>
	<br><br>
		<a href="../MenuAdmin/MenuAdmin.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>
	</center>
	</form>

</body>
</html>
