<!DOCTYPE html>
<html lang="es">
<head>
	<title>SUEÑOS DE MIEL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/PRODUCTOS.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
</head>

</script>
<body>

<H1 align="center">"SUEÑOS DE MIEL"</H1>
<div id="header">
	<div class="logotipo">
         <img src="../imagenes/LOGO.png" width="100">
	</div>
	<ul class="nav">		
			   <li><a href="../index.html">INICIO</a></li>
			   <li><a href="productos.php">PRODUCTOS</a></li>
			   <li><a href="#">MIS COMPRAS</a></li>
	</ul>

</div><br><br><br>

<!--inicio seccion main-->
<?php
include("conect.php");
$link=conectarse();
$sql="select * from venta_secundaria";
$resolv=mysqli_query($link,$sql);
?>
<table border=1 bgcolor="#ffc107">
<tr>
<td>--ID VENTA--</td>
<td>ID PRODUCTO</td>
<td>NOMBRE</td>
<td>CANTIDAD</td>
<td>PRECIO UNITARIO</td>
<td>PRECIO TOTAL PRODUCTO</td>
<td>Funcion</td>
</tr>
<?php
$total=0;
$iva=0;
$totpro=0;
while($row=mysqli_fetch_row($resolv))
{
echo "<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[6]</td>
<td>$row[2]</td>
<td>$row[3]</td> 
<td>$row[4]</td>
<td><a href='borrarp.php?id_prod=$row[1]'>[CANCELAR PRODUCTO]</a></td> 
</tr>";
$total=$total+$row[4];
$iva=$iva+((($row[4]/$row[2])*0.16)*$row[2]);
$totpro=$totpro+$row[2];
}
echo"<tr><td>IVA TOTAL: $</td><td>$iva</td></tr>";
echo"<tr><td>TOTAL    : $</td><td>$total</td></tr>";
?>
</table>
<form method="post" action="ticket.php">
<input   type="hidden" name="totalv" value=<?php echo htmlentities("$total", ENT_QUOTES, 'utf-8') ?>>
<input   type="hidden" name="ivav" value=<?php echo htmlentities("$iva", ENT_QUOTES, 'utf-8') ?>>
<input   type="hidden" name="prodv" value=<?php echo htmlentities("$totpro", ENT_QUOTES, 'utf-8') ?>>
<input name="aceptar" type="submit" value="REALIZAR COMPRA"><br><br>
</form>

<footer>
	
	<p>Aragon Barrera Jesus Guadalupe</p><br>
	<p>Rivera Santos Noe</p><br>
</footer>
</body>
</html>