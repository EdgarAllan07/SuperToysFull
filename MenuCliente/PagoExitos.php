<?php
session_start();
require('../php/ValidaCliente.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pago Exitoso</title>
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
	<h1>PAGO REALIZADO CON EXITO<br></h1>
	<h2>GRACIAS POR SU COMPRA<h2>
</p>
<meta http-equiv="refresh" content="2; url=ProductosCliente.php">

</body>
</html>