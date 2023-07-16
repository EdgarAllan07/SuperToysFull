<?php
    session_start();
    require('../../php/ValidaAdmin.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="./css/Dproducto.css">
</head>
<body>
	<center>
	<h1>Listado de productos</h1>	
	<table width="800" class="tabla" >
		<tr><td>ID</td>
			<td>Nombre del producto</td>
			<td>Imagen</td>
			<td colspan="4">Acciones</td>
		</tr>
		<tr><td colspan="6"><hr></td></tr>
		<tr>
			<?php
				
				require("Conexion.php");
				$sql = "select * from productos where estado='A' order by idProductos";
				$resultado = mysqli_query($miconexion,$sql);

				while ($filas =mysqli_fetch_array($resultado)) {
					echo "<tr>";
					echo "<td>".$filas['idProductos']."</td>";
					echo "<td>".$filas['Nombre_Producto']."</td>";
					//direccion donde guardamos las fotos
					echo '<td>','<img src="../../Fotos/'.$filas['Foto'].'" class="u-full-width" width="120px" height="120px">','</td>';

					$venta ='window.open("detalleproducto.php?id='.$filas['idProductos'].'","Consulta","width=600,height=600,left=300,top=100,menubar=no,scrollbars=no,toolbar=no,titlebar=no,resizable=no");';
					$eliminar = 'return confirm("¿Estas seguro que quieres eliminar este producto?")';
					echo "<td><a href='#' onclick='".$venta."'><img src='images/consultar.png' width='50'/></a></td>";
					echo "<td><a href='eliminarproducto.php?id=".$filas['idProductos']."' onclick='".$eliminar."''><img src='./images/borrar.png' width='50'/></a></td>";
					echo "<td><a href='editarproducto.php?id=".$filas['idProductos']."'><img src='./images/actualizar.png' width='50'/></a></td>";
				}

				
				mysqli_close($miconexion);
			?>
		</tr>
		
	</table>
	<br>

	<center style="font-size: 30px";>
          <a href="../../php/ListarProductos.php"><img src="../../Fotos/Back.png" width="200px" height="60px"></a>
    </center>
</center>
	
</body>
</html>