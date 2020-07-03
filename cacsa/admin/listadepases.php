<?php include ('validar.php') ?>
<?php include ('conexion.php') ?>
<?php include ('menuyheader.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">

  </section>
<div class="contenedor">

<center>
      <h1>
        Lista de Pases y Accesos
      </h1>
  </center><br> 
<h4>
<table class="table table-striped">
  <thead> 
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Nombre de pase</th>
      <th scope="col">Fecha de vencimiento</th>

        <th > <a href="agregarpaseop.php" class="btn btn-primary">Nuevo pase o acceso (Personal)</a></th>
    </tr>
  </thead>
  <tbody>

<?php 

$sql = "SELECT pp.id_pase, CONCAT(op.nombres,' ', op.apellidos) as nombreop, pp.nombre_pase, pp.arch_pase, pp.fecha_venci  from pases_personales pp 
inner join operadores op on pp.id_operador = op.id_operador  where esta_P_p=1
order BY pp.fecha_venci desc"; 
$result= mysqli_query($conexion,$sql);  

    while($mostrar=mysqli_fetch_array($result)){
    ?>
  <?php
$date1p = new DateTime();
$date2p = new DateTime($mostrar['fecha_venci']);
$diffp = $date1p->diff($date2p);

// will output 2 days
 if ($date1p>=$date2p){
$colorp= "#FF0000";


 } else{

 if ($diffp->days.'days'<=10){
   $colorp= "#E1F20F";
 }else{

$colorp='#1EC826';

 }

 }
?>



 




    <tr>
      <th 
       scope="col" bgcolor=<?php echo $colorp; ?>><?php echo $mostrar['nombreop'] ?></th>
        <th scope="col" > <a href ="PHP/documentos/<?php echo $mostrar['arch_pase']?>"><?php echo $mostrar['nombre_pase'] ?></th>
      <th scope="col"><?php echo $mostrar['fecha_venci'] ?></th>
        <th scope="col"><a href="PHP/documentos/Elimnar_pasep.php?id=<?php echo $mostrar['id_pase']?>"  class="btn btn-danger">Eliminar</a></th>
        
    </tr>

      <?php 

      }

     ?>
  </tbody>
</table>
</h4>
  </div>

      </h1>
<h4>
<table class="table table-striped">
  <thead> 
    <tr>
      <th scope="col">Modelo</th>
      <th scope="col">Nombre de pase</th>
      <th scope="col">Fecha de vencimiento</th>

        <th > <a href="agregarpaseve.php" class="btn btn-primary">Nuevo pase o acceso (Vehicular)</a></th>
    </tr>
  </thead>
  <tbody>

<?php 

$sqlv = "SELECT pv.id_pasev, v.modelo, pv.nombre_pasev, pv.archi_pasev, pv.fechavenciv  from pases_vehiculos pv 
inner join vehiculos v on pv.id_vehiculo = v.id_vehiculo where est_p_v=1
order BY pv.fechavenciv desc"; 
$resultv= mysqli_query($conexion,$sqlv);  

    while($mostrarv=mysqli_fetch_array($resultv)){
    ?>
        <?php
$date1 = new DateTime();
$date2 = new DateTime($mostrarv['fechavenciv']);
$diff = $date1->diff($date2);

// will output 2 days
 if ($date1>=$date2){
$color= "#FF0000";


 } else{

 if ($diff->days.'days'<=10){
   $color= "#E1F20F";
 }else{

$color='#1EC826';

 }

 }
?>


    <tr  > 

      <th 
       scope="col" bgcolor=<?php echo $color; ?>><?php echo $mostrarv['modelo'] ?></th>
        <th scope="col" > <a href ="PHP/documentos/<?php echo $mostrarv ['archi_pasev']?>"><?php echo $mostrarv['nombre_pasev'] ?></th>
      <th scope="col"><?php echo $mostrarv['fechavenciv'] ?></th>
        <th scope="col"><a href="PHP/documentos/Elimnar_pasev.php?id=<?php echo $mostrarv['id_pasev']?>"  class="btn btn-danger">Eliminar</a></th>
        
    </tr>

      <?php 

      }

     ?>
  </tbody>
</table>

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

