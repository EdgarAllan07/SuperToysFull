<?php
//Capturando datos del formulario
$nom=$_POST['nombres'];
$tel=$_POST['telefono'];
$email=$_POST['correo'];
$men=$_POST['mensaje'];

require("conexion.php");

$sql="Insert into contactos(Nombre, Telefono, Correo, Mensaje)
values ('$nom', '$tel', '$email', '$men')";

$resultado=mysqli_query($miconexion,$sql);
if($resultado)
{
	echo "Agradecemos su mensaje, le contactaremos en la brevedad posible";
		echo "<a href='Index.html'> Continuar</a>";
}
else
{
	echo "No se envio el mensaje ";
	echo $sql;
}
mysqli_close($miconexion)
?>