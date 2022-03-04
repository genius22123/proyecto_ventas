 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">Reporte de  Ventas</h3>

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
                         <table id="tb-reporte-ven" class="table table-bordered btn-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombre cliente</th>
                                     <th>Tipo Comprovante</th>
                                     <th>Numero Documento</th>
                                     <th>fecha</th>
                                     <th>usuario que atendio</th>
                                     <th> Total </th>
                                     <th>Opciones</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if (!empty($ventas)) : ?>
                                     <?php foreach ($ventas as $venta) : ?>
                                         <tr>
                                             <td><?php echo $venta->id?></td>
                                             <td><?php echo $venta->nombre?></td>
                                             <td><?php echo $venta->t_comprovante?></td>
                                          
                                             <td><?php echo $venta->num_documento?></td>
                                            
                                             <td><?php echo $venta->fecha?></td>
                                             <td><?php echo $venta->nombres?></td>
                                             <td><?php echo $venta->total?></td>
                                          
                                             <td>
                                                 <div class="btn-group">

                                                     <a href="<?php echo base_url(); ?>movimientos/ventas/delete/<?php echo $venta->id?>" class="btn btn-danger eliminar"><span class="fa fa-trash-alt"></span></a>

                                                 </div>
                                             </td>
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
