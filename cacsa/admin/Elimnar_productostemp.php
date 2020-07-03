<?php
EliminarProducto($_GET['id'] );

function EliminarProducto($id_d){
include 'conexion.php';
 $sentencia="DELETE FROM detalle_rutatemp WHERE id_producto='".$id_d."'";
 $conexion->query($sentencia) or die ("Error al Eliminar datos".mysqli_error($conexion));

 $queryb = "UPDATE inventario set estado ='Disponible' where id_producto ='".$id_d."'";

 $conexion->query($queryb) or die ("Error al Eliminar datos".mysqli_error($conexion));

}

header("Location:".$_SERVER['HTTP_REFERER']);  
?>



</script>