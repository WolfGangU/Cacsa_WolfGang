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
 <section class="content">
<div class="row">
  <div class="col-md-12">  
          
      <h1>Nueva orden de salida</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregarsalida.php" role="form">
       <div class="form-group">


             <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_proyecto,nombre_proy FROM proyectos where est_pro=1");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Proyectos</label>
    <div class="col-md-6">
    <select name="proyecto" class="form-control" id="proyecto"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_proyecto'] ?>"> <?php echo $datos['nombre_proy'] ?> </option>

        <?php
    }
        ?>
          <Option Value=""></option>
        </select>
        
       
        
        
        
        
    </div>
                
                 
                 
  </div>
     <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_persona, CONCAT(nombre,' ',apellidos) as nombres FROM personas  where est_per = 1");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Clientes Fisicos/Morales</label>
    <div class="col-md-6">
    <select name="persona" class="form-control" id="persona"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_persona'] ?>"> <?php echo $datos['nombres'] ?> </option>
        <?php
    }
        ?>
        <Option Value=""></option>
        </select>
        
       
        
        
        
        
    </div>
                
                 
                 
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Lugar de entrega</label>
      <div class="col-md-6">
      <input type="text" name="lugar_entrega" required class="form-control" id="nombrl" placeholder="Dirección">
    </div>
</div> 


               <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_operador,nombres FROM operadores where est_op = 1");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Operador</label>
    <div class="col-md-6">
    <select name="operador" class="form-control" id="lugar"> 
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
      <button type="submit" class="btn btn-primary">Agregar Orden</button>
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