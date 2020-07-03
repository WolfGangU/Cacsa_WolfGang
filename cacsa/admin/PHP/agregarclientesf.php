<?php

$no=$_POST["no"];
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$address1=$_POST["address1"];
$email1=$_POST["email1"];
$phone1=$_POST["phone1"];


include ('conexion.php');


if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO personas (rfc,nombre,tipo,apellidos,direccion_fiscal,email,telefono) values ('$no','$name',1,'$lastname','$address1','$email1','$phone1')";


$conexion->query($query);

header("Location: ../verclientesfisicos.php");



?>
