<?php
EliminarGiro($_GET['id'] );

function EliminarGiro($id){
include '../conexion.php';
 $sentencia="DELETE FROM usuarios_cacsa WHERE id='".$id."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../verusuarios.php';

</script>