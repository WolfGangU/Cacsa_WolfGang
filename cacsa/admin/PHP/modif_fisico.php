<?php
ModificarFisico($_POST['codigo'], $_POST['no'], $_POST['name'], $_POST['lastname'], $_POST['address1'], $_POST['email1'], $_POST['phone1'] );

function ModificarFisico($id_persona, $rfc, $nombre, $apellidos, $direccion, $email, $telefono){
include "../conexion.php";
 $sentencia=" UPDATE personas SET rfc='".$rfc."', nombre='".$nombre."', apellidos='".$apellidos."', direccion_fiscal='".$direccion."', email='".$email."', telefono='".$telefono."' where id_persona='".$id_persona."' ";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../verclientesfisicos.php';

</script>