<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CACSA WC @Adm</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminLTE/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="adminLTE/skins/skin-blue.min.css">

 
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <!-- Buttons DataTables -->
  <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->





<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="./index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>WC</span>
              <div class="pull-left image">
        
      <img src="img/cacsaLogo.png" class="Left" width="50" height="50">
      </div>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CACSA</b>WC</span>
    </a>





    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Barra de navegacion</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="logout.php">
              <!-- The user image in the navbar-->
              <img src="img/cacsaLogo.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Salir</span>
            </a>
            
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->


      <!-- search form (Optional) -->
  
 



      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Barra de navegacion</li>
        <!-- Optionally, you can add icons to the links -->
       
        
         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Clientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="verclientesmorales.php">Personas Morales</a></li>
            <li><a href="verclientesfisicos.php">Personas Fisicas</a></li>
          </ul>
        </li>

          
          <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Proyectos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agregarproyecto.php">Nuevos</a></li>
            <li><a href="verproyectoscurso.php">Vigentes</a></li>
            <li><a href="verproyectosterm.php">Finalizados</a></li>
          </ul>
        </li>
          
          
          
          <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Almacen</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agregarproducto.php">Nuevo Producto</a></li>
            <li><a href="verinventario.php">Inventario</a></li>
            <li><a href="listadevehiculos.php">Vehiculos</a></li>
          </ul>
        </li>



        
         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Operaciones</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listadegiros.php">Lineas de Negocio</a></li>
            <li><a href="listaderutas.php">Rutas</a></li>
            <li><a href="listadesalida.php">Orden de Entrega</a></li>
            <li><a href="listaderetiro.php">Orden de Recoleccion</a></li>
         
           
            <li><a href="listadelugares.php">Lugares</a></li>
            
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Administracion</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
<li><a href="listadetarifas.php">Tarifas</a></li>
        
            
            <li><a href="vercontactos.php">Contactos</a></li>
<li><a href="veroperadores.php">Operadores</a></li>
 <li><a href="listadepases.php">Pases y Accesos</a></li>
  
            <li><a href="listadeplantillalab.php">Plantilla Laboral</a></li>
            <li><a href="verusuarios.php">Usuarios</a></li>
          </ul>
        </li>












      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
