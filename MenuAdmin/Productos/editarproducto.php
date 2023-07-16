<?php
if (!isset($_GET['id'])) {
    header("location:mantoproductos.php");
}
require("Conexion.php");
$codigo = $_GET['id'];
$sql = "select * from productos where idProductos = '$codigo'";
$resultado = mysqli_query($miconexion,$sql);
$filas = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar</title>
        <link rel="stylesheet" href="css/formulario.css">
        <link rel="stylesheet" href="css/EstiloH.css">
    </head>
    <body>
        <br><br><br>

        <form name='FormProductos' action='actualizarproducto.php' method="Post" enctype="multipart/form-data" class="form-register">
            <h2 class="form-titulo">Actualizar Producto</h2>
            <div class="contenedor-inputs">
        <div class="container">
                <input type="hidden" name="codigo" value="<?php echo $filas['idProductos'];?>">
                <label for="nombre">Nombre del producto: </label><input type="text" name="txtNombre" placeholder="Nombre" tabindex="1" class="input input-2" value="<?php echo $filas['Nombre_Producto'];?>" required>                
        </div>
        <div class="container">
                <label for="precio">Precio: </label><input type="number" step="any" name="txtPrecio" placeholder="Precio" tabindex="1" class="input input-2" value="<?php echo $filas['Precio'];?>" required min="0.01">
                <label for="cantidad">Cantidad: </label><input type="number" name="txtCantidad" placeholder="Cantidad" tabindex="2" class="input input-2" required min="1" value="<?php echo $filas['Cantidad'];?>">
        </div>
        <div class="container">
            <label for="fecha">Fecha: </label><input type="date" name="Fecha" tabindex="1" class="input input-2" required value="<?php echo $filas['Fecha_Registro'];?>">
            
        </div>
        <div class="container">
                <label for="marca">Marca: </label><input type="text" name="txtMarca" placeholder="Marca" tabindex="4" class="input input-2" required value="<?php echo $filas['Marca_Producto'];?>">
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
                <label for="detalles">Detalles: </label><input type="text" name="txtDetalles" placeholder="Detalles del Producto" tabindex="4" class="detalle" required size="50" rows="4" cols="40" value="<?php echo $filas['Detalles'];?>"><br><br>
                <label>Imagen:</label>
              <?php echo'<img src="../../Fotos/'.$filas['Foto'].'" class="u-full-width" width="120px" height="120px">';?>
              <br>
                <input type="file" name="Foto" />
                </div>
                <br><br><br><br>
                <input type="submit" value="Actualizar" class="enviar" tabindex="8"/>                
            </div>
        </form>
        <br><br>
        <center style="font-size: 30px";>
          <a href="mantoproductos.php"><img src="../../Fotos/Back.png" width="200px" height="60px"></a>
        </center>

        <br><br><br><br><br>

        <footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <!--Logo Empresa-->
                    <div class="empresa">
                        <a href="MenuAdmin.html">
                        <img src="../../images/SLogo.png">
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
                        <img src="../../images/facebook.png" width="36px">
                    </a>
                    <a target="_blank" class="net" href="#">
                        <img src="../../images/instagram.png" width="36px">
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
            <script src="../../js/jquery-3.6.0.min.js"></script>
            <script src="js/script.js"></script>
    </body>

</html>
<?php
 mysqli_close($miconexion);
 ?>