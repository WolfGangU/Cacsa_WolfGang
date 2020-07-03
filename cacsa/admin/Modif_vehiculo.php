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
 $consulta=ConsultarVehi($_GET['id']);
function ConsultarVehi( $id_vehi )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM vehiculos where id_vehiculo='".$id_vehi."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_vehiculo'],
        $mostrar['modelo'],
        $mostrar['descripcion']
    ];
   
}



    
    ?>     


 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Modificar vehículo</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modifvehiculo.php" role="form">
       <div class="form-group">

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"># Vehículo</label>
    <div class="col-md-6">
      <input type="text" name="codigo" value="<?php echo $consulta[0] ?> " readonly required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>   



           
       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Modelo</label>
    <div class="col-md-6">
      <input type="text" name="modelo" value="<?php echo $consulta[1] ?> " required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
  </div>    

       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripción</label>
    <div class="col-md-6">
      <input type="text" name="descrip" value="<?php echo $consulta[2] ?> " required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
  </div>   





          <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar</button>
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
<?php include ('scripts.php') ?>
<?php include ('footer.php') ?>