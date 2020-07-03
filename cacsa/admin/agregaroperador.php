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

  <h1>Nuevo Operador</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregaroperador.php" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre(s)*</label>
    <div class="col-md-6">
      <input type="text" name="nombres" class="form-control" id="no" placeholder="Nombres">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" class="form-control" id="name" placeholder="Apellidos">
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
</form>
  <p class="alert alert-info">* Campos obligatorios</p>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar operador</button>
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