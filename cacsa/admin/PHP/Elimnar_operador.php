<?php
EliminarOp($_GET['id'] );

function EliminarOp($id_op){
include '../conexion.php';
 $sentencia="UPDATE operadores SET est_op=0 WHERE id_operador='".$id_op."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../veroperadores.php';

</script>