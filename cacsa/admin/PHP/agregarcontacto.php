<?php
$namec=$_POST["namec"];
$email1c=$_POST["email1c"];
$phone1c=$_POST["phone1c"];
$notac=$_POST["notac"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO bloc_notas (nombre_conta,telefono_conta,email_conta,nota) values ('$namec','$phone1c','$email1c','$notac')";


$conexion->query($query);

header("Location: ../vercontactos.php");



?>
