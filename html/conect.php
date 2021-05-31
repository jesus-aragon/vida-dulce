<?php
function conectarse()
{
if(!($link=mysqli_connect("localhost","root","escorpion23","miel")))
{
echo "error al conectar a la base de datos..!";
exit();
}

return $link;
}
?>