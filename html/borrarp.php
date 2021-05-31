<?php
include("conect.php");
$link=conectarse();
mysqli_query($link,"delete  from venta_secundaria where id_prod=".$_REQUEST['id_prod']);
header("Location:mis_compras.php");
?>

