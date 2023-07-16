<?php
session_start();
extract($_REQUEST);

require('../php/conexion.php');
if(!isset($cantidad)){
	$cantidad = 1;	
}

$sql = "Select * from productos where idProductos='$id'";
$Agregar = mysqli_query($conectado,$sql);

$fila = mysqli_fetch_array($Agregar);

//Validar si ya existema items en el carrito
if(isset($_SESSION['carrito'])){
	$carrito=$_SESSION['carrito'];
}

//Agregar el producto al carrito por medio de un ArrayList
$carrito[md5($id)] = array('identificador'=>md5($id),
	'cantidad'=> $cantidad,
	'producto'=> $fila['Nombre_Producto'],
	'precio'=> $fila['Precio'],
	'id'=> $id);
 
$_SESSION['carrito'] = $carrito;

if($origen=='v'){

	header('location:VerCarrito.php');
}
else if ($origen=='t'){

	header('location:ProductosCliente.php');	
}

?>