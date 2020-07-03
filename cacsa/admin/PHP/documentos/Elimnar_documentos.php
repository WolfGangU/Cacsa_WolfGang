<?php


Eliminardoc($_GET['id'] );

function Eliminardoc($id_d){
include 'conexion.php';
 $sql="SELECT d.ruta_archivo from documentos d where id_documento='".$id_d."'";
 $result= mysqli_query($conexion,$sql);
 $mostrar=mysqli_fetch_array($result);
 unlink($mostrar['ruta_archivo']);

}
?>
<script type="application/ecmascript" >
alert("documento Eliminado del directorio Exitosamente :D" );

</script>


<?php








EliminarProducto($_GET['id'] );

function EliminarProducto($id_d){
include 'conexion.php';
 $sentencia="UPDATE documentos set est_doc=0 WHERE id_documento='".$id_d."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos del documentos Eliminado Exitosamente");
window.location.href='../../verdocumentos.php';

</script>