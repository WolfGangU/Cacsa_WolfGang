<?php
EliminarRuta($_GET['id'] );

function EliminarRuta($id_ruta){
include '../conexion.php';
 $sentencia="UPDATE rutas set est_rut=0 WHERE id_ruta='".$id_ruta."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../listaderutas.php';

</script>