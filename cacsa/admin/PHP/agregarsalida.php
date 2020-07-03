<?php

$proyecto=$_POST["proyecto"];
$lugar_entrega=$_POST["lugar_entrega"];
$operador=$_POST["operador"];
$persona=$_POST["persona"];



include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO orden_entrega (id_proyecto,id_persona,lugar_entrega,id_operador) values ('$proyecto','$persona','$lugar_entrega','$operador')";


$conexion->query($query);

 $b=mysqli_insert_id($conexion); 

header("Location: ../Productoscot.php?id=$b");



?>