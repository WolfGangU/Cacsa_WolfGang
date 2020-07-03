<?php
$don=$_GET['id'];
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
$mysqli = new mysqli("localhost", "root", "", "cacsachido");


if($mysqli->connect_errno)
{
    echo "Existe un error en la conexion";
    return true;
}


$query = "INSERT INTO detalle_ruta (id_producto, id_orden) values ('$consulta[0]','$don')";


$mysqli->query($query);
$queryb = "UPDATE inventario set estado ='En uso' where id_producto = '$consulta[0]' ";


$mysqli->query($queryb);

header("Location:".$_SERVER['HTTP_REFERER']);  
    ?>      