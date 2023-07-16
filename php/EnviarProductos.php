<?php
require('Base.php');

$Nom=$_POST['txtNombre'];
$Pre=$_POST['txtPrecio'];
$Can=$_POST['txtCantidad'];
$Dia=$_POST['Fecha'];
$Pro=$_POST['txtProveedor'];
$Mar=$_POST['txtMarca'];
$Cat=$_POST['slcCategoria'];
$Det=$_POST['txtDetalles'];
$Fot=$_FILES['Foto']['name'];
$Directorio='../Fotos/';


$sql="Insert into productos(Nombre_Producto, Precio, Cantidad, Fecha_Registro, Proveedor, Marca_Producto, Categoria, Detalles, Foto) values ('$Nom', $Pre, $Can, '$Dia', '$Pro', '$Mar', '$Cat', '$Det', '$Fot')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body bgcolor="#FEE899">
    <center style="font-size: 30px";>
        <b>
            <?php
                $consulta = mysqli_query($miconexion,$sql);

				if($consulta)
				{
					echo "Producto Ingresado Exitosamente!!";
					echo "<br>";
					echo "<a href='../MenuAdmin/producto.html'>Continuar</a>";
					echo '<br><img src=../images/exito.gif>';
					//Validando si existe foto
				
					if ($Fot != '' ){
						$tipo = $_FILES['Foto']['type'];
						$Archivo = $_FILES['Foto']['tmp_name'];
						$Destino=$Directorio.$Fot;
						copy($Archivo,$Destino);
					}
				
				}
				else
				{
					echo "Transaccion fallida <br> Intente de nuevo <br>";
					echo $sql;
					echo "<br>";
					echo "<a href='../MenuAdmin/producto.html'>Continuar</a>";
				}
				
				mysqli_close($miconexion);
            ?>
        </b>
    </center>
</body>
</html>
