 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">Listado de Usuarios</h3>

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
                          <a href="<?php echo base_url();?>administrador/usuarios/add" class="btn btn-primary btn-flat "  ><span class="fa fa-plus"></span> Agregar</a>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <table id="example1" class="table table-bordered btn-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombres</th>
                                     <th>Apellidos</th>
                                     <th>Telefono</th>
                                     <th> email </th>
                                     <th>username</th>
                                     <th>password</th>
                                     <th>rol </th>
                                     <th>Opciones </th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if (!empty($usuarios)) : ?>
                                     <?php foreach ($usuarios as $usuario) : ?>
                                         <tr>
                                             <td><?php echo $usuario->id?></td>
                                             <td><?php echo $usuario->nombres?></td>
                                             <td><?php echo $usuario->apellidos?></td>
                                             <td><?php echo $usuario->telefono?></td>
                                             <td><?php echo $usuario->email?></td>
                                             <td><?php echo $usuario->username?></td>
                                             <td><?php echo $usuario->password?></td>
                                             <td><?php echo $usuario->rol?></td>
                                          
                                             <td>
                                                 <div class="btn-group">
                                               
                                                     <a href="<?php echo base_url(); ?>administrador/usuarios/edit/<?php echo $usuario->id?>" class="btn btn-success edit" ><span class="fa fa-pencil-alt"></span></a>
                                                     <a href="<?php echo base_url(); ?>administrador/usuarios/delete/<?php echo $usuario->id?>" class="btn btn-danger eliminar"><span class="fa fa-trash-alt"></span></a>

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

