
          

      



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">

      <div class="card-body">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  id="form-editar" action="<?php echo base_url() ?>mantenimiento/categorias/edit_save" method="post">
               <input type="hidden" name="idcategoria" value="<?php echo $categoria->id?>">
   
                <div class="card-body">
                  <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'' ?>"   name="nombre" value="<?php 
                    if(!empty(form_error("nombre"))){
                        echo set_value("nombre");
                    }else{
                      echo $categoria->nombre;
                    }
                ?>" >
                    <?php echo form_error("nombre")?> 
                  </div>
                  <div class="form-group">
                    <label >Descripcion</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("descripcion"))? 'is-invalid':'' ?>"    name="descripcion"   value="<?php echo !empty(form_error("descripcion"))? set_value("descripcion") : $categoria->descripcion;?>" >
                    <?php echo form_error("descripcion")?> 
                  </div>
             
                  
                </div>
             
                  
             
                <!-- /.card-body -->
                <div class="card-footer">
                <button id="btn-save" type="submit" class="btn btn-primary">Añadir</button>
                <a href="<?php echo base_url() ?>mantenimiento/categorias" class="btn btn-danger">Cancelar</a>
              </div>
            
              </form>


          </div>

        </div>
      </div>
      <!-- /.card-body -->

      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


