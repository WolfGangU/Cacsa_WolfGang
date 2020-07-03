<?php


Eliminardoc($_GET['id'] );

function Eliminardoc($id_d){
include 'conexion.php';
 $sql="SELECT v.archi_pasev from pases_vehiculos v where id_pasev='".$id_d."'";
 $result= mysqli_query($conexion,$sql);
 $mostrar=mysqli_fetch_array($result);
 unlink($mostrar['archi_pasev']);

}
?>
<script type="application/ecmascript" >
alert("documento Eliminado del directorio Exitosamente :D" );

</script>


<?php








EliminarProducto($_GET['id'] );

function EliminarProducto($id_d){
include 'conexion.php';
 $sentencia="UPDATE pases_vehiculos SET est_p_v=0 WHERE id_pasev='".$id_d."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos del documentos Eliminado Exitosamente");
window.location.href='../../listadepases.php';

</script>