<?php
EliminarClienteMoral($_GET['id'] );

function EliminarClienteMoral($id_moral){
include '../conexion.php';
 $sentencia="DELETE FROM personas WHERE id_persona='".$id_moral."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../verclientesmorales.php';

</script>