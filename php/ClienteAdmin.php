<?php
    session_start();
    require('../php/ValidaAdmin.php');
    require 'Base.php';

    $nombre = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["Correo"];
    $direccion = $_POST["Dirección"];
    $telefono = $_POST["numero"];
    $sexo = $_POST["Sexo"];
    $contraseña = $_POST["contra"];
    $tipo = 'Cliente';
    
    $insertar = "INSERT INTO usuario(Nombre_Cliente,Apellido_Cliente,Correo,Direccion,Telefono,Sexo,Contraseña,Tipo_Usuario) 
    values ('$nombre','$apellidos','$correo','$direccion','$telefono','$sexo','$contraseña','$tipo')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body bgcolor="#FEE899">
    <center style="font-size: 30px";>
        <b>
            <?php
                $resultado = mysqli_query($miconexion, $insertar);
                if($resultado){
                    
                    header('location:../php/IngresoFormularioAdmin.php');
                    
                }
                else{
                    echo 'Error al registrarse';
                    echo '<br><a href="../MenuAdmin/MenuAdmin.php">Registrarse de nuevo</a>';
                }
                mysqli_close($miconexion);
            ?>
        </b>
    </center>
</body>
</html>



