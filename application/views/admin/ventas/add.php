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
                            <h3 class="card-title">Añadir Clientes</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->


                        <form action="<?php echo base_url(); ?>movimientos/ventas/guardar" method="post">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-6 ">
                                        <label for="">Comprobante</label>
                                        <select name="comprobantes" id="comprobantes" class="form-control" required>
                                            <option value="">Seleccione...</option>
                                            <?php foreach ($tipocomprobantes as $tipocomprobante) : ?>
                                                <?php $data_compro = $tipocomprobante->id . "*" . $tipocomprobante->cantidad . "*" . $tipocomprobante->igv . "*" . $tipocomprobante->serie ?>
                                                <!-- guardadno datos de la tapbla tipo comprovante  ---  dodne esta lo pones en el value de la  opcion que elijamios -->
                                             <option value="<?php echo $data_compro ?>"><?php echo $tipocomprobante->nombre ?></option> 
                                              <!-- con finalidad de capturar los dartos y luego mostrarlos y editarlos -->
                                            <?php endforeach; ?>
                                        </select>
                                        <input type="hidden" id="idcomprobante" name="idcomprobante"><!-- guardaremos el ide del comprovante -->
                                        <input type="hidden" id="igv">

                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="validationTooltip02">Serie</label>
                                        <input type="text" class="form-control" name="serie" id="serie" readonly>



                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="validationTooltip02">Numero</label>
                                        <input type="text" class="form-control" id="numero" name="numero" readonly>



                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 ">
                                        <label for="">Cliente:</label>
                                        <div class="input-group">
                                            <input type="hidden" name="idcliente" id="idcliente">
                                            <input type="text" class="form-control" disabled="disabled" id="cliente">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default"><span class="fa fa-search"></span> Buscar</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Fecha:</label>
                                        <input type="date" class="form-control" name="fecha" required>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="">Producto:</label>
                                        <input type="text" class="form-control" id="producto">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">&nbsp;</label>
                                        <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                    </div>
                                </div>
                                <div class="pt-4">

                                    <table id="tbventas" class="table table-bordered btn-hover">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Nombre</th>

                                                <th>Precio</th>
                                                <th>Stock Max.</th>
                                                <th>Cantidad</th>
                                                <th>Importe</th>
                                                <th>opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 ">
                                        <label for="validationTooltip02">Sub-Total</label>
                                        <input type="text" class="form-control" placeholder="Username" name="subtotal" readonly="readonly">



                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="validationTooltip02">IGV</label>
                                        <input type="text" class="form-control" placeholder="Username" name="igv" readonly="readonly">



                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="validationTooltip02">Descuento</label>
                                        <input type="text" class="form-control" placeholder="Username" name="descuento" value="0.00" readonly="readonly">



                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="validationTooltip02">Total</label>
                                        <input type="text" class="form-control" placeholder="Username" name="total" readonly="readonly">



                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="btn-save" type="submit" class="btn btn-primary">Añadir</button>
                                <a href="<?php echo base_url() ?>movimientos/ventas" class="btn btn-danger">Cancelar</a>
                            </div>

                        </form>

                    </div>
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



<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lista de Clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($clientes)) : ?>
                            <?php foreach ($clientes as $cliente) : ?>
                                <tr>
                                    <td><?php echo $cliente->id ?></td>
                                    <td><?php echo $cliente->nombre ?></td>
                                    <td><?php echo $cliente->num_documento ?></td>
                                    <?php  $data_cliente = $cliente->id . "*" . $cliente->nombre . "*" . $cliente->tipocliente . "*" . $cliente->tipodocumento. "*" . $cliente->num_documento. "*" . $cliente->telefono. "*" . $cliente->direccion ?>

                                    <td>
                                        <div class="btn-group">
                                           
                                            <button class="btn btn-success ml-3" value="<?php echo $data_cliente ?>" id="btn-check"><span class="fa fa-check-circle"></span></a>


                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->