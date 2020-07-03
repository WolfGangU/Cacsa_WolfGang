<?php
EliminarProyecto($_GET['id'] );

function EliminarProyecto($id_proy){
include '../conexion.php';
 $sentencia="UPDATE proyectos SET est_pro= 0 WHERE id_proyecto='".$id_proy."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Eliminados Exitosamente" );
window.location.href='../verproyectoscurso.php';

</script>