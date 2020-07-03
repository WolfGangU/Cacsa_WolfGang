<?php
include 'Plantilla.php';//se llama a la plantilla que encabeza todos los docuementos
 $pdf = new PDF();
include 'conexion.php';
$A=$_GET['id'];//se recolecta la informacion del id y muestra los productos que vaya a tener la orden
$sql = "SELECT inv.id_producto, inv.codigo, inv.descrip, lug.nombre_lugar, inv.cantidad, inv.estado, g.nombre_giro FROM inventario inv inner join giros_comerciales g on g.id_giro = inv.id_giro INNER JOIN lugares lug ON
inv.id_lugar = lug.id_lugar inner join detalle_ruta tmp
on inv.id_producto=tmp.id_producto WHERE tmp.id_orden='".$A."'"; 
$result= mysqli_query($conexion,$sql);  
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; //se Consulta la informacion del inventario de forma disponible 
   $sentencia="SELECT CONCAT(per.nombre) as nombrec, ord.lugar_entrega, CONCAT(op.nombres,' ',op.apellidos) as nombreop, pro.nombre_proy from orden_entrega ord left join personas per on ord.id_persona = per.id_persona left join proyectos pro on ord.id_proyecto = pro.id_proyecto inner join operadores op on op.id_operador=ord.id_operador where ord.id_orden=$id_pro";
    $resultado= $conexion->query($sentencia);

    $mostrar=$resultado->fetch_assoc();
    return [
         
        $mostrar['lugar_entrega'],//0
  
          $mostrar['nombre_proy'],//3
         $mostrar['nombrec'],//4
         $mostrar['nombreop'],//5

      
    ];
   
}




    
    
   


 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(59,131,189); 
 $pdf->SetFont('Arial','B','15');
 $pdf->Cell(5);
 $pdf->Cell(180,5,'Carta Retiro',1,1,'C',1);
$pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B','10');
  
   $pdf->SetFont('Arial','B','8');
   $pdf->Cell(5);
 $pdf->Cell(90,6,'Cliente: '.utf8_decode($consulta[2]),1,0,'L');
   $pdf->Cell(90,6,'Lugar de Entrega: '.utf8_decode($consulta[0]),1,1,'L');
    $pdf->Cell(5);
  $pdf->Cell(90,6,'Operador: '.utf8_decode($consulta[3]),1,0,'L');
   $pdf->Cell(90,6,'Proyecto: '.utf8_decode($consulta[1]),1,1,'L');
     $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B','12');
 $pdf->Cell(5);
 $pdf->Cell(180,5,'Por medio de la presente se notifica el RETIRO del siguiente equipo para renta;',1,1,'C',1);
 $pdf->Cell(5);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFillColor(219, 214, 214); 
  $pdf->Cell(8,8,'C',1,0,'C',1);
 $pdf->SetFont('Arial','B','10');
$pdf->Cell(30,8,'Codigo',1,0,'C',1);
$pdf->Cell(142,8,'Descripcion',1,1,'C',1);

while($mostrar=mysqli_fetch_array($result)){
 $pdf->SetFillColor(255, 255, 255); 


$pdf->SetFont('Arial','B','10');
 $pdf->Cell(5);
  $pdf->Cell(8,8,'',1,0,'C',1);
$pdf->Cell(30,8,$mostrar['codigo'],1,0,'C',1);
$pdf->Cell(142,8,utf8_decode($mostrar['descrip']),1,1,'C',1);





}
$pdf->Cell(40,4,'Que sera ENTREGADO A',0,1);
$pdf->Cell(40,4,utf8_decode('Compañia: ').utf8_decode($consulta[2]),0,1);
$pdf->Cell(40,4,'Lugar: '.utf8_decode($consulta[0]),0,1);
$pdf->MultiCell(180,4,utf8_decode('Cláusulas:
1.- Verificar que el equipo este en perfectas condiciones
2.- Supervisar que el equipo lo entreguen en perfectas condiciones
3.- Firmar la carta entrega.
4.- Describa si tiene alguna observacion para darle seguimiento'),0,'J');
$pdf->Cell(40,4,'Observacion: ',0,1);
$pdf->MultiCell(180,30,utf8_decode(''),1,'L');


$pdf->SetY(250);

$pdf->SetFont('Arial','I',10);

$pdf->Cell(40,1,'_________________________',0,0);
$pdf->Cell(50);
$pdf->Cell(40,1,'_________________________',0,1);
$pdf->Cell(40,10,'Firma del Operador',0,0);
$pdf->Cell(50);
$pdf->Cell(40,10,'Firma del Cliente',0,1);






 $pdf->Output('I','OR_R'.utf8_decode($consulta[2]).'.pdf');//im
?>
?>