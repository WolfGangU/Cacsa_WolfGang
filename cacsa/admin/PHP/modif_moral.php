<?php
ModificarMoral($_POST['codigo'], $_POST['no'], $_POST['name'], $_POST['name2'],  $_POST['lastname'], $_POST['no2'], $_POST['name3'], $_POST['lastname2'],  $_POST['no3'], $_POST['address1'], $_POST['email1'], $_POST['phone1'] );

function ModificarMoral($id_persona, $rfc, $nombre, $nombre2, $apellidos, $rfc2, $nombre3, $apellidos2, $rfc3, $direccion, $email, $telefono){
include "../conexion.php";
 $sentencia=" UPDATE personas SET rfc='".$rfc."', nombre='".$nombre."', nombre2='".$nombre2."', apellidos='".$apellidos."', RFC2='".$rfc2."', nombre3='".$nombre3."', apellidos2='".$apellidos2."', RFC3='".$rfc3."', direccion_fiscal='".$direccion."', email='".$email."', telefono='".$telefono."' where id_persona='".$id_persona."' ";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../verclientesmorales.php';

</script>