<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
   <!-- ionicons -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/ionicons/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fontawesome-free/css/all.min.css">
      <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.min.css">
    <!-- jquery-ui -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/jquery-ui/jquery-ui.css">
     

     <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/datatables-plugin/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/datatables-plugin/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/datatables-plugin/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/datatables-plugin/datatables-export/css/buttons.dataTables.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">

</head>
<body class=" hold-transition  sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
    <div class="navbar-custom-menu ml-auto">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                                <img src="<?php echo base_url()?>assets/dist/img/user1-128x128.jpg" class="user-image" alt="User Image">
                                
                                <span class="hidden-xs">
                             <?php echo $this->session->userdata("nombre")?> 
                                <?php echo $this->session->userdata("apellido")?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <a href="<?php echo base_url();?>auth/logout"> Cerrar Sesión</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
  </nav>