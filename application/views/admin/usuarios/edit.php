


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
              <h3 class="card-title">Editar USUARIO</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  id="form-editar" action="<?php echo base_url() ?>administrador/usuarios/edit_save" method="post">
                <div class="card-body">
                <input type="hidden" name="idusuario" value="<?php echo $usuario->id?>"> 
                  <div class="form-group">
                    <label >Nombres</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("nombres"))? 'is-invalid':'' ?>"   name="nombres" value="<?php echo !empty(form_error('nombres')) ? set_value('nombres') : $usuario->nombres?>" >
                    <?php echo form_error("nombres")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Apellidos</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("apellidos"))? 'is-invalid':'' ?>"    name="apellidos"  value="<?php echo !empty(form_error('apellidos')) ? set_value('apellidos') : $usuario->apellidos?>">
                    <?php echo form_error("apellidos")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Telefono</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("telefono"))? 'is-invalid':'' ?>"    name="telefono"  value="<?php echo !empty(form_error('telefono')) ? set_value('telefono') : $usuario->telefono?>">
                    <?php echo form_error("telefono")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("email"))? 'is-invalid':'' ?>"    name="email"  value="<?php echo !empty(form_error('email')) ? set_value('email') : $usuario->email?>" >
                    <?php echo form_error("email")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Usuario </label>
                    <input type="text" class="form-control <?php echo !empty(form_error("username"))? 'is-invalid':'' ?>"    name="username"  value="<?php echo !empty(form_error('username')) ? set_value('username') : $usuario->username?>" >
                    <?php echo form_error("username")?>  
                    </input>
                  </div>
                  <div class="form-group">
                    <label >Contraseña  </label>
                    <input type="text" class="form-control <?php echo !empty(form_error("password"))? 'is-invalid':'' ?>"    name="password"  value="<?php echo !empty(form_error('password')) ? set_value('password') : $usuario->password?>" >
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
















