 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">Listado de Productos</h3>

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
                          <a href="<?php echo base_url();?>mantenimiento/productos/add" class="btn btn-primary btn-flat "  ><span class="fa fa-plus"></span> Agregar</a>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <table id="example1" class="table table-bordered btn-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Codigo</th>
                                     <th>Nombre</th>
                                     <th>Descripcion</th>
                                     <th> Precio </th>
                                     <th>Stock</th>
                                     <th>Categoria_id</th>
                                     <th>Opciones</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if (!empty($productos)) : ?>
                                     <?php foreach ($productos as $producto) : ?>
                                         <tr>
                                             <td><?php echo $producto->id?></td>
                                             <td><?php echo $producto->codigo?></td>
                                             <td><?php echo $producto->nombre?></td>
                                             <td><?php echo $producto->descripcion?></td>
                                             <td><?php echo $producto->precio?></td>
                                             <td><?php echo $producto->stock?></td>
                                             <td><?php echo $producto->categoria?></td>
                                          
                                             <td>
                                                 <div class="btn-group">
                                                     <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                                     <a href="<?php echo base_url(); ?>mantenimiento/productos/edit/<?php echo $producto->id?>" class="btn btn-success edit" ><span class="fa fa-pencil-alt"></span></a>
                                                     <a href="<?php echo base_url(); ?>mantenimiento/productos/delete/<?php echo $producto->id?>" class="btn btn-danger eliminar"><span class="fa fa-trash-alt"></span></a>

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

