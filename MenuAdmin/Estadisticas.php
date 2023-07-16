<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Estadisticas</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <nav>
                <a href="MenuAdmin.php">Inicio</a>                               
                <a href="Avance.php">Avances</a>
                <a href="Formularios.php">Formularios</a>
                <a href="Listados.php">Mantenimientos</a>
                <a href="Grupo.php">Informacion del Grupo</a>
                <a href="Perfil.php">Tu Cuenta</a>
                <a href="Estadisticas.php" style="color: #123802;">Estadisticas</a>
            </nav>
</header>
    <div align="right">
        <a href="../php/salir.php"><img src="../images/Logout.png" width="65px" height="65px"></a>        
    </div>

    <div id="lista-cafe" class="container"> 
            <h1 id="encabezado" class="encabezado">Reportes - Graficas - Estadisticas</h1>
            <div class="row">
                <div class="four columns">
                    <a href="Ventas.php" style="text-decoration: none;">
                        <div class="card">
                            <img src="../Fotos/VentasRep.png" class="u-full-width" height="269px">
                            <p>Registro De Ventas</p>
                        </div>
                    </a>
                </div>
                <div class="four columns">
                    <a href="Reportes.php" style="text-decoration: none;">
                        <div class="card">
                            <img src="../Fotos/printer.png" class="u-full-width" height="269px">
                            <p>Reportes</p>
                        </div>
                    </a>
                </div>
                <div class="four columns">
                    <a href="graficos.php" style="text-decoration: none;">
                        <div class="card">
                            <img src="../Fotos/Graficas.png" class="u-full-width" height="269px">
                            <p>Estadisticas</p>
                        </div>
                    </a>
                </div>
            </div>
    </div>
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

<body>

</body>
</html>