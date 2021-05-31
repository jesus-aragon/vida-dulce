<html>
<head><title>VENTAS</title></head>
<body bgcolor=#ffff00>
<?php
include("conect.php");
$link=conectarse();
$sql="select * from productos";
$resolv=mysqli_query($link,$sql);
?>
<?php
while($row=mysqli_fetch_row($resolv))
{
$row[0];
if($row[0]==$_REQUEST['id_prod']){
	 $nombre=$row[1];
     $precio=$row[3];
     $exist=$row[4];
     $imag=$row[5];
}
}
?>
<form name="form1" method="post" action="agre.php">
<br><br><br><br><br><br><br><br><br><br>

<hr>
<p align="center"> CANTIDAD:
<input type="text" name="txtCan"><br> <br><br>
<input type="submit" name="aceptar" value="ACEPTAR"></p>
<hr>

<input  type="hidden" name="txtId" value=<?php echo htmlentities($_REQUEST['id_prod'], ENT_QUOTES, 'utf-8') ?>>
<input  type="hidden" name="txtNom" value=<?php echo htmlentities($nombre, ENT_QUOTES, 'utf-8') ?>>
<input  type="hidden" name="txtPrec" value=<?php echo htmlentities($precio, ENT_QUOTES, 'utf-8') ?>>
<input  type="hidden" name="txtExis" value=<?php echo htmlentities($exist, ENT_QUOTES, 'utf-8') ?>>
<input  type="hidden" name="txtImg" value=<?php echo htmlentities($imag, ENT_QUOTES, 'utf-8') ?>>

</form>
</table>
<a href="productos.php"><center><p align="center">CANCELAR PRODUCTO</p></center></a>
</body>
</html>