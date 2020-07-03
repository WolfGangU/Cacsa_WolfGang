<?php

$codigo=$_POST["codigo"];
$descrip=$_POST["descrip"];
$estado=$_POST["estado"];
$Lugar=$_POST["Lugar"];
$cantidad=$_POST["cantidadp"];
$giro=$_POST["giro"];

include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO inventario (codigo,estado,descrip,id_lugar,id_giro,cantidad) values ('$codigo','$estado','$descrip','$Lugar','$giro','$cantidad')";


$conexion->query($query);

header("Location: ../verinventario.php");



?>
