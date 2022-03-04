 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">Listado de Clientes</h3>

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
                          <a href="<?php echo base_url();?>mantenimiento/clientes/add" class="btn btn-primary btn-flat "  ><span class="fa fa-plus"></span> Agregar</a>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <table id="example1" class="table table-bordered btn-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombres</th>
                                   
                                     <th>Tipo Cliente</th>
                                     <th>Tipo Documento</th>
                                     <th>Numero Documento</th>
                                     <th>Telefono</th>
                                     <th> Direccion </th>
                                     <th>Opciones</th>

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
                                          
                                             <td>
                                                 <div class="btn-group">
                                                     <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                                     <a href="<?php echo base_url(); ?>mantenimiento/clientes/edit/<?php echo $cliente->id?>" class="btn btn-success edit" ><span class="fa fa-pencil-alt"></span></a>
                                                     <a href="<?php echo base_url(); ?>mantenimiento/clientes/delete/<?php echo $cliente->id?>" class="btn btn-danger eliminar"><span class="fa fa-trash-alt"></span></a>

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

 

 <!-- /.content-wrapper -->


 <!-- Modal agregar -->


<!-- Modal editar -->

<div class="modal fade" id="modal-editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-edit">
       Editar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary save-modal">Guardar</button>
      </div>
    </div>
  </div>
</div>