<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
    </section>


<?php
 $consulta=ConsultarGiro($_GET['id']);
function ConsultarGiro( $id_giro )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM giros_comerciales where id_giro='".$id_giro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_giro'],
        $mostrar['nombre_giro']
    ];
   
}



    
    ?>      
          



 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Modificar linea de negocio</h1>
  <br>




<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modifgiro.php" role="form">
       <div class="form-group">
           
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"># Linea</label>
    <div class="col-md-6">
      <input type="text" name="codigo" value="<?php echo $consulta[0] ?> " readonly required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>   



       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de la linea</label>
    <div class="col-md-6">
      <input type="text" name="nombre_giro" value="<?php echo $consulta[1] ?> " required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
  </div>    
          <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar linea</button>
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