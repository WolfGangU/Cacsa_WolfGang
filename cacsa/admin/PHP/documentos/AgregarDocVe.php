<?php 
include 'conexion.php';
$numcar=$_POST['vehiculo'];//
$nombrepase=$_POST['nombrepase'];
$fechavenci=$_POST['fechavenci'];
$sql = "SELECT modelo from vehiculos
where id_vehiculo = '".$numcar."'"; 
$result= mysqli_query($conexion,$sql);  

$mostrar=mysqli_fetch_array($result);
$carpeta=$mostrar['modelo'];

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

} else {
    ?>
    <script type="application/ecmascript" >

   alert("Problema al subir el fichero :(" );
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
} else {
  ?>
    <script type="application/ecmascript" >

   alert("Problema al subir el fichero :(" );
</script>
<?php
}

}


$mysqli = new mysqli("67.217.34.70","parquefa_cacsadm", "lalo37yayoZXC", "parquefa_admincac_cacsa1");
$mysqli-> set_charset("utf8");
$query = "INSERT INTO pases_vehiculos (id_vehiculo,nombre_pasev,archi_pasev,fechavenciv) values ('$numcar','$nombrepase','$ruta','$fechavenci')";


$mysqli->query($query);

?> <script type="application/ecmascript"
> 

window.location.href='../../listadepases.php';


</script>


 