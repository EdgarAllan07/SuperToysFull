<?php
session_start();
    require('../php/ValidaAdmin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tienda</title>
	<link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/categorias.css">
</head>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="MenuAdmin.php"><img src="../images/SLogo.png" alt=""></a>                    
        </div>
    </div>
    <hr>
</header>
<body>
	<h2>
		Estimado Administrador: La tienda en linea es exclusiva para clientes.
	</h2>
	<br><br>
	<h3 align="center">
		Por favor cierre sesion e ingrese nuevamante con un perfil de cliente.
	</h3>
	<br><br>
	<div align="center">
		<a href="../MenuAdmin/MenuAdmin.php"><img src="../Fotos/Back.png" width="200px" height="60px"></a>		
	</div>
</body>
</html>