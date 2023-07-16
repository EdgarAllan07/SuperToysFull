<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro Ingresado</title>
	<link rel="stylesheet" href="../css/normalize.css">
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
<p align="center">
	<h1>FORMULARIO INGRESADO CON EXITO<br></h1>
	<h2>Espere a ser redireccionado<h2>
</p>
<meta http-equiv="refresh" content="2; url=../MenuAdmin/MenuAdmin.php">

</body>
</html>