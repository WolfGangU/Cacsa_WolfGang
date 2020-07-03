<?php
ModificarProyecto($_POST['codigo'], $_POST['modelo'],$_POST['descrip'] );

function ModificarProyecto($codigo, $modelo, $descrip ){
include "../conexion.php";
 $sentencia="UPDATE vehiculos SET modelo='".$modelo."', descripcion='".$descrip."' WHERE id_vehiculo='".$codigo."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../listadevehiculos.php';

</script>