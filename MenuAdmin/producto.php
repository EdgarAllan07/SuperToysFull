<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos</title>
        <link rel="stylesheet" href="../css/formulario.css">
        <link rel="stylesheet" href="../css/EstiloH.css">
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
        <br><br><br>

        <h1>Registrar Productos</h1>
        <form name='FormProductos' action='../php/EnviarProductosAdmin.php' method="Post" enctype="multipart/form-data" class="form-register">
            <h2 class="form-titulo">Registro de Productos</h2>
            <div class="contenedor-inputs">
        <div class="container">
                <label for="nombre">Nombre del producto: </label><input type="text" name="txtNombre" placeholder="Nombre" tabindex="1" class="input input-2" required>                
        </div>
        <div class="container">
                <label for="precio">Precio: </label><input type="number" step="any" name="txtPrecio" placeholder="Precio" tabindex="1" class="input input-2" required min="0.01">
                <label for="cantidad">Cantidad: </label><input type="number" name="txtCantidad" placeholder="Cantidad" tabindex="2" class="input input-2" required min="1">
        </div>
        <div class="container">
            <label for="fecha">Fecha: </label><input type="date" name="Fecha" tabindex="1" class="input input-2" required>
            <label for="proveedor">Proveedor: </label><input type="text" name="txtProveedor" placeholder="Proveedor" tabindex="2" class="input input-2" required>
        </div>
        <div class="container">
                <label for="marca">Marca: </label><input type="text" name="txtMarca" placeholder="Marca" tabindex="4" class="input input-2" required>
                <label for="categoria">Categoria: </label>
                <select name="slcCategoria" type="text" aria-placeholder="categoria" tabindex="4" class="input input-2" required>
					<option value='Disfraces'>Disfraces</option>
                    <option value='Bloques de Armar'>Bloques de Arma</option>
					<option value='Manualidades'>Manualidades</option>
					<option value='Montables'>Montables</option>
					<option value='Muñecas'>Muñecas</option>
					<option value='Peluches'>Peluches</option>														
				</select>
                </div>
        <div class="container">
                <label for="detalles">Detalles: </label><input type="text" name="txtDetalles" placeholder="Detalles del Producto" tabindex="4" class="detalle" required size="50" rows="4" cols="40"><br><br>
                <label>Imagen:</label>
                <input type="file" name="Foto" />
                </div>
                <br><br><br><br>
                <input type="submit" value="Registrar" class="enviar" tabindex="8"/>                
            </div>
        </form>

        <br><br><br><br><br>

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