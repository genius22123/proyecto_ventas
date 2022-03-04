


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
            <form  id="form-editar" action="<?php echo base_url() ?>mantenimiento/productos/edit_save" method="post">
               <input type="hidden" name="idproducto" value="<?php echo $producto->id?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Codigo</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("codigo"))? 'is-invalid':'' ?>"   name="codigo" value="<?php echo !empty(form_error('codigo')) ? set_value('codigo') : $producto->codigo?>" >
                    <?php echo form_error("codigo")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'' ?>"    name="nombre"  value="<?php echo !empty(form_error('nombre')) ? set_value('nombre') : $producto->nombre?>">
                    <?php echo form_error("nombre")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Descripcion</label>
                    <input type="text" class="form-control"    name="descripcion"  value="<?php echo $producto->descripcion?>">
                  </div>
                  <div class="form-group">
                    <label >Precio</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("precio"))? 'is-invalid':'' ?>"    name="precio"  value="<?php echo !empty(form_error('precio')) ? set_value('precio') : $producto->precio?>" >
                    <?php echo form_error("precio")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Stock</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("stock"))? 'is-invalid':'' ?>"    name="stock"  value="<?php echo !empty(form_error('stock')) ? set_value('stock') : $producto->stock?>" >
                    <?php echo form_error("stock")?>  
                    </input>
                  </div>
                  
                  <div class="form-group">
                  <label>Categoria</label>
                  <select name="categoria" id="categoria" class="form-control">
                    <?php foreach($categorias as $categoria):?>
                      <?php if($categoria->id==$producto->categoria_id):?>
                    <option value="<?php echo $categoria->id?>" selected >
                    <?php echo $categoria->nombre?>
                    </option>
                    <?php else:?>
                      <option value="<?php echo $categoria->id?>"  >
                    <?php echo $categoria->nombre?>
                    </option>
                      <?php endif;?>
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
















