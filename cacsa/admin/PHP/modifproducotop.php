<?php
ModificarProducto($_POST['codigo'], $_POST['descrip'], $_POST['estado'], $_POST['Lugar'], $_POST['cantidadp'] );

function ModificarProducto($codigo, $descrip, $estado, $lugar, $cantidad){
include "../conexion.php";
 $sentencia="UPDATE inventario SET descrip='".$descrip."', estado='".$estado."', id_lugar='".$lugar."', cantidad='".$cantidad."' where codigo='".$codigo."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../verinventario.php';

</script>