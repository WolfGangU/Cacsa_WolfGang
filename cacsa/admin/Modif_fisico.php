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

  <?php
 $consulta=ConsultarFisico($_GET['id']);
function ConsultarFisico( $id_fis )
{
    include 'conexion.php'; 
    $sentencia="SELECT id_persona, nombre, apellidos, rfc, direccion_fiscal, telefono, email FROM personas p WHERE tipo= 1 AND id_persona='".$id_fis."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_persona'],
        $mostrar['nombre'],
        $mostrar['apellidos'],
        $mostrar['rfc'],
        $mostrar['direccion_fiscal'],
        $mostrar['telefono'],
        $mostrar['email']
       
    ];
   
}



    
    ?>           
          
          

    <section class="content">
<div class="row">
  <div class="col-md-12">

  <h1>Modificar Persona Fisica</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modif_fisico.php" role="form">
       <div class="form-group">


<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"># Persona</label>
    <div class="col-md-6">
      <input type="text" name="codigo" value="<?php echo $consulta[0] ?> " readonly required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">RFC</label>
    <div class="col-md-6">
      <input type="text" name="no" value="<?php echo $consulta[3] ?>" class="form-control" id="no" placeholder="RFC">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $consulta[1] ?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $consulta[2] ?>" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="address1" value="<?php echo $consulta[4] ?>" class="form-control" id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email1" value="<?php echo $consulta[6] ?>" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone1" value="<?php echo $consulta[5] ?>" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>
  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar persona</button>
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