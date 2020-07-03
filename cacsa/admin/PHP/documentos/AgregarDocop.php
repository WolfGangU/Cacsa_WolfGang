<?php 
include 'conexion.php';
$id_operador=$_POST['operador'];//
$nombrepase=$_POST['nombrepase'];
$fechavenci=$_POST['fechavenci'];
$sql = "SELECT CONCAT( o.nombres ,o.apellidos) as nombrec from operadores o
where o.id_operador = '".$id_operador."'"; 
$result= mysqli_query($conexion,$sql);  

$mostrar=mysqli_fetch_array($result);

$carpeta=$mostrar['nombrec'];

//string
date_default_timezone_set('America/Mexico_City');
if(file_exists($carpeta))
{
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
$ex= pathinfo( $nombre,
PATHINFO_EXTENSION);



    $fichero_subido = $carpeta."/". basename($_FILES['archivo']['name']);


if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
 
 rename($carpeta."/".$nombre,$carpeta."/".$nombrepase.".".$ex);


$ruta=$carpeta."/".$nombrepase.".".$ex;
?><script type="application/ecmascript" >

   alert("El fichero se subio correctamente :)" );
</script>
<?php
$mysqli = new mysqli("67.217.34.70", "parquefa_cacsadm", "lalo37yayoZXC", "parquefa_admincac_cacsa1");
$mysqli-> set_charset("utf8");
$query = "INSERT INTO pases_personales (id_operador,nombre_pase,arch_pase,fecha_venci) values ('$id_operador','$nombrepase','$ruta','$fechavenci')";


$mysqli->query($query);

?> <script type="application/ecmascript"
> 

window.location.href='../../listadepases.php';


</script>





<?php



} else {
    ?>
    <script type="application/ecmascript" >

   alert("Problema al subir el fichero :c intenta con un docmento mas ligero" );
   window.location.href='../../listadepases.php';
</script>
<?php


}


} else{
mkdir($carpeta);
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
$ex=$_FILES['archivo']['type'];

    $fichero_subido = $carpeta."/". basename($_FILES['archivo']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
rename($carpeta."/".$nombre,$carpeta."/".$nombrepase.".".$ex);


$ruta=$carpeta."/".$nombrepase.".".$ex;

?><script type="application/ecmascript" >

   alert("El fichero se subio correctamente :)" );
</script>
<?php
$mysqli = new mysqli("67.217.34.70", "parquefa_cacsadm", "lalo37yayoZXC", "parquefa_admincac_cacsa1");
$mysqli-> set_charset("utf8");
$query = "INSERT INTO pases_personales (id_operador,nombre_pase,arch_pase,fecha_venci) values ('$id_operador','$nombrepase','$ruta','$fechavenci')";


$mysqli->query($query);

?> <script type="application/ecmascript"
> 

window.location.href='../../listadepases.php';


</script>
<?php
} else {
  ?>
    <script type="application/ecmascript" >

   alert("Problema al subir el fichero :c intenta con un docmento mas ligero" );
   window.location.href='../../listadepases.php';
</script>
<?php
}

}




 