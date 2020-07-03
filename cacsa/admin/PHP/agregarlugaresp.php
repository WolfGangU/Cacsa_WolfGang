<?php

$nombrl=$_POST["nombrl"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO lugares (nombre_lugar) values ('$nombrl')";


$conexion->query($query);

header("Location: ../listadelugares.php");



?>
