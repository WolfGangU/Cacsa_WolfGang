<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
   
    

  </section>

     <section class="content">
<div class="row">
  <div class="col-md-12">

  <h1>Nuevo</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregarproducotop.php" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo*</label>
    <div class="col-md-6">
      <input type="text" name="codigo" required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
    <div class="col-md-6">
     <select name="estado" class="form-control" > 
         <option value="Disponible">Disponible</option>
         <option value="Mantenimiento">Mantenimiento</option>
         <option value="En uso">En uso</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-md-4">
      <input type="text" name="descrip"  class="form-control" id="descrip" placeholder="Detalle del producto">
    </div>
  </div>
           <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_lugar, nombre_lugar FROM lugares");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Lugar</label>
    <div class="col-md-6">
    <select name="Lugar" class="form-control" id="Lugar"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_lugar'] ?>"> <?php echo $datos['nombre_lugar'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>
           
                 <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_giro,nombre_giro FROM giros_comerciales");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Giro</label>
    <div class="col-md-6">
    <select name="giro" class="form-control" id="lugar"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_giro'] ?>"> <?php echo $datos['nombre_giro'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>
           
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad</label>
    <div class="col-md-6">
      <input type="text" name="cantidadp" class="form-control" id="cantidadp" placeholder="Cantidad" value="1"> 
    </div>
  </div>
 
  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </div>
  </div>
</form>
</div>
  </div>
</div>
</section>
<br>


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
<?php include ('scripts.php') ?> 
<?php include ('footer.php') ?>