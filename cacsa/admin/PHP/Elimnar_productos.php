<?php
EliminarProducto($_GET['id'] );

function EliminarProducto($id_d){
include '../conexion.php';
 $sentencia="UPDATE inventario SET est_inv = 0 WHERE id_producto='".$id_d."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../verinventario.php';

</script>