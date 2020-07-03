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
 $consulta=Consultarlugar($_GET['id']);
function Consultarlugar( $id_pro )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM lugares WHERE id_lugar='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_lugar'],
        $mostrar['nombre_lugar']
       
    ];
   
}



    
    ?>           
          
          
          
          
          
          
          
          
          
          
 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Modificar Lugar</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modiflugaresp.php" role="form">
       <div class="form-group">
        
          
    <label for="inputEmail1" class="col-lg-2 control-label"># Identificador</label>
    <div class="col-md-6">
      <input type="text" name="num" value="<?php echo $consulta[0] ?>" readonly required class="form-control" id="num" placeholder=" ">
    </div>
  </div> 
           
           
           
           
       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del Lugar</label>
    <div class="col-md-6">
      <input type="text" name="nombrl" value="<?php echo $consulta[1] ?>" required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
  </div>    
          <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar lugar</button>
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