  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>dashboard" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/user1-128x128.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PRYECTO TDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

     
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item py-2">
            <a href="#" class="nav-link">
            <i class="fas fa-cogs"></i>
              <p>
              Mantenimiento
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>mantenimiento/categorias" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>mantenimiento/clientes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>mantenimiento/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item  py-2">
            <a href="#" class="nav-link">
            <i class="fas fa-share-alt"></i>         
                 <p>
              Movimientos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>movimientos/ventas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Ventas</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item  py-2">
            <a href="#" class="nav-link">
            <i class="fas fa-print"></i>              <p>
              Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>reportes/categorias" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>reportes/clientes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>reportes/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>reportes/ventas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  py-2">
            <a href="#" class="nav-link">
            <i class="fas fa-user"></i>              <p>
              Administrador
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="<?php echo base_url();?>administrador/usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
            </ul>
          </li>

          
        
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
