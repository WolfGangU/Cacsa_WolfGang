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
 $consulta=ConsultarProyecto($_GET['id']);
function ConsultarProyecto( $id_proye )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM proyectos WHERE id_proyecto='".$id_proye."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id_proyecto'],
        $mostrar['nombre_proy'],
        $mostrar['id_persona'],
        $mostrar['id_lugar'],
        $mostrar['estado_p'],
    ];
   
}



    
    ?>      



 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Nuevo Proyecto</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modifproyecto.php" role="form">
       <div class="form-group">
           
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"># Proyecto</label>
    <div class="col-md-6">
      <input type="text" name="codigo" value="<?php echo $consulta[0] ?> " readonly required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>


       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del Proyecto</label>
    <div class="col-md-6">
      <input type="text" name="nombrl" value="<?php echo $consulta[1] ?>" required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
  </div> 
             <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_persona, CONCAT(nombre, ' ', apellidos) as nombres  FROM personas");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Cliente</label>
    <div class="col-md-6">
    <select name="client" value="<?php echo $consulta[2] ?>" class="form-control" id="client"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_persona'] ?>"> <?php echo $datos['nombres'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>

             <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_lugar, nombre_lugar FROM lugares");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Lugar</label>
    <div class="col-md-6">
    <select name="Lugar" value="<?php echo $consulta[3] ?>" class="form-control" id="Lugar"> 
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
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
    <div class="col-md-6">
     <select name="estado" value="<?php echo $consulta[4] ?>" class="form-control" > 
         <option value="En curso">En curso</option>
         <option value="Finalizado">Terminado</option>
        </select>
    </div>
  </div>    
           
           
           
           <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Modificar Proyecto</button>
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