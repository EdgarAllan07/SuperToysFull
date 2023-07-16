<?php
session_start();
extract($_REQUEST);

//Extrar datos del carrito
$carrito = $_SESSION['carrito'];

//Borramos el item seleccionado
unset($carrito[md5($id)]);

//Guardamos la session actualizada
$_SESSION['carrito'] = $carrito;

if($origen=='v'){

	header('location:VerCarrito.php');
}
else if ($origen=='t'){

	header('location:ProductosCliente.php');	
}
?>