<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro Cliente</title>
	<link rel="stylesheet" href="../css/regcliente.css">
	
</head>
<body>

	<nav class="nave">            
            <a href="MenuAdmin.php">Inicio</a>                               
            <a href="Avance.php">Avances</a>
            <a href="Formularios.php">Formularios</a>
            <a href="Listados.php">Mantenimientos</a>
            <a href="Grupo.php">Informacion del Grupo</a>   
            <a href="Perfil.php">Tu Cuenta</a>
            <a href="Estadisticas.php" style="color: #123802;">Estadisticas</a>
	</nav>

	<form action="../php/ClienteAdmin.php" method="post">
	<section class="form-register">
		<h4>Registro de cliente</h4>
		Nombre:<input class="controls" type="text" required=""name= "nombres"id="nombres" placeholder="Ingrese su nombre aquí">
		Apellidos: <input class="controls" type="text" required=""name="apellidos" size="40" placeholder="Ingrese su apellido aquí">
		Correo:<input class="controls" type="email"required="" name= "Correo"id="Correo" placeholder="Ingrese su correo aquí">
		Dirección: <input class="controls" type="text" required="" name="Dirección" size="40" placeholder="Ingrese su Dirección">
		Teléfono: <input class="controls" type="numero" required="" pattern="[0-9]+" name="numero" size="8" placeholder="Ingrese su numero de Teléfono">
		
		Sexo: <select name="Sexo" >
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br><br>
        Ingrese contraseña: <input class="controls" name="contra" type="password" id="pass1" required><br><br>
        Tipo de Usuario: <select name="Tipo" disabled="">
            <option selected>cliente</option>
            <option>admin</option>
        </select><br><br>
  		
	  	<input class="botons" type="submit" value="Registrar">
	</section>
	</form>
	<br>
	<center><td align="center"><a href="MenuAdmin.php"><input type="submit" name="Log" value="Regresar" class="regresar"></a></center>
		<br><br>

		<footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <!--Logo Empresa-->
                    <div class="empresa">
                        <a href="MenuAdmin.php">
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
            

</body>
</html>