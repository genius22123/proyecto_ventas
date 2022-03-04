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
              <h3 class="card-title">Añadir Usuarios</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="form-agregar" action="<?php echo base_url() ?>administrador/usuarios/guardar" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label>Nombres</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("nombres"))? 'is-invalid':'' ?>" placeholder="Ingrese Nombre" name="nombres" value="<?php echo set_value("nombres")?>">
                <?php echo form_error("nombres")?>  
                </input>
                </div>
                <div class="form-group ">
                  <label>Apellidos</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("apellidos"))? 'is-invalid':'' ?>" placeholder="Ingrese Apellidos" name="apellidos" value="<?php echo set_value("apellidos")?>">
                  <?php echo form_error("apellidos")?>
                  </input>
                </div>
                <div class="form-group">
                  <label>Telefono</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("telefono"))? 'is-invalid':'' ?>" placeholder="Ingrese telefono" name="telefono" value="<?php echo set_value("telefono")?>">
                  <?php echo form_error("telefono")?>
                  </input>
                </div>
                <div class="form-group ">
                  <label>Email</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("email"))? 'is-invalid':'' ?>" placeholder="Ingrese email" name="email" value="<?php echo set_value("email")?>">
                  <?php echo form_error("email")?>
                  </input>
                </div>
                <div class="form-group ">
                  <label>Usuario</label>
                  <input type="text" class="form-control <?php echo !empty(form_error("username"))? 'is-invalid':'' ?>" placeholder="Ingrese Usuario" name="username" value="<?php echo set_value("username")?>">
                  <?php echo form_error("username")?>
                  </input>
                </div>
                <div class="form-group ">
                  <label>Contraseña</label>
                  <input type="password" class="form-control <?php echo !empty(form_error("password"))? 'is-invalid':'' ?>" placeholder="Ingrese Contraseña" name="password" value="<?php echo set_value("password")?>">
                  <?php echo form_error("password")?>
                  </input>
                </div>
                <div class="form-group">
                  <label>Rol</label>
                  <select name="rol" id="rol" class="form-control">
                    <?php foreach($roles as $rol):?>
                    <option value="<?php echo $rol->id?>" >
                    <?php echo $rol->nombre?>
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