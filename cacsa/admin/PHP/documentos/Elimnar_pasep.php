<?php


Eliminardoc($_GET['id'] );

function Eliminardoc($id_d){
include 'conexion.php';
 $sql="SELECT v.archi_pasev from pases_personales v where id_pase='".$id_d."'";
 $result= mysqli_query($conexion,$sql);
 $mostrar=mysqli_fetch_array($result);
 unlink($mostrar['arch_pase']);

}
?>
<script type="application/ecmascript" >
alert("documento Eliminado del directorio Exitosamente :D" );

</script>


<?php








EliminarProducto($_GET['id'] );

function EliminarProducto($id_d){
include 'conexion.php';
 $sentencia="UPDATE pases_personales SET esta_p_p=0 WHERE id_pase='".$id_d."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos del documentos Eliminado Exitosamente");
window.location.href='../../listadepases.php';

</script>