 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">Reporte de  Clientes</h3>

                 <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                         <i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                         <i class="fas fa-times"></i>
                     </button>
                 </div>
             </div>
             <div class="card-body">
                
                 <div class="row">
                     <div class="col-md-12">
                         <table id="tb-reporte-clien" class="table table-bordered btn-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombre cliente</th>
                                     <th>Tipo Cliente</th>
                                     <th>Tipo DOCUMENTE</th>
                                     <th>NUM_DOCUMETO</th>
                            
                                     <th>TELEFONO</th>
                                     <th>DIRECCION</th>
        
                                  

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if (!empty($clientes)) : ?>
                                     <?php foreach ($clientes as $cliente) : ?>
                                         <tr>
                                         <td><?php echo $cliente->id?></td>
                                             <td><?php echo $cliente->nombre?></td>
                                             <td><?php echo $cliente->tipocliente?></td>
                                             <td><?php echo $cliente->tipodocumento?></td>
                                             <td><?php echo $cliente->num_documento?></td>
                                             <td><?php echo $cliente->telefono?></td>
                                             <td><?php echo $cliente->direccion?></td>
                                           
                                          
                                        
                                         </tr>
                                     <?php endforeach; ?>
                                 <?php endif; ?>


                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <!-- /.card-body -->
             <div class="card-footer">
                 Footer
             </div>
             <!-- /.card-footer-->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
