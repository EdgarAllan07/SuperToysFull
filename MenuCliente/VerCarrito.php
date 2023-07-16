<?php 
session_start();
	if(isset($_SESSION['carrito']))
	$carrito=$_SESSION['carrito']; else $carrito=false;
?>
<html>
<head>
<title>Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="../css/TablasPagos.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/categorias.css">
<link rel="stylesheet" href="../css/normalize.css">
<meta charset="UTF-8">
</head>
<header class="header">
	<div class="container">
    	<div class="logo">
        	<a href="ProductosCliente.php"><img src="../images/SLogo.png" alt=""></a>
    	</div>
    	<hr>
   	</div>                               
</header>
<body>
	<h1 align="center">Detalles de tu compra</h1>	
<br>
<?php 
	if($carrito){
?>
<table>
<tr> 
<th align="center">Producto</th>
<th align="center">Precio</th>
<th align="center">Pedido</th>
<th align="center"></th>
<th align="center">Borrar</th>
<th align="center">Actualizar</th>
</tr>
<?php
$color=array("#ffffff","#F0F0F0");
$contador=0;
$suma=0;

foreach($carrito as $k => $v){
$subto=$v['cantidad']*$v['precio'];
$suma=$suma+$subto;
$contador++;
//Creo una variable de sesion y le asigno el total a pagar
$_SESSION['ValorPagar']=$suma;
?>
<form name="a<?php echo $v['identificador'] ?>" method="post" action="AddCart.php?<?php 
echo SID ?>&id=<?php echo $v['identificador'] ?>&origen=v">
<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
<td><?php echo $v['producto'] ?></td>
<td><?php echo "$".$v['precio'] ?></td>
<td width="43" align="center"><?php echo $v['cantidad'] ?></td>
<td width="136" align="center"> 
<input name="cantidad" type="number" id="cantidad" placeholder="Cantidad" min="1" max="3" style="width: 110px;"/>
<input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
<td align="center"><a href="DeleteCart.php?<?php echo SID ?>&id=<?php echo $v['id'] 
?>&origen=v"><img src="../Fotos/Borrar.png" width="40px" height="35px" border="0"></a></td>
<td align="center"> 
<input name="imageField" type="image" src="../Fotos/UpDate.png" width="40px" height="35px" 
border="0"></td>
</tr></form>
<?php 
}
?>
</table>
<br>
<div align="center"><span class="prod"><h1>Total a Pagar: $<?php echo number_format($suma,2);
?></h1></span> 
</div><br><br>

<h6 style="text-align: center; font-size: 14pt;">Estimado Usuario: Debido a la temporada navideña y la alta demanda de juguetes, el maximo numero de articulos del mismo tipo permitido por compra es de 3.</h6>
<p align="center"><a href="ProductosCliente.php?<?php echo SID;?>">
<img src="../Fotos/Back.png" width="250px" height="80px"></a> 
</p>
<p align="center"> 
<a href="PagarCompra.php?<?php echo SID;?>">
<img src="../Fotos/PayNow1.png" width="350px" height="80px"></a> 
</p>
<?php }else{ 

	header('location:SinProductos.php');
?>
 
<?php }?>
</p>
</body>
</html>