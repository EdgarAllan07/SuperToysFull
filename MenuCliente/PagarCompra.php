<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Pagos</title>
<link rel="stylesheet" type="text/css" href="../css/TablasPagos.css">
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/EstiloH.css">
<style type="text/css">
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
  	-webkit-appearance: none; 
  	margin: 0;
  	
}
</style>
</head>
<header>
	<div class="container">
        <div class="logo">
            <a href="ProductosCliente.php"><img src="../images/SLogo.png" alt=""></a>
        </div>
    </div>
    <hr>
</header>
<form name="frmAutorizar" action="GuardarPago.php" method="post">
<tbody>
<tr>
<td>
<div align="center">
<p width="242" height="154">
	<font color="#0255A4" size="3"><b> Valor a Pagar </font>
	<font color="#0255A4" size="4">$<?php echo $_SESSION['ValorPagar']; ?></b></font>
</p>
</div>
	<table style="width: 60%">
	<tr>
	   <td>
		<span><b>Nombre Cliente: </b></span>
	   </td>
	   <td>
		 <input type=text name="nomcliente" size="40" maxlength="50" readonly value="<?php echo $_SESSION['vsNombre']; echo" "; echo $_SESSION['vsApellido']; ?>">
	   </td>
	 </tr>		
	<tr>
	   <td>
		<span><b>Nombre titular tarjeta: </b></span>
	   </td>
	   <td>
		 <input type=text name="nombre" size="40" maxlength="50" required="">
	   </td>
	 </tr>
	 <tr>
	   <td>
		<span><b>Banco Emisor : </b></span> 
	   </td>
	   <td>
		 <input type=text name="emisor" size="40" maxlength="35" required=""></td>
	 </tr>
	 <tr>
	   <td>
		<span><b>Numero : </b></span> 
	   </td>
	   <td>
		<input type="number" name="num1" id="num1" placeholder="xxxx" min="4000" max="9999" required="" style="width: 60px;" />&nbsp-
		<input type="number" name="num2" id="num2" placeholder="xxxx" min="0000" max="9999" required="" style="width: 60px;" />&nbsp-
		<input type="number" name="num3" id="num3" placeholder="xxxx" min="0000" max="9999" required="" style="width: 60px;" />&nbsp-
		<input type="number" name="num4" id="num4" placeholder="xxxx" min="0000" max="9999" required="" style="width: 60px;"/>
	 </tr>
	 <tr>
	   <td>
		<span><b>Tipo : </b></span>
	   </td>
	   <td>
			<select size="1" name="tipo">
				<option selected>Visa</option>
				<option>Mastercard</option>
			</select>
			
	   </td>
	 </tr>
	 <tr>
	   <td>
		<span><b>Fecha Vencimiento : </b></span>
	   </td>
	   <td>
			<select size="1" name="mesv">
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>/
			<select size="1" name="aniov">
				<option>2022</option>
				<option>2023</option>
				<option>2024</option>
				<option>2025</option>
				<option>2026</option>
				<option>2027</option>
				<option>2028</option>
				<option>2029</option>
				<option>2030</option>
				<option>2031</option>				
			</select>
	   </td>	
	 <tr>
	   <td colspan=2>
		<p style="color:black;">
		  <span>Valores reflejados no incluyen IVA.</span></p>
			<input type="hidden" name="idcliente" value='<?php echo $idcliente; ?>'>
	   </td>
	</tr>
</table>
<br>
<div align="center">
	<input type="image" name="btnComprar" align="center" src="../Fotos/Paga1.png" width="350px" height="90px" />
</div>
</form>
<p align="center"><a href="VerCarrito.php?<?php echo SID;?>">	
<img src="../Fotos/Back.png" width="200px" height="60px"></a> 
</p>
</body>
</html>