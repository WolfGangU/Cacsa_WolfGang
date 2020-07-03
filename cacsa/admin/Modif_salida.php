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
 $consulta=ConsultarSalida($_GET['id']);
function ConsultarSalida( $id_orden )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM orden_entrega WHERE id_orden='".$id_orden."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_orden'],
        $mostrar['id_proyecto'],
        $mostrar['lugar_entrega'],
        $mostrar['id_operador'],
    ];
   
}



    
    ?>  


 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Modificar orden de salida</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modifsalida.php" role="form">
       <div class="form-group">


             <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_proyecto,nombre_proy FROM proyectos");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Proyectos</label>
    <div class="col-md-6">
    <select name="proyecto" value="<?php echo $consulta[1] ?>" class="form-control" id="proyecto"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_proyecto'] ?>"> <?php echo $datos['nombre_proy'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
       
        
        
        
        
    </div>
                
                 
                 
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Lugar de entrega</label>
      <div class="col-md-6">
      <input type="text" name="lugar_entrega" value="<?php echo $consulta[2] ?>" required class="form-control" id="nombrl" placeholder="Dirección">
    </div>
</div> 


               <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_operador,nombres FROM operadores");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Operador</label>
    <div class="col-md-6">
    <select name="operador" value="<?php echo $consulta[3] ?>" class="form-control" id="lugar"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_operador'] ?>"> <?php echo $datos['nombres'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>

 

              










  </div> 
           
           
           
           <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar Orden</button>
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