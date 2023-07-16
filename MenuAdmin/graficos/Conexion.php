<?php
$servidor ="127.0.0.1";
$base ="id17656739_mydb";
$usuario="root";//id17656739_root;
$contra="";//"DiseñoWebG07";

$miconexion = mysqli_connect($servidor,$usuario,$contra,$base);

if($miconexion){
	//echo"conexion completa";
}else{

	echo "Error al conectar la base de datos "; 
	echo "El error: ".mysqli_connect_error();
}

?>