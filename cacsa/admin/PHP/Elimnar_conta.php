<?php
EliminarOp($_GET['id'] );

function EliminarOp($id_op){
include '../conexion.php';
 $sentencia="DELETE FROM bloc_notas WHERE id_bloc='".$id_op."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../vercontactos.php';

</script>