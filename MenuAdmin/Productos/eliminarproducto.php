<?php 
if(!isset($_GET['id'])){
	header('location:login.html');
}
require('Conexion.php');
$codigo = $_GET['id'];

$sql = "update productos set estado = 'I' where idProductos='$codigo'";
$resultado = mysqli_query($miconexion,$sql);

if($resultado){
	header("location:mantoproductos.php");

}else{
	echo "Error el producto con el id ".$codigo." No fue encontrado";
	
}
echo '<meta http-equiv="refresh" content="3; url=mantoproductos.php">';
mysqli_close($miconexion);
?>