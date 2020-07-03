<?php

$proyecto=$_POST["proyecto"];
$lugar=$_POST["lugar"];
$operador=$_POST["operador"];
$giro=$_POST["giro"];
$tipo_servicio=$_POST["tipo_servicio"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$estado_ruta=$_POST["estado_ruta"];
$subtotal=$_POST["subtotal"];
$iva=$_POST["iva"];
$total=$_POST["total"];
include ('conexion.php');
if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO rutas (id_orden,id_lugar,id_operador,id_giro,tipo_servicio,fecha_inicio,fecha_final,estado_ruta,subtotal,iva,total) VALUES ('$proyecto','$lugar','$operador','$giro','$tipo_servicio','$fecha_inicio','$fecha_final','$estado_ruta','$subtotal','$iva','$total')";

$conexion->query($query);

header("Location: ../listaderutas.php");



?>
