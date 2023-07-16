<?php
    session_start();
    require('../php/ValidaCliente.php');

    $ID = $_SESSION['vsCodigo'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Compras</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/Listas.css">   
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">    
    <link rel="stylesheet" href="../css/categorias.css">
</head>
<header>
    <div class="barra">
        <a class="logo" href="MenuAdmin.php"> <img src="../images/SLogo.png"> </a>
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
<div align="right">
    <a href="../php/salir.php"><img src="../images/Logout.png" width="65px" height="65px"></a>        
</div>
<body>
    <table width="90%">
        <thead>
            <th>No. Factura</th>
            <th>Nombre</th>
            <th>Fecha de Compra</th>
            <th>Total</th>
            <th>Tarjeta</th>
            <th>Banco</th>                  
        </thead>
        <tr>            
            <?php
            require("../php/conexion.php");
            $sql="Select * from facturas where idCliente=$ID";
            $cliente=mysqli_query($conectado,$sql);
            $NumCompras=mysqli_num_rows($cliente);

            if($NumCompras>0){

                while($filas=mysqli_fetch_array($cliente))
                {
                    echo '<tr>';
                    echo '<td>'.$filas['idFactura'].'</td>';
                    echo '<td>'.$filas['Nombre_Cliente'].'</td>';
                    echo '<td>'.$filas['Fecha_Compra'].'</td>';
                    echo '<td>$'.$filas['Total'].'</td>';
                    echo '<td>'.$filas['TipoT'].'</td>';
                    echo '<td>'.$filas['BancoT'].'</td>';               
                    echo '</tr>';
                }

            }else
            {
                echo '<tr>';
                echo '<td colspan=6>Usted no ha realizado compras por el momento</td>';
                echo '</tr>';
            }

            
            ?>
    </table>
<br><br>
<p align="center"><a href="ProductosCliente.php?<?php echo SID;?>">   
<img src="../Fotos/Back.png" width="200px" height="60px"></a> 
</p>
</body>

</html>