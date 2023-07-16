<?php

include("./conexion.php");

$id = $_POST["ID"];
$nom = $_POST["nombre"];
$tel = $_POST["telefono"];
$email = $_POST["correo"];
$men = $_POST["mensaje"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: ./listacontactos.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO contactos(idcontactos, nombre, telefono, correo, mensaje) values ('$id','$nom','$tel','$email','$men')";

if(mysqli_query($miconexion,$sqlgrabar))
{
	header("Location: ./listacontactos.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE contactos SET nombre='$nom',telefono='$tel',correo='$email',mensaje='$men' WHERE idcontactos=$id";

if(mysqli_query($miconexion,$sqlmodificar))
{
	header("Location: ./listacontactos.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM contactos WHERE idcontactos=$id";

if(mysqli_query($miconexion,$sqleliminar))
{
	header("Location: ./listacontactos.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['busqueda']))
	
	{
			$sqlbuscar = "SELECT * FROM contactos WHERE idcontactos=$id";

if(mysqli_query($miconexion,$sqlbuscar))
{
	header("Location: ./listacontactos.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>