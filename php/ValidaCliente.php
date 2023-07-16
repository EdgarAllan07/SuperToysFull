<?php
if(!isset($_SESSION['vsCodigo'])){
	header('location:../Login.html');
}
if($_SESSION['vsTipo']!='Cliente'){
	header('location:../Login.html');
}
?>