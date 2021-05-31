<?php
include("conect.php");
$link=conectarse();
$cont=1;
$sql="select * from venta_secundaria";
$resolv=mysqli_query($link,$sql);
$cant=$_POST['txtCan'];
$preci=$_POST['txtPrec'];
$subtot=$cant*$preci;
$sql="insert into venta_secundaria(id_vent_sec,id_prod,cant_prod,prec_unit,prec_tp,nom_prod)
values (
'1'
,'".$_POST['txtId']."'
,'".$_POST['txtCan']."'
,'$preci'
,'$subtot'
,'".$_POST['txtNom']."')";
mysqli_query($link,$sql);
header("Location:productos.php");
?>