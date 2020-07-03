<?php
EliminarGiro($_GET['id'] );

function EliminarGiro($id_giro){
include '../conexion.php';
 $sentencia="UPDATE giros_comerciales SET est_gir=0 WHERE id_giro='".$id_giro."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../listadegiros.php';

</script>