<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/PRODUCTOS.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<title class="tit">SUEÑOS DE MIEL</title>
	<meta charset="utf-8">
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
			   <li><a href="#">PRODUCTOS</a></li>
			   <li><a href="mis_compras.php">MIS COMPRAS</a></li>
	</ul>

</div><br><br><br>

<!--inicio seccion main-->
<form method="post" action="agre.php">
<body bgcolor=#ffff00>
<?php

include("conect.php");
$link=conectarse();
$sql="select * from productos";
$resolv=mysqli_query($link,$sql);
?>
<table border=3 bgcolor="#ffc107">
<tr>
<td>--ID--</td>
<td>Nombre</td>
<td>Precio</td>
<td>Existencias</td>
<td>Imagen</td>
<td>Ordenes</td>
</tr>

<?php
while($row=mysqli_fetch_row($resolv))
{
echo "<tr>
<td>$row[0]</td>
<td>$row[1]</td> 
<td>$row[3]</td> 
<td>$row[4]</td> 
<td><img src='../imagenes/$row[5]' width='70' height='70'></td> 
<td><a href='orden.php?id_prod=$row[0]'>[ORDENAR]</a></td> 
</tr>";
}
?>
</table>
</body>
</form>

<footer>
	
	<p>Aragon Barrera Jesus Guadalupe</p><br>
	<p>Rivera Santos Noe</p><br>
</footer>
</body>
</html>