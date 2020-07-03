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
          
      <h1>Nuevo documento</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addorden" action="PHP/documentos/AgregarDoc.php" role="form" enctype="multipart/form-data">s
       <div class="form-group">
           
  <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_orden FROM orden_entrega");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de orden</label>
    <div class="col-md-6">
    <select name="orden" class="form-control" id="orden"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_orden'] ?>"> <?php echo $datos['id_orden'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de archivo</label>
    <div class="col-md-6">
      <Select type="text" name="tipo" required class="form-control" id="tipo" placeholder="Descripción">

 <option value="SalidaOEntrega"> Salida/Entrega </option>
<option value="RetiroORecoleccion"> Retiro/Recoleccion </option>
<option value="Mantenimiento"> Mantenimiento </option>
<option value="Pases y accesos"> Pases y accesos </option>
<option value="Otros"> Otros </option>




      </Select>
    </div>
  </div>   

  <label   for="inputEmail1" class="col-lg-2 control-label">Subir Documento</label>
    <input type="file" name="archivo">
    <br><br>


          <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Documento</button>
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
  
<?php include ('footer.php') ?>