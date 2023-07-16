<?php
include 'Base.php';

//Capturando datos del formulario
$nom=$_POST['nombres'];
$tel=$_POST['telefono'];
$email=$_POST['correo'];
$men=$_POST['mensaje'];

$sql="Insert into contactos(Nombre, Telefono, Correo, Mensaje) values ('$nom', '$tel', '$email', '$men')";
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
				$resultado=mysqli_query($miconexion,$sql);
				if($resultado)
				{
					echo "Agradecemos su mensaje, le contactaremos en la brevedad posible";
						
				}
				else
				{
					echo "No se envio el mensaje ";
					echo $sql;
					
				}
				
				echo '<br><a href="../contacto.html">Regresar</a>';
                echo '<br><br>';
                echo '<br><img src=../images/exito.gif>';
			mysqli_close($miconexion)
            ?>
        </b>
    </center>
</body>
</html>