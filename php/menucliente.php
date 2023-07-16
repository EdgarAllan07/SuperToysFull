<?php
//Activar el uso de sesiones
session_start();
require('validacliente.php');
echo '<h1>Portal de Clientes</h1>';
echo 'Bienvenido '.$_SESSION['vsNombre'].$_SESSION['vsApellido'];
echo '| '.$_SESSION['vsTipo'];
echo '<meta http-equiv="refresh" content="5; url=../MenuCliente/MenuCliente.html">';
?>