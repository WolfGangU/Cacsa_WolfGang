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
       Rutas Finalizadas <br> <a href="agregarruta.php" class="btn btn-primary">Nueva Ruta</a></h1>
  </center><br> 
 
<h4>
  <div class="row">
    <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-offset-2 col-sm-8">
        <h3 class="text-center"> <small class="mensaje"></small></h3>
      </div>
      <div class="table-responsive col-sm-12">    
        <table id="dt_pyt" class="table table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>                
      <th>Ruta</th>
      <th>Proyecto</th>
      
      <th>Lugar</th>
      <th>Operador</th>
      <th>Giro</th>
      <th>Tipo de servicio</th>
      <th>Fecha de inicio</th>
      <th>Fecha final</th>
      <th>Subtotal</th>
      <th>IVA</th>
      <th>Total</th> 
      <th></th>                  
            </tr>
          </thead>          
        </table>
      </div>      
    </div>    
  </div>
  



      </h1>
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

  <script>    
    $(document).on("ready", function(){
    listar();
    });

    var listar = function(){

      var table = $("#dt_pyt").DataTable({
          "ajax":{
             "method":"POST",
             "url":"PHP/listarrutasfinal.php"

          },
          "columns":[
                  
                  {"data":"id_ruta"},
                  {"data":"nombre_proy"},
          
                  {"data":"nombre_lugar"},
                  {"data":"nombres"},
                  {"data":"nombre_giro"},
                  {"data":"tipo_servicio"},
                  {"data":"fecha_inicio"},
                  {"data":"fecha_final"},
                  {"data":"subtotal"},
                  {"data":"iva"},
                  {"data":"total"},
                  {render: function (data, type, row){return `<a class="btn btn-primary" href="Modif_ruta.php?id=${row.id_ruta}" role="button">Modificar</a> <a href="PHP/Elimnar_ruta.php?id=${row.id_ruta}"  class="btn btn-danger">Eliminar</a> <a href="GenerarPDF.php?id=${row.id_ruta}" class="btn btn-success">Generar PDF</a>`}}
                  

          ],
          "language": idioma_espanol
      });

     
    }

    var idioma_espanol = {
      "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    }
    

  </script>
<?php include ('footer.php') ?>

