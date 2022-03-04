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
              <h3 class="card-title">Añadir Producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="form-agregar" action="<?php echo base_url() ?>mantenimiento/productos/guardar" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label>Codigo</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("codigo"))? 'is-invalid':'' ?>" placeholder="Ingrese Codigo" name="codigo" value="<?php echo set_value("codigo")?>">
                <?php echo form_error("codigo")?>  
                </input>
                </div>
                <div class="form-group ">
                  <label>nombre</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'' ?>" placeholder="Ingrese Nombre" name="nombre" value="<?php echo set_value("nombre")?>">
                  <?php echo form_error("nombre")?>
                  </input>
                </div>
                <div class="form-group">
                  <label>Descripcion</label>
                  <textarea  class="form-control" placeholder="Ingrese Descripcion" rows="3" name="descripcion" >
                  </textarea>
                </div>
                <div class="form-group ">
                  <label>Precio</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("precio"))? 'is-invalid':'' ?>" placeholder="Ingrese Precio" name="precio" value="<?php echo set_value("precio")?>">
                  <?php echo form_error("precio")?>
                  </input>
                </div>
                <div class="form-group ">
                  <label>Stock</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("stock"))? 'is-invalid':'' ?>" placeholder="Ingrese Stock" name="stock" value="<?php echo set_value("stock")?>">
                  <?php echo form_error("stock")?>
                  </input>
                </div>
                <div class="form-group">
                  <label>Categoria</label>
                  <select name="categoria" id="categoria" class="form-control">
                    <?php foreach($categorias as $categoria):?>
                    <option value="<?php echo $categoria->id?>" >
                    <?php echo $categoria->nombre?>
                    </option>
                    <?php endforeach;?>
                  </select>
                </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button id="btn-save" type="submit" class="btn btn-primary">Añadir</button>
                <a href="<?php echo base_url() ?>mantenimiento/productos" class="btn btn-danger">Cancelar</a>
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