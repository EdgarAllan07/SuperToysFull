<?php
    session_start();
    require('../php/ValidaCliente.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Historia</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/custom.css">
</head>
<header>
	<div class="barra">
		<a class="logo" href="MenuCliente.php"> <img src="../images/SLogo.png"> </a>
	</div>      
	
	   <nav>
	   		<a href="MenuCliente.php">Inicio</a>
            <a href="Historia.php">Historia</a> 
            <a href="Grupo.php">Informacion del Grupo</a>
            <a href="Contacto.php">Contactenos</a>
            <a href="Encuestas.php">Encuesta</a>               
            <a href="Perfil.php">Tu Cuenta</a>
            <a href="MisCompras.php" style="color:black; font-family:sans-serif;">Mis Compras</a>
            <a href="ProductosCliente.php" style="color:black; font-family:sans-serif;">Tienda En Linea</a>
	   </nav>
</header>
<p>
	<br>
    <a href="../php/salir.php"><img src="../images/Logout.png" width="65px" height="65px" align="Right"></a>   
</p>
<body class="historia">

	<table class="table" border="1" width="65%" height = "600" align="center" bgcolor="#D4EAE5 ">
		<tr>
			<td>
				<table border="0" width="95%" height="500" align="center" bgcolor="#FFFFFF ">
					<caption><font size="16" face="MarioNett">Histora de SuperToys</font></caption>
					<tbody><tr>
						<td>
								<p align="justify"><font face="Aero Matics" size="5">La juguetería SuperToys fue creada en 1994 después de los acuerdos de paz que fueron firmados el 16 de enero de 1992 dando así al fin del conflicto armado que llevo en El Salvador y muchos negocias habían quebrado en esos momentos o habían sido saqueados por la necesidad que había de suministro de alimentos o medicamentos, un ejemplo claro eran las maquiladoras que habían parado la producción debido a la guerra que se vivía en ese entonces.<br><br>En ese entonces un empresario salvadoreño llamado Ricardo Oscar Quintanilla Melara que era dueño de una maquila se veía abrumado por la cantidad de algodón y plástico que tenía en su posesión por la falta de producción que sufría su negocio, pero entonces decidió cambiar de negocio a los de juguetes debido que mientras paseaba por el centro del país vio un niño huérfano de la calle con su oso de peluche y ese momento se le ocurrió la idea de hacer peluches y  muñecos de plástico para niños de 6 a 13 años.<br><br>En 2005 Ricardo Quintanilla Melara aparte que crea su propio marca de juguetes SuperToys expande su negocio, comprando juguetes de diferentes marcas y compañías por ejemplo lego,Disney,Hot wheels,nerf,Fisher Price,etc. Dando a paso la variedad de juguetes que se pueden encontrar en sus diferentes tiendas en el país y en algunos países de Centroamérica.
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
					<a href="index.html">
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