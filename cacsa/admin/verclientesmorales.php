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
        Personas Morales
      </h1>
  </center><br> 
 
<h4>
  <div class="row">
    <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-offset-2 col-sm-8">
        <h3 class="text-center"> <small class="mensaje"></small></h3>
      </div>
      <div class="table-responsive col-sm-12">    
        <table id="dt_pm" class="table table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>                
              <th>Empresa</th>
              <th>Nombre  Representante</th>
              <th>Apellidos Representante</th>
              <th>RFC Empresa</th>
              <th>RFC Representante</th>
              <th>Direccion Fiscal</th>
              <th>Telefono Empresa</th>
              <th>Email empresa</th>
              <th ><a href="agregarclientemoral.php" class="btn btn-primary">Nuevo Cliente</a> </th>

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

      var table = $("#dt_pm").DataTable({
          "ajax":{
             "method":"POST",
             "url":"PHP/listarpersonasmorales.php"

          },
          "columns":[
                  
                  {"data":"comercial"},
                  {"data":"nombre2"},
                  {"data":"apellidos"},
                  {"data":"rfc"},
                 {"data":"RFC2"},
                  {"data":"direccion_fiscal"},
                  {"data":"telefono"},
                  {"data":"email"},
                   {render: function (data, type, row){return `<a class="btn btn-primary" href="Modif_moral.php?id=${row.id_persona}" role="button">Modificar</a> <a href="PHP/Elimnar_moral.php?id=${row.id_persona}"  class="btn btn-danger">Eliminar</a>`}}
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

