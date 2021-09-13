<?php
/// --- Todos los textos en variables 2021/05/21
include('iDi0m45/'.$iDi['u5h8ir5_iDi'].'/i_asgNv.php');
include('p4rc4l35/c4bec3r4.php');
include('p4rc4l35/menu.php');
include('p4rc4l35/7i7ul0.php');
?>
    <!-- Main content -->
       

      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_1er7i7u ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>       
          </div>
        </div>

          <form action="ap4673i/asgNv_4pi.php?accion=svasg" method="POST">
            <div class="card-body">
              
                <div class="row">
                  <?php if($xux != ''){ ?>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="r_001"><?= lbl_u35 ?></label>
                        <br><span><?= $du['u5h8ir5_nombre'] ?><?php //print_r($du) ?></span>
                        <input type="hidden" class="form-control" name="r_001" id="r_001" value="<?= $xux ?>">
                        <input type="hidden" class="form-control" name="r_003" id="r_003" value="xux">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="r_002"><?= lbl_v35 ?></label>
                      <select class="form-control" name="r_002" id="r_002">
                        <option value="nada">Selecciona...</option>
                          <?php foreach ($lV as $key => $value) {?>
                            <option value="<?= $value['vXIDxv'] ?>"><?= $value['vXECxv'] ?> - <?= $value['vXPLxv'] ?> | <?= dCry2($value['vXEIxv']) ?> -> <?= $value['xVFIxv'] ?></option>
                          <?php } ?>
                      </select>
                    </div>
                  <?php } ?>

                  <?php if($v3h != ''){ ?>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="r_002"><?= lbl_v35 ?></label>
                        <br><span><?= dCry2($xgV3co0m) ?> - <?= dCry2($xgVpl40m) ?></span>
                        <input type="hidden" class="form-control" name="r_003" id="r_003" value="v3h">
                        <input type="hidden" class="form-control" name="r_002" id="r_002" value="<?= $xgVid0m ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="r_001"><?= lbl_u35 ?></label>
                      <select class="form-control" name="r_001" id="r_001">
                        <option value="nada">Selecciona...</option>
                          <?php foreach ($du as $key => $value) {?>
                            
                              <option value="<?= $value['u5hID8ir5'] ?>"><?= $value['u5h8ir5_nombre'] ?> | <?= $value['u5hUS8ir5'] ?> </option>
                          
                          <?php } ?>
                      </select>
                    </div>
                  <?php } ?>

                  <div class="row" style="margin-bottom: 20px;">     
                    
                  </div>
                  
                  <div class="col-lg-12">
                    <button class="btn btn-success" type="submit"><i class="fad fa-save"></i> <?= btn_sav3 ?></button>
                  </div>
                  
                </div>
              
            </div>
          </form>
        <!--/.card-body -->
        <div class="card-footer">
        <?= lbl_1er7i7u ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php
include('p4rc4l35/3p1416e.php');
 ?>