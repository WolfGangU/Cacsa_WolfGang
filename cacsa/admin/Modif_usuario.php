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
function ConsultarFisico( $id )
{
    include 'conexion.php'; 
    $sentencia="SELECT u.id,u.nombre_usuario,u.password,u.id_rol FROM usuarios_cacsa u WHERE u.id = '".$id."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['id'],
        $mostrar['nombre_usuario'],
        $mostrar['password'],
        $mostrar['id_rol']
       
    ];
   
}



    
    ?>           
          
          

    <section class="content">
<div class="row">
  <div class="col-md-12">

  <h1>Modificar Usuario</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/modif_usuario.php" role="form">
       <div class="form-group">


<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"># Id</label>
    <div class="col-md-6">
      <input type="text" name="codigo" value="<?php echo $consulta[0] ?> " readonly required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $consulta[1] ?>" class="form-control" id="no" placeholder="Usuario">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-md-6">
      <input type="password" name="password" value="<?php echo $consulta[2] ?>" class="form-control" id="name" placeholder="Contraseña">
    </div>
  </div>

               <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT ur.id_rol,ur.nombre FROM usuarios_roles ur");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de usuario</label>
    <div class="col-md-6">
    <select name="tipo" class="form-control" id="tipo" value="<?php echo $consulta[3] ?>" > 
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
      <button type="submit" class="btn btn-primary">Modificar usuario</button>
    </div>
  </div>

  </div>

   
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