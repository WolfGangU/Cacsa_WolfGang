<?php 
$id_operador=$_GET['id'];?>
<?php include ('validar.php') ?>
<?php include ('conexion.php') ?>
<?php include ('menuyheader.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">

  </section>
<div class="contenedor">
  <?php
  
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; //se Consulta la informacion del inventario de forma disponible 
   $sentencia="SELECT op.id_operador,CONCAT(op.nombres,' ',op.apellidos) AS nombreop,op.email_op,op.telefono,op.direccion, op.ife, op.lic_manejo, op.imss_arch FROM operadores op where op.id_operador='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['nombreop'],
      $mostrar['ife'],
      $mostrar['lic_manejo'],
      $mostrar['imss_arch'],
      
    ];
   
}



    $nombre=$consulta[1];
    ?>    

    <h2>Documentos de: <?php echo $consulta[0] ?>    </h2>  




<center>
     
  </center><br> 
<h4>
<table class="table table-striped">
  <thead> 
    <tr>
      <th scope="col">Nombre de documento</th>
    </tr>
  </thead>
  <tbody>



 


    	<?php if($consulta[3]==NULL) {

?>

    <td scope="col" > IMSS(NO CARGADO)</td>
     
             <td> <a href="agreg_doc_operador.php?id=<?php echo $_GET['id']?>&od=1"  class="btn btn-success">Agregar Documento </a></td>
        </tr>
        <tr>

<?php
}
else{
    

?>
    <tr>
        <td scope="col" > <a href ="PHP/documentos/operadores/<?php echo $consulta[3] ?>" >IMSS</td>
       <td scope="col"><a href="PHP/documentos/operadores/Elimnar_doc_operador.php?id=<?php echo $_GET['id']?>&od=2"  class="btn btn-danger">Eliminar</a></td>
        </tr>
        
    <?php 
    }
    ?> 
    
        	<?php if($consulta[2]==NULL) {

?>

    <td scope="col" > Licencia de Manejo(NO CARGADO)</td>
     
             <td> <a href="agreg_doc_operador.php?id=<?php echo $_GET['id']?>&od=2"  class="btn btn-success">Agregar Documento </a></td>
        </tr>
        <tr>

<?php
}
else{
    

?>
    <tr>
        <td scope="col" > <a href ="PHP/documentos/operadores/<?php echo $consulta[3] ?>" >Licencia de Manejo</td>
       <td scope="col"><a href="PHP/documentos/operadores/Elimnar_doc_operador.php?id=<?php echo $_GET['id']?>&od=2"  class="btn btn-danger">Eliminar</a></td>
        </tr>
        
    <?php 
    }
    ?> 
    
        	<?php if($consulta[1]==NULL) {

?>

    <td scope="col" > INE(NO CARGADO)</td>
     
             <td> <a href="agreg_doc_operador.php?id=<?php echo $_GET['id']?>&od=3"  class="btn btn-success">Agregar Documento </a></td>
        </tr>
        <tr>

<?php
}
else{
    

?>
    <tr>
        <td scope="col" > <a href ="PHP/documentos/operadores/<?php echo $consulta[1] ?>" >INE</td>
       <td scope="col"><a href="PHP/documentos/operadores/Elimnar_doc_operador.php?id=<?php echo $_GET['id']?>&od=3"  class="btn btn-danger">Eliminar</a></td>
        </tr>
        
    <?php 
    }
    ?> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     
  </tbody>
</table>
</h4>
  </div>



    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include ('scripts.php') ?>
<?php include ('footer.php') ?>
