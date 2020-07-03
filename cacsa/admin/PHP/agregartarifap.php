<?php

$nombrl=$_POST["nombrl"];
$Lugar=$_POST["Lugar"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO tarifas (id_lugar,precio) values ('$Lugar','$nombrl')";


$conexion->query($query);

header("Location: ../listadetarifas.php");



?>
