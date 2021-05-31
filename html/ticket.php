<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/PRODUCTOS.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<title class="tit">SUEÑOS DE MIEL</title>
	<meta charset="utf-8">
</head>

<body bgcolor=#cc9966>
	<CENTER>
<?php
include("conect.php");
$link=conectarse();
$sql="select * from venta_secundaria";
$resolv=mysqli_query($link,$sql);
?>
<H1>TICKET DE VENTA</H1><br><br><br><br><br>
<table border=1 bgcolor="#ffffff">
<tr>
<td>--ID--</td>
<td>Nombre</td>
<td>ID Producto</td>
<td>cantidad</td>
<td>Precio Unitario</td>
<td>Sub Total</td>
</tr>
<?php
$total=0;
$iva=0;
$totpro=0;
while($row=mysqli_fetch_row($resolv))
{
echo "<tr>
<td>$row[0]</td>
<td>$row[6]</td> 
<td>$row[1]</td>
<td>$row[2]</td> 
<td>$row[3]</td> 
<td>$row[4]</td>
</tr>";
$total=$total+$row[4];
$iva=$iva+((($row[4]/$row[2])*0.16)*$row[2]);
$totpro=$totpro+$row[2];
}
echo"<tr><td>IVA TOTAL: $</td><td>$iva</td></tr>";
echo"<tr><td>TOTAL    : $</td><td>$total</td></tr>";
?>
</table>
<a href="../index.html"><center><p>REALIZAR COMPRA</p></center></a>
</CENTER>
</body>
</html>

<?php
//vacio tabla unaventa
$sql="select * from venta_secundaria";
$resolv=mysqli_query($link,$sql);
while($row=mysqli_fetch_row($resolv))
{
	mysqli_query($link,"delete  from venta_secundaria where id_vent_sec='$row[0]'");
}
