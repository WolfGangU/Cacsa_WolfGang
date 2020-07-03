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
          
      <h1>Nueva ruta</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregarrutap.php" role="form">
       <div class="form-group">

             <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT o.id_orden,p.nombre_proy FROM orden_entrega o INNER JOIN proyectos p ON o.id_proyecto = p.id_proyecto where p.est_pro=1;");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Proyecto</label>
    <div class="col-md-6">
    <select name="proyecto" class="form-control" id="proyecto"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_orden'] ?>"> <?php echo $datos['nombre_proy'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
       
        
        
        
        
    </div>
                
                 
                 
  </div>

<div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT o.id_orden,p.nombre FROM orden_entrega o inner JOIN personas p ON o.id_persona = p.id_persona");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Cliente</label>
    <div class="col-md-6">
    <select name="proyecto" class="form-control" id="proyecto"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_orden'] ?>"> <?php echo $datos['nombre'] ?> </option>
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
    <select name="lugar" class="form-control" id="Lugar"> 
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
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_operador,nombres FROM operadores");

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

               <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_giro,nombre_giro FROM giros_comerciales");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Giro</label>
    <div class="col-md-6">
    <select name="giro" class="form-control" id="lugar"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    
    ?>
        <option value="<?php echo $datos['id_giro'] ?>"> <?php echo $datos['nombre_giro'] ?> </option>
        <?php
    }
        ?>
        
        </select>
        
    </div>
  </div>

              
           
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de servicio</label>
    <div class="col-md-6">
     <select name="tipo_servicio" class="form-control" > 
         <option value="Lunes-Viernes">Lunes-Viernes</option>
         <option value="Lunes-Sabado">Lunes-Sábado</option>
         <option value="Lunes-Domingo">Lunes-Domingo</option>
         <option value="Lunes,Miercoles,Viernes">Lunes,Miércoles,Viernes</option>
         <option value="Martes,Jueves,Sabado">Martes,Jueves,Sábado</option>
         <option value="Por Dia">Por Día</option>
        </select>
    </div>
  </div>   

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha inicio</label>
      <div class="col-md-6">
      <input type="date" name="fecha_inicio" required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
</div> 

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha final</label>
      <div class="col-md-6">
      <input type="date" name="fecha_final" required class="form-control" id="nombrl" placeholder="Nombre">
    </div>
</div> 

         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
    <div class="col-md-6">
     <select name="estado_ruta" class="form-control" > 
         <option value="En curso">En curso</option>
         <option value="Finalizada">Finalizada</option>
        </select>
    </div>
  </div>  

       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Subtotal $</label>
    <div class="col-md-6">
      <input type="text" name="subtotal" required class="form-control" id="subtotal" placeholder="Subtotal" onChange="calculo();">
    </div>
  </div> 

         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">IVA $</label>
    <div class="col-md-6">
      <input type="text" name="iva" required class="form-control" id="iva" placeholder="IVA" readonly>
    </div>
  </div> 

       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Total $</label>
    <div class="col-md-6">
      <input type="text" name="total" required class="form-control" id="nombrl" placeholder="Total" readonly>
    </div>
  </div> 

  </div> 

            <script> 

function calculo() {
  //tasa de impuesto
  var tasa = 16;

  //monto a calcular el impuesto
  var monto = $("input[name=subtotal]").val();

  //calsulo del impuesto
  var iva = (monto * tasa) / 100;

  //se carga el iva en el campo correspondien te
  $("input[name=iva]").val(iva);

  //se carga el total en el campo correspondiente
  $("input[name=total]").val(parseInt(monto) + parseInt(iva));

}

 </script>
           
           
           
           <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Ruta</button>
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