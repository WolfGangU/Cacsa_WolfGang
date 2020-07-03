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

  <h1>Nuevo Empelado</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregarplantillalab.php" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos</label>
    <div class="col-md-4">
      <input type="text" name="apellido"  class="form-control" id="apellido" placeholder="Apellidos">
    </div>
  </div>
           <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_rol, nombre_rol FROM roles");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Rol</label>
    <div class="col-md-6">
    <select name="Rol" class="form-control" id="Rol"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_rol'] ?>"> <?php echo $datos['nombre_rol'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>
           
     
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-md-6">
      <input type="text" name="email" required class="form-control" id="lastname" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono</label>
    <div class="col-md-6">
      <input type="text" name="telefono" class="form-control" id="address1" placeholder="Teléfono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control" id="email1" placeholder="Dirección">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Número IMSS</label>
    <div class="col-md-6">
      <input type="text" name="imss" class="form-control" id="phone1" placeholder="Número del IMSS">
    </div>
  </div>




  <p class="alert alert-info">* Campos obligatorios</p>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Empleado</button>
    </div>
  </div>

  </div>


      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
   
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
<?php include ('scripts.php') ?>
 <?php include ('footer.php') ?>