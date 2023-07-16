<?php
require('Conexion.php');
$codigo = $_POST['codigo'];
$Nom=$_POST['txtNombre'];
$Pre=$_POST['txtPrecio'];
$Can=$_POST['txtCantidad'];
$Dia=$_POST['Fecha'];
$Mar=$_POST['txtMarca'];
$Cat=$_POST['slcCategoria'];
$Det=$_POST['txtDetalles'];
$Fot=$_FILES['Foto']['name'];
$Directorio='../Fotos/';


if($Fot ==''){
	//si no selecciono nueva foto
	$sql ="update productos set Nombre_Producto='$Nom',Precio='$Pre',Cantidad='$Can',Fecha_Registro='$Dia',Marca_Producto ='$Mar',Detalles='$Det',Categoria='$Cat' where idProductos = '$codigo'";

}else{
	//si selecciono nueva foto
	$sql ="update productos set Nombre_Producto='$Nom',Precio='$Pre',Cantidad='$Can',Fecha_Registro='$Dia',Marca_Producto ='$Mar',Detalles='$Det',Categoria='$Cat', foto='$Fot' where idProductos = '$codigo'";
}
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
					echo '<meta http-equiv="refresh" content="3; url=mantoproductos.php">';
					echo '<br><img src=images/exito.gif>';
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
					echo '<meta http-equiv="refresh" content="3; url=mantoproductos.php">';
				}
				
				mysqli_close($miconexion);
            ?>
        </b>
    </center>
</body>
</html>
