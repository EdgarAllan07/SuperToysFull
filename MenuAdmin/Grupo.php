<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grupo</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/custom.css">
</head>
<header>
	<div class="barra">
		<a class="logo" href="MenuAdmin.php"> <img src="../images/SLogo.png"> </a>
		
	</div>      
	
	   <nav>
			<a href="MenuAdmin.php">Inicio</a>
            <a href="MenuAdmin.php">Inicio</a>                               
            <a href="Avance.php">Avances</a>
            <a href="Formularios.php">Formularios</a>
            <a href="Listados.php">Mantenimientos</a>
            <a href="Grupo.php">Informacion del Grupo</a>
            <a href="Perfil.php">Tu Cuenta</a>
            <a href="Estadisticas.php" style="color: #123802;">Estadisticas</a>
	   </nav>
</header>
<br>
<div align="right">
    <a href="../php/salir.php"><img src="../images/Logout.png" width="65px" height="65px"></a>        
</div>
<body class="info">

	<table class="table" border="1" width="65%" height = "600" align="center" bgcolor="#D4EAE5 ">
		<tr>
			<td>
				<table border="0" width="95%" height="500" align="center" bgcolor="#FFFFFF ">
					<caption><font size="16" face="MarioNett">Información del Grupo</font></caption>
					<tbody><tr>
						<td>
								<p align="justify"><font face="Aero Matics" size="5">
                                    <p style="padding-left:20px;"> 25-5714-2015 </p><p> Jonathan Alexander Cuellar Lopez </p><p> <br> 
                                    <p style="padding-left:20px;"> 25-4537-2019	</p><p> Edwin Ricardo Valencia Ramirez</p> <br>
                                    <p style="padding-left:20px;"> 27-2863-2016 </p><p> Kevin Alexander Nerio Romero</p> <br>
                                    <p style="padding-left:20px;"> 15-5641-2016 </p><p>	Katherine Judith Benitez Flores</p> <br>
                                    <p style="padding-left:20px;"> 15-6145-2012 </p><p>	Yajairo Rodiney Díaz Galdámez</p> <br>
                                    <p style="padding-left:20px;"> 25-2565-2020 </p><p>	Edgar Allan Bonilla Saravia </p>
                                    
								</font></p>	
						</td>
					</tr>
				</tbody>
        </table>
			</td>
		</tr>
	</table>
	<footer>
		<div class="container-footer-all">
			<div class="container-body">
				<!--Logo Empresa-->
				<div class="empresa">
					<a href="MenuAdmin.html">
					<img src="../images/SLogo.png">
					</a>
				</div>
				<!--Servicios-->
				<div class="servicios">
				<h6> Servicios </h6>
				<ul class="datos">
					<li class="op">
					  <a href="#">Mi cuenta</a>
					</li>
					<li class="op">
					  <a href="#">Tus Ordenes</a>
					</li>
					<li class="op">
					  <a href="#">Contáctenos</a>
					</li>
					<li class="op">
					  <a href="#">Información de envíos</a>
					</li>
					<li class="op">
					  <a href="#">Términos de Uso</a>
					</li>
				</ul>
				</div>   
				<!--Información-->
				<div class="atencion">
					<h6> Dirección </h6>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste optio natus fugit quos, ad voluptate minus maiores est, sint laboriosam eveniet dolorum deleniti sapiente. Mollitia aperiam sunt recusandae porro voluptatum.
					</p>
				</ul class="dire">
				<h6> Horarios de Atención </h6>
				<ul class="horario">
					<li>
						Lunes a Viernes: 8:00 am - 7:00 pm
					</li>
					<li>
						Sábado: 9:00 am - 6:00 pm    
					</li>
					<li>
						Domingo: 9:00 am - 4:00 pm  
					</li>
				</ul>    
				</div>
				<!--Redes Sociales-->
				
				<div class="redes">
					<h6>Contactanos</h6>
				<a target="_blank" class="net" href="#">
					<img src="../images/facebook.png" width="36px">
				</a>
				<a target="_blank" class="net" href="#">
					<img src="../images/instagram.png" width="36px">
				</a>
				<p>
					WhastApp Tel: 8888-8888
				</p>
				<p>
					Sucursal Tel: 5478-8888
				</p>
				</div>
			</div>
		</div>
		<!--Derechos Reservados-->
		<div class="container-footer">
			<div class="copyright">
				© 2021 Todos los Derechos Reservados | <a href="#">SuperStoys</a>
			</div>
			<div>
				<div class="informacion">
					<a href="#">Información Compañia</a> |
					<a href="#">Privación y Politica</a> |
					<a href="#">Terminos y Condiciones</a> 
				</div>
			</div>
		</div>
		</footer>
		<script src="../js/jquery-3.6.0.min.js"></script>
		<script src="js/script.js"></script>
</body>
</html>