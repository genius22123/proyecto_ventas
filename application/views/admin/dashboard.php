                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                      <!-- Content Header (Page header) -->

                      <div class="content-header">
                        <div class="container-fluid">
                          <div class="row mb-2">
                            <div class="col-sm-6">
                              <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->

                          </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                      </div>
                      <!-- /.content-header -->

                      <!-- Main content -->
                      <section class="content">
                        <div class="container-fluid">
                          <!-- Info boxes -->
                          <div class="row">
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-info">
                                <div class="inner">
                                  <h3><?php echo $cantVentas ?></h3>

                                  <p>Ventas</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>movimientos/ventas" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- /.col -->
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-success">
                                <div class="inner">
                                  <h3><?php echo $cantProductos ?><sup style="font-size: 20px"></sup></h3>

                                  <p>Productos</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>mantenimiento/productos" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <!-- /.col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h3><?php echo $cantUsuarios ?></h3>

                                  <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>administrador/usuarios" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h3><?php echo $cantClientes ?></h3>

                                  <p>Clientes</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>mantenimiento/clientes" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- fix for small devices only -->



                            <!-- /.col -->

                            <!-- /.col -->
                          </div>

                          <div class="card">

                            <div id="grafico">
                              
                            </div>
                        
                            <!-- /.content -->
                          </div>
                        </div>
                      </section>

                      <!--   <div>
                      <div id="grafico"></div>
                        <p class="highcharts-description">
                            Chart with buttons to modify options, showing how options can be changed
                            on the fly. This flexibility allows for more dynamic charts.
                        </p>
                      </div> -->
                      <!-- /.content-wrapper -->
                    </div>