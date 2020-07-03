<?php include ('validar.php') ?>
<?php include ('menuyheader.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
  
    

  </section>
    <?php
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM operadores WHERE id_operador='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['nombres'],//0
        $mostrar['apellidos'],//1
        $mostrar['email_op'],//2
        $mostrar['telefono'],//3
        $mostrar['direccion'],//4
        $mostrar['id_operador']//5
    ];
   
}



    
    ?>      
          

    <section class="content">
<div class="row">
  <div class="col-md-12">

  <h1>Modificar Operador</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modifoper.php" role="form">
       <div class="form-group">
        
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de operador</label>
    <div class="col-md-6">
      <input type="text" name="codigo" value="<?php echo $consulta[5] ?>" readonly class="form-control" id="cod" placeholder="Codigo">
    </div>
  </div>
        
       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre(s)*</label>
    <div class="col-md-6">
      <input type="text" name="nombres" value="<?php echo $consulta[0] ?>" class="form-control" id="no" placeholder="Nombres">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos"  value="<?php echo $consulta[1] ?>" class="form-control" id="name" placeholder="Apellidos">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-md-6">
      <input type="text" name="email" required  value="<?php echo $consulta[2] ?>" class="form-control" id="lastname" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono</label>
    <div class="col-md-6">
      <input type="text" name="telefono"  value="<?php echo $consulta[3] ?>" class="form-control" id="address1" placeholder="Teléfono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección</label>
    <div class="col-md-6">
      <input type="text" name="direccion"  value="<?php echo $consulta[4] ?>" class="form-control" id="email1" placeholder="Dirección">
    </div>
  </div>
</form>
 
 
 
 
 
 
 
 
 
 
 
 
  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar Operador</button>
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