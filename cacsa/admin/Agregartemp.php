<?php
$don=$_GET['id'];
$lug=$GET['lug'];
 $consulta=ConsultarProducto($_GET['od']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM inventario WHERE id_producto='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_producto'],
       
    ];
   

}
$mysqli = new mysqli("67.217.34.70", "parquefa_cacsadm", "lalo37yayoZXC", "parquefa_admincac_cacsa1");


if($mysqli->connect_errno)
{
    echo "Existe un error en la conexion";
    return true;
}


$query = "INSERT INTO detalle_rutatemp (id_producto, id_orden) values ('$consulta[0]','$don')";


$mysqli->query($query);

$queryb = "UPDATE inventario set estado ='En uso' where id_producto = '$consulta[0]' ";


$mysqli->query($queryb);
$queryc = "INSERT INTO lugares (nombre_lugar) values ($lug)";


$mysqli->query($queryc);

header("Location:".$_SERVER['HTTP_REFERER']);  
    ?>      