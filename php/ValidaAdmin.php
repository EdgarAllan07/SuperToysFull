<?php
if(!isset($_SESSION['vsCodigo'])){
	header('location:../Login.html');
}
if($_SESSION['vsTipo']!='Admin'){
	header('location:../Login.html');
}
?>