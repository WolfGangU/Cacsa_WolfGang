<?php
EliminarVehi($_GET['id'] );

function EliminarVehi($id_vehi){
include '../conexion.php';
 $sentencia="DELETE FROM vehiculos WHERE id_vehiculo='".$id_vehi."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../listadevehiculos.php';

</script>