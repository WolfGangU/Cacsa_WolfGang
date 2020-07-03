<?php
EliminarGiro($_GET['id'] );

function EliminarGiro($id){
include '../conexion.php';
 $sentencia=" UPDATE personas SET est_per = 0 WHERE id_persona='".$id."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../verclientesmorales.php';

</script>