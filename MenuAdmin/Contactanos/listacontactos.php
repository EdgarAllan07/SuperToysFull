

<!doctype html>
<html>
<head>
	<title>Registro de Contactos</title>
	<link rel = "stylesheet" type="text/css" href="./Listas.css">
</head>
<body>
	<header>
	<h1>Registro de Contactos</h1>
	</header>
<center>
<form name="Mantenimiento" action="./mantenimiento.php" method="post">
<table border="1">

<tr><td colspan="4"><label>Registrar de Contactos</label></td></tr>
<tr>
	<td><label>ID Contacto</label></td><td><input type="text" value="" maxlength="7" name="ID" required=""></td>
	<td><label>Nombre</label></td><td><input type="text" value="" maxlength="50" name="nombre" maxlength="2" size="10"></td>
</tr>
<tr>
	<td><label>Telefono</label></td><td><input type="text" value="" maxlength="9" name="telefono"></td>
		<td><label>Correo</label></td><td><input type="text" value="" maxlength="50" name="correo"></td>

</tr>
<tr>
		<td><label>Mensaje</label></td><td><input type="text" value="" maxlength="100" size="25" name="mensaje"></td>
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Insertar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>
<br><br><br>
	<table>
		<br><br>
		<thead>

			<th>ID Contacto</th>
			<th>Nombre del cliente</th>
			<th>Telefono del cliente</th>
			<th>Correo del cliente</th>
			<th>Mensaje</th>

		</thead>

		<tr>			
			<?php
			require("conexion.php");
			$sql="select * from contactos";
			$consulta=mysqli_query($miconexion,$sql);

			while($filas=mysqli_fetch_array($consulta)){
			
				echo '<tr>';
				echo '<td>'.$filas['idContactos'].'</td>';
				echo '<td>'.$filas['Nombre'].'</td>';
				echo '<td>'.$filas['Telefono'].'</td>';
				echo '<td>'.$filas['Correo'].'</td>';
				echo '<td>'.$filas['Mensaje'].'</td>';	
			}
			?>
	</table>
	<center style="font-size: 30px";>
	<br><br>
		<a href="../../php/listacontactos.php"><img src="../../Fotos/Back.png" width="200px" height="60px"></a>
	</center>
</body>
</html>