<?php
EliminarOp($_GET['id'] );

function EliminarOp($id_op){
include '../conexion.php';
 $sentencia="UPDATE plantilla_lab SET est_pla=0 WHERE id_plant='".$id_op."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../listadeplantillalab.php';

</script>