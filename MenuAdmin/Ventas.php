<?php
    session_start();
    require('../php/ValidaAdmin.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte Ventas</title>
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
<body>
    <table width="90%">
        <thead>
            <th>ID Factura</th>
            <th>Nombre Cliente</th>
            <th>Fecha de Compra</th>
            <th>Total</th>
            <th>Tarjeta</th>
            <th>Banco</th>                  
        </thead>
        <tr>            
            <?php
            require("../php/conexion.php");
            $sql="Select * from facturas";
            $cliente=mysqli_query($conectado,$sql);
            while($filas=mysqli_fetch_array($cliente))
            {
                echo '<tr>';
                echo '<td>'.$filas['idFactura'].'</td>';
                echo '<td>'.$filas['Nombre_Cliente'].'</td>';
                echo '<td>'.$filas['Fecha_Compra'].'</td>';
                echo '<td>$'.$filas['Total'].'</td>';
                echo '<td>'.$filas['TipoT'].'</td>';
                echo '<td>'.$filas['BancoT'].'</td>';                
                //echo '<td>','<a href="detallecliente.php?id='.$filas["idCliente"].'"> Mantenimiento </a>','</td>';
                echo '</tr>';
            }
            ?>
    </table>
<br><br>
<p align="center"><a href="Estadisticas.php?<?php echo SID;?>">   
<img src="../Fotos/Back.png" width="200px" height="60px"></a> 
</p>
</body>

</html>