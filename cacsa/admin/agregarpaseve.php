<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
    <h1>Bienvenid@ al Sistema Administrativo de CACSA WC </h1>
    </section>
 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Nuevo Pase Vehicular</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addorden" action="PHP/documentos/AgregarDocVe.php" role="form" enctype="multipart/form-data">
      
<div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_vehiculo, modelo  FROM vehiculos where est_ve=1");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Pertenece a</label>
    <div class="col-md-6">
    <select name="vehiculo" class="form-control" id="vehiculo"> 
        <?php 
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_vehiculo'] ?>"> <?php echo $datos['modelo'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>




      <div class="form-group">
           
       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del Pase</label>
    <div class="col-md-6">
      <input type="text" name="nombrepase" required class="form-control" id="Nombrepase" placeholder="Nombrepase">
    </div>
  </div>  
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha vencimiento</label>
      <div class="col-md-6">
      <input type="date" name="fechavenci" class="form-control" id="fechavenci" >
    </div>
</div> 



     
<div class="form-group">
  <label   for="inputEmail1" class="col-lg-2 control-label">Subir Documento</label>
    <input type="file" name="archivo">
    <br><br>
</div>

          <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Documento</button>
    </div>
  </div>  
           
           
           
           
        </div>
        
           </form>
      </div>
    </div>
     </div>
          </section>
          
          
          
          
          
          
   
      </h1>
      <ol class="breadcrumb">
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