<?php include ('../../validar.php') ?>
<?php include ('../../conexion.php') ?>

<?php include ('../../menuyheader.php') ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
    <h1>Bienvenid@ al Sistema Administrativo de CACSA WC </h1>
    

  </section>
<div class="contenedor">
 <center>
      <h1>
       Documentacion
      </h1>
  </center><br> 
<h5>
<table class="table table-striped" class="form-control">
  <thead> 
    <tr>
      <th scope="col">Nombre del archivo</th>
      <th scope="col">Numero de orden</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Fecha</th>
      
        <th scope="col"><a href="AgregarDoc.php" class="btn btn-primary">Nuevo documento</a>  </th>
    </tr>
  </thead>
  <tbody>

<?php 

$sql = "SELECT d.nombre_archivo, o.id_orden, d.tipo_documento, d.ruta_archivo, d.fecha_subida from documentos d inner join orden_entrega o "; 
$result= mysqli_query($conexion,$sql);  

    while($mostrar=mysqli_fetch_array($result)){
    ?>
   <tr>
      <th scope="col"><a href = "<?php echo $mostrar['ruta_archivo']?>" ><?php echo $mostrar['nombre_archivo'] ?></th>
      <th scope="col"><?php echo $mostrar['id_orden'] ?></th>
      <th scope="col"><?php echo $mostrar['tipo_documento'] ?></th>
      <th scope="col"><?php echo $mostrar['fecha_subida'] ?></th>
    
     
        <th scope="col"><a href="PHP/Elimnar_productos.php?id=<?php echo $mostrar['id_producto']?>"  class="btn btn-danger">Eliminar Documento</a></th>
    </tr>

      <?php 

      }

     ?>
  </tbody>
</table>
</h5>
  </div>

      </h1>
      <ol class="breadcrumb" class="form-control">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include ('footer.php') ?>