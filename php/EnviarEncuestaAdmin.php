<?php
$Nom=$_POST['txtNombre'];
$Age=$_POST['txtEdad'];
$Date=$_POST['Fecha'];
$Monto=$_POST['txtMonto'];
$Pre=$_POST['slcPrecios'];
$Gen=$_POST['txtGenero'];
$Found=$_POST['txtStock'];
$Qua=$_POST['slcCalidad'];
$Disf=$_POST['slcDisfrutan'];
$Color=$_POST['txtColor'];
$Nota=$_POST['txtNota'];
$Nav=$_POST['txtNavi'];
$Pag=$_POST['txtPagina'];
$Pago=$_POST['txtPagos'];
$Com=$_POST['txtOtros'];
$Fail=$_POST['txtFallas'];


require('conexion.php');
$sql = "Insert into encuesta(Nombre, Edad, Fecha, Monto, Precio, Genero, Encontrar, Calidad, Gustar, Color, Calificacion, Navegar, Pagina, Pago, Comentario, Fallas) values ('$Nom',$Age,'$Date',$Monto,'$Pre','$Gen','$Found','$Qua','$Disf','$Color',$Nota,'$Nav','$Pag','$Pago','$Com','$Fail')";
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
                $resultado = mysqli_query($conectado,$sql);

				if($resultado)
				{
					header("location:../php/IngresoFormularioAdmin.php");
					
				}
				else
				{
					echo "Transaccion fallida <br> Intente de nuevo ";
					echo $sql;
					echo "<br><br>";
					echo "<br><a href='../MenuAdmin/Encuestas.php'><br>Continuar</a>";
				}
				
				mysqli_close($conectado);
            ?>
        </b>
    </center>
</body>
</html>