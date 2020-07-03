<?php



include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO detalle_ruta select * from detalle_rutatemp";


$conexion->query($query);
$queryb = "DELETE FROM detalle_rutatemp";


$conexion->query($queryb);
?>
  <script type="application/ecmascript" >

   alert("Productos añadidos" );
</script>
<?php

header("Location: listadesalida.php");



?>