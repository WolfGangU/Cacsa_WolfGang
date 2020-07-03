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
          
      <h1>Nuevo usuario</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregarusuario.php" role="form">
       <div class="form-group">
           
       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div> 

       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-md-6">
      <input type="password" name="password" required class="form-control" id="password" placeholder="Contraseña">
    </div>
  </div>


             <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT ur.id_rol,ur.nombre FROM usuarios_roles ur");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de usuario</label>
    <div class="col-md-6">
    <select name="tipo" class="form-control" id="tipo"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_rol'] ?>"> <?php echo $datos['nombre'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>

            
              
        
           
           <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar</button>
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