<?php
session_start();
require('../php/conexion.php');
require('../php/ValidaCliente.php');

//Validando Carrito
$Contador = 0;
    if(isset($_SESSION['carrito'])) 
    {
        if ($_SESSION['carrito']==false){

            //Dejamos el carrito vacio
            $carrito=false;
        }
        else {
            $Contador=count($_SESSION['carrito']);
            $carrito=$_SESSION['carrito'];
        } 
    }
    else{
        $carrito = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <link rel="stylesheet" type="text/css" href="ListaCompras.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/EstiloH.css">
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
                <a href="Perfil.php">Tu Cuenta</a>                
                <a href="MisCompras.php" style="color:black; font-family:sans-serif;">Mis Compras</a>
                <a href="ProductosCliente.php" style="color:black; font-family:sans-serif;">Tienda En Linea</a>        
            </nav>
        </header>
        <div>
            <a href="../php/salir.php"><img src="../Fotos/LogOutBlue.png" width="65px" height="65px" align="Left"></a>   
        </div>

        <div class="six-columns">
            <div class="contenido-hero">
                <h2 style="font-weight: bold;">Selecciona tu Juguete favorito</h2>
                <p style="font-weight: bold;">Todos los juguetes con Descuento</p>
            </div>
        </div>

        <table>
            <thead>         
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Detalles</th>
                <th>Foto</th>
                <th></th>
                <th><a href="VerCarrito.php"><img src="../Fotos/CarroLogo.png" width="60px" height="60px"></a><p style="font-size: 14px; color: black; text-align: center;" >Ver Carrito <?php echo "(".$Contador.")"?></p></th>                   
            </thead>
        <tr>    
        <?php                
            $sql="Select * from productos order by Nombre_Producto";
            $productos=mysqli_query($conectado,$sql);
            while($filas=mysqli_fetch_array($productos))
            {
                echo "<tr>";
                echo "<td>".$filas['Nombre_Producto']."</td>";
                echo "<td>$".$filas['Precio']."</td>";
                echo "<td>".$filas['Detalles']."</td>";
                echo "<td>";
                echo "<img src='../Fotos/".$filas['Foto']."' width='150px' height='150px'/>";
                echo "</td>";

                 //Validando Si producto ya esta en el carrito
                if(!$carrito || !isset($carrito[md5($filas['idProductos'])]['identificador']) || $carrito[md5($filas['idProductos'])]['identificador']!=md5($filas['idProductos']))
                {
                    echo '<td colspan=2 ><a href="AddCart.php?id='.$filas['idProductos'].'&origen=t"><img src="../Fotos/AddCart.png" alt="Agregar al carrito" width="100px" height="100px"/></td></a>';                                             
                }
                else{
                    echo '<td colspan=2><a href="DeleteCart.php?id='.$filas['idProductos'].'&origen=t"><img src="../Fotos/DeleteCart.png" alt="Quitar del carrito" width="115px" height="115px"/></a></td>';
                }
                    
                echo "</tr>";
                }
        ?>
        </tr>
    </table>
    <br>     

        <footer>

            <div class="container-footer-all">
                <div class="container-body">
                    <!--Logo Empresa-->
                    <div class="empresa">
                        <a href="MenuCliente.html">
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
