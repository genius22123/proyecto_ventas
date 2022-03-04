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
              <h3 class="card-title">Editar Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="form-editar" action="<?php echo base_url() ?>mantenimiento/clientes/edit_save" method="post">
              <input type="hidden" name="idcliente" value="<?php echo $cliente->id ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control <?php echo (form_error("nombre")) != false ? 'is-invalid' : '' ?>" placeholder="Ingrese Nombre" name="nombre" value="<?php echo form_error("nombre") != false? set_value("nombre"):$cliente->nombre?>">
                  <?php echo form_error("nombre") ?>
                  </input>
                </div>

                <div class="form-group">
                  <label for="tipocliente">Tipo de Cliente</label>
                  <select name="tipocliente" id="tipocliente" class="form-control <?php echo (form_error("tipocliente")) != false ? 'is-invalid' : '' ?> ">
                    <option value="">Seleccione...</option>
                    <?php foreach ($tipoclientes as $tipocliente) : ?>
                      <option value="<?php echo $tipocliente->id; ?>"><?php echo $tipocliente->nombre ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?php echo form_error("tipocliente") ?>
                </div>

                <div class="form-group">
                  <label for="tipodocumento">Tipo de Documento</label>
                  <select name="tipodocumento" id="tipodocumento" class="form-control <?php echo (form_error("tipodocumento")) != false ? 'is-invalid' : '' ?>">
                    <option value="">Seleccione...</option>
                    <?php foreach ($tipodocumentos as $tipodocumento) : ?>
                      <option value="<?php echo $tipodocumento->id; ?>"><?php echo $tipodocumento->nombre ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?php echo form_error("tipodocumento") ?>
                </div>

                <div class="form-group">
                  <label>Numero Documento</label>
                  <input type="text" class="form-control <?php echo (form_error("numero")) != false ? 'is-invalid' : '' ?>" placeholder="Ingrese numero" name="numero" value="<?php echo form_error("numero") != false? set_value("numero"):$cliente->num_documento?>">
                  <?php echo form_error("numero") ?>
                  </input>
                </div>


                <div class="form-group">
                  <label for="telefono">Telefono:</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente->telefono; ?>">
                </div>

                <div class="form-group">
                  <label for="direccion">Direccion:</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $cliente->direccion; ?>">
                </div>


              

          </div>

          <!-- /.card-body -->
          <div class="card-footer">
            <button id="btn-save" type="submit" class="btn btn-primary">Gaurdar</button>
            <a href="<?php echo base_url() ?>mantenimiento/clientes" class="btn btn-danger">Cancelar</a>
          </div>
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