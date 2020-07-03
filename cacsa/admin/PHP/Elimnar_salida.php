<?php
EliminarSalida($_GET['id'] );

function EliminarSalida($id_orden){
include '../conexion.php';
 $sentencia="UPDATE orden_entrega SET est_ord_e=0 WHERE id_orden='".$id_orden."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../listadesalida.php';

</script>