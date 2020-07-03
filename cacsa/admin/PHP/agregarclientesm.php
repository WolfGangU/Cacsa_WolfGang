<?php

$no=$_POST["no"];
$name=$_POST["name"];
$comercial=$_POST["comercial"];
$name2=$_POST["name2"];
$lastname=$_POST["lastname"];
$no2=$_POST["no2"];
$name3=$_POST["name3"];
$lastname2=$_POST["lastname2"];
$no3=$_POST["no3"];
$address1=$_POST["address1"];
$email1=$_POST["email1"];
$phone1=$_POST["phone1"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO personas (rfc,nombre,comercial,tipo,nombre2,apellidos,RFC2,nombre3,apellidos2,RFC3,direccion_fiscal,email,telefono) values ('$no','$name','$comercial',2,'$name2','$lastname','$no2','$name3','$lastname2','$no3','$address1','$email1','$phone1')";


$conexion->query($query);

header("Location: ../verclientesmorales.php");



?>
