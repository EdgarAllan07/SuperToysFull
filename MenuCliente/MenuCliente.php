<?php
    session_start();
    require('../php/ValidaCliente.php');
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cliente</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/categorias.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="MenuCliente.php"><img src="../images/SLogo.png" alt=""></a>
                </div>                
            </div>
            <nav>
                <a href="MenuCliente.php">Inicio</a>
                <a href="Historia.php">Historia</a> 
                <a href="Grupo.php">Informacion del Grupo</a>
                <a href="Contacto.php">Contactenos</a>
                <a href="Encuestas.php">Encuesta</a>               
                <a href="MisCompras.php" style="color:black; font-family:sans-serif;">Mis Compras</a>
                <a href="ProductosCliente.php" style="color:black; font-family:sans-serif;">Tienda En Linea</a>
            </nav>            
        </header>
        <div>
            <a href="../php/salir.php"><img src="../images/Logout.png" width="65px" height="65px" align="Right"></a>   
        </div>      

        <div id="lista-cafe" class="container"> 
            <h1 id="encabezado" class="encabezado">¡Lo mas destacado!</h1>
            
            <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="../images/bicicleta.jpg" class="u-full-width">
                        <div class="info-card">
                            <h4>Bicicleta Paw Patrol</h4>
                            <p>Marca Nickelodeon</p>
                            <p class="precio">$225 <span class="u-pull-right">$185.50</span></p>
                            <a href="ProductosCliente.php" class="u-full-width button-primary button input agregar-carrito">Ir a la tienda</a>                            
                        </div>

                    </div>

                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../images/patines.jpg" class="u-full-width">
                        <div class="info-card">
                            <h4>Combo de Patines</h4>
                            <p>Marca Duff</p>
                            <p class="precio">$120 <span class="u-pull-right">$99.99</span></p>
                            <a href="ProductosCliente.php" class="u-full-width button-primary button input agregar-carrito">Ir a la tienda</a>                            
                        </div>

                    </div>

                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../images/monopoly.webp" class="u-full-width">
                        <div class="info-card">
                            <h4>Monopoly</h4>
                            <p>Marca Junior</p>
                            <p class="precio">$30<span class="u-pull-right">$20.80</span></p>
                            <a href="ProductosCliente.php" class="u-full-width button-primary button input agregar-carrito">Ir a la tienda</a>                            
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="../images/carro.webp" class="u-full-width">
                        <div class="info-card">
                            <h4>Carro con Control</h4>
                            <p>Marca Better</p>
                            <p class="precio">$45.99<span class="u-pull-right">$32.25</span></p>
                            <a href="ProductosCliente.php" class="u-full-width button-primary button input agregar-carrito">Ir a la tienda</a>                            
                        </div>

                    </div>

                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../images/lego.jpg" class="u-full-width" height="269px">
                        <div class="info-card">
                            <h4>Lego 3 en 1</h4>
                            <p>Marca Creator</p>
                            <p class="precio">$85<span class="u-pull-right">$59.99</span></p>
                            <a href="ProductosCliente.php" class="u-full-width button-primary button input agregar-carrito">Ir a la tienda</a>                            
                        </div>

                    </div>

                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../images/lady.jpg" class="u-full-width" height="293px"> 
                        <div class="info-card">
                            <h4>Set de LadyBug</h4>
                            <p>Marca Miraculus</p>
                            <p class="precio">$41.99<span class="u-pull-right">$21.99</span></p>
                            <a href="ProductosCliente.php" class="u-full-width button-primary button input agregar-carrito">Ir a la tienda</a>                            
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <!--Logo Empresa-->
                    <div class="empresa">
                        <a href="./MenuAdmin.html">
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
 
