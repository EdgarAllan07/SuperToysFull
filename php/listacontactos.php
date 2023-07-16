<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!doctype html>
<html>
<head>
	<title>Contactos</title>
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
	<h1>Registro de Contactos</h1>
	</div>	
	<table>
		<thead>
			<th>ID Contacto</th>
			<th>Nombre del cliente</th>
			<th>Telefono del cliente</th>
			<th>Correo del cliente</th>
			<th>Mensaje</th>
			<th></th>

		</thead>
		<tr>			
			<?php
			require("Base.php");
			$sql="select * from contactos";
			$consulta=mysqli_query($miconexion,$sql);

			while($filas=mysqli_fetch_array($consulta)){
			
				echo '<tr>';
				echo '<td>'.$filas['idContactos'].'</td>';
				echo '<td>'.$filas['Nombre'].'</td>';
				echo '<td>'.$filas['Telefono'].'</td>';
				echo '<td>'.$filas['Correo'].'</td>';
				echo '<td>'.$filas['Mensaje'].'</td>';	
				echo '<td>','<a href="../MenuAdmin/Contactanos/listacontactos.php"> Mantenimiento </a>','</td>';	
			}
			?>
	</table>
	<center style="font-size: 30px";>
	<br><br>
		<a href="../MenuAdmin/Listados.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>
	</center>

</body>
</html>