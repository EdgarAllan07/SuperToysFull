<?php
if (!isset($_GET['id'])){
	header('location:Login.html');
}

require('../php/conexion.php');

$codigo = $_GET['id'];
$sql = "Delete from encuesta where idEncuesta=$codigo";
$resultado = mysqli_query($conectado,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/EstiloH.css">
</head>
<header>
	<div class="container">
        <div class="logo">
            <img src="../images/SLogo.png" alt="">
        </div>
    </div>
    <hr>
</header>
<body>

<?php 

if($resultado){

	echo "<h2>Encuesta ".$codigo." Eliminada Exitosamente!!</h2>";
	echo "<br><br>";
	echo '<meta http-equiv="refresh" content="2; url=MantenimientoEncuestas.php">';
}

else{
	
	echo "<h2>Encuesta ".$codigo." No Eliminada!!</h2>";
	echo "<br><br>";
	echo '<meta http-equiv="refresh" content="2; url=MantenimientoEncuestas.php">';
}

mysqli_close($conectado);

?>

</body>
</html>