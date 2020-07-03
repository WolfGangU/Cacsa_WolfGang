<?php
EliminarClienteFisico($_GET['id'] );

function EliminarClienteFisico($id_fisico){
include '../conexion.php';
 $sentencia="DELETE FROM personas WHERE id_persona='".$id_fisico."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../verclientesfisicos.php';

</script>