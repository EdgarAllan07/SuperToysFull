<?php
session_start();
if(isset($_REQUEST["Log"])){
	require('Base.php');
$correo = $_POST['User'];
$contra = $_POST['Contraseña'];


$sql = "select * from usuario where Correo = '$correo' and  Contraseña = '$contra'";
$resultado = mysqli_query($miconexion,$sql);
$existe = mysqli_num_rows($resultado);

	if($existe>0)
	{
		$arreglo = mysqli_fetch_array($resultado);
		$_SESSION['vsCodigo'] = $arreglo["idCliente"];
		$_SESSION['vsTipo'] = $arreglo["Tipo_Usuario"];
		$_SESSION['vsNombre'] = $arreglo["Nombre_Cliente"];
		$_SESSION['vsApellido']=$arreglo["Apellido_Cliente"];
		$_SESSION['vsCorreo'] = $arreglo["Correo"];
		$_SESSION['vsDireccion'] = $arreglo["Direccion"];
		$_SESSION['vsTelefono'] = $arreglo["Telefono"];
		$_SESSION['vsSexo'] = $arreglo["Sexo"];
		if($arreglo["Tipo_Usuario"] == 'Admin')
		{	
			header("location:../MenuAdmin/MenuAdmin.php");
		}else{
			header("location:../MenuCliente/MenuCliente.php");
		}
	}				
	else
	{
		echo '<center><h1>Usuario o Contraseña invalido</h1></center>';
		echo '<meta http-equiv="refresh" content="2; url=../login.html">';		
	}
}
else{

	header("location:../login.html");
}

	
?>