<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_clientes_editar.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>


    <!-- Main content -->
      <!-- acciones -->
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title"><?= acciones ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
            <!-- 
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fad fa-times"></i>
            </button>-->
          </div>
        </div>
        <div class="card-body">
          
          <div class="card-body p-0">     
            <a href="app?accion=clientes" class="btn btn-app bg-success">
              <i class="fad fa-arrow-left"></i> <?= regresar ?>
            </a>   
  
          </div>

        </div>
      </div>
      <!-- acciones -->
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
      

        <div class="card-header">
          <h3 class="card-title"><?= datosCliente ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body p-0">
            <form method="POST" action="ApiPHP/clientes_api?accion=procesaCliente" name="nuevaCliente">  
              
                  <?php if(!empty($_SESSION['mensajeForm'])){ ?>
                    <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h5><i class="fad fa-cat-space fa-2x" style="--fa-secondary-opacity: 1.0; --fa-primary-color:black ; --fa-secondary-color: #0080ff91; --fa-flash-opacity: 0.67; --fa-flash-scale: 1.075;"></i> Por favor verifica <?= $_SESSION['formError'] ?> pendiete(s):</h5>
                      <ul>
                        <?php foreach ($_SESSION['mensajeForm'] as $key => $value) { ?>
                          <li><?= $value ?></li>
                        <?php } ?>
                      </ul> 
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="clienteNombre"><?= nombre ?>*</label>
                    <input type="text" class="form-control" id="clienteNombre" name="clienteNombre" value="<?= $clienteNombre = $cliente['cliente_nombre'] != '' ? $cliente['cliente_nombre']:$_SESSION['formCliente']['clienteNombre'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteEspecie"><?= especie ?>*</label>
                    <select class="form-control" id="clienteEspecie" name="clienteEspecie" required onchange="this.form.submit()">
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach (listaSelectEspecies() as $key => $especie) { ?>
                        <option value="<?= $especie['especieID'] ?>" <?= $select = $cliente['cliente_especie'] == $especie['especieID'] ? 'selected':'' ?>><?= $especie['especieDescripcion'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="clienteRaza"><?= raza ?>*</label>
                    <select class="form-control" id="clienteRaza" name="clienteRaza" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($listaRazas as $key => $raza) { ?>
                        <option value="<?= $raza['razaID'] ?>" <?= $select = $cliente['cliente_raza'] == $raza['razaID'] ? 'selected':'' ?>><?= $raza['razaDescripcion'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="clienteSexo"><?= sexo ?>*</label>
                    <select class="form-control" id="clienteSexo" name="clienteSexo" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($sexo as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $cliente['cliente_sexo'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="clienteEsteril"><?= esteril ?>*</label>
                    <select class="form-control" id="clienteEsteril" name="clienteEsteril" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($estadoSexual as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $cliente['cliente_esteril'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="clienteColor"><?= color ?>*</label>
                    <select class="form-control" id="clienteColor" name="clienteColor" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($colores as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $cliente['cliente_color'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label><?= nacimiento ?>*</label>
                    <div class="input-group date" id="clienteNacimiento" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#clienteNacimiento" name="clienteNacimiento" id="clienteNacimiento" value="<?= $cliente['cliente_nacimiento'] ?>" />
                      <div class="input-group-append" data-target="#clienteNacimiento" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="clienteCliente"><?= cliente ?></label>
                    <select class="form-control" id="clienteCliente" name="clienteCliente" >
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($listaClientes as $key => $cliente) { ?>
                        <option value="<?= $cliente['clienteID'] ?>" <?= $select = $cliente['cliente_cliente'] == $cliente['clienteID'] ? 'selected':'' ?>><?= $cliente['clienteNombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div>  
                  <input type="hidden" name="editar" id="editar" value="editar">
                  <input type="hidden" name="clienteID" id="clienteID" value="<?=$clienteID ?>">
                  
                
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= guardar ?></button>
            </form>

          </div>
        </div>
        <!--/.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
