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
                <h3 class="card-title">Añadir Categoria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form-agregar1" action="<?php echo base_url() ?>mantenimiento/categorias/guardar" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nombre</label>
                    <input id="i1" type="text" class="<?php echo empty(form_error("nombre"))? 'form-control':'form-control is-invalid' ?>"  placeholder="Ingrese Nombre" name="nombre" value="<?php echo set_value('nombre')?>">
                  <?php echo form_error("nombre")?> 
                  </div>
                  <div class="form-group">
                    <label >Descripcion</label>
                    <input class="form-control  <?php echo !empty(form_error("descripcion"))? 'is-invalid':'' ?>" placeholder="Ingrese una Descripcion" rows="3" name="descripcion" value="<?php echo set_value('descripcion')?>" ></input>
                    <?php echo form_error("descripcion")?>
                  </div>
             
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="btn-save" type="submit" onclick="verificar()" class="btn btn-primary">Añadir</button>
                  <a href="<?php echo base_url() ?>mantenimiento/categorias" class="btn btn-danger">Cancelar</a>
                </div>
              </form>
              <span></span>
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

  













  