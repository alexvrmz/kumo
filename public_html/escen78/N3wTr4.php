<?php
include('iDi0m45/'.$iDi['u5h8ir5_iDi'].'/i_N3wTr4.php');
include('p4rc4l35/c4bec3r4.php');
include('p4rc4l35/m3nu-p4.php');
include('p4rc4l35/7i7ul0.php');
?>
    <div class="card <?= $brr4 ?> card-outline col-md-9">
      <div class="card-header">
        <h3 class="card-title"><?= lbl_1er7i7u ?></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fa-duotone fa-minus"></i>
          </button>
        </div> 
      </div>
      <div class="card-body">
        <div class="card-body p-0">         
          <a type="button" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"href="v75t4?axc0=v3hFh4&vh3iP=<?= $eCry($xcIDV3Hs) ?>"><i class="fa-duotone fa-arrow-left"></i> <br><?= btn_46r364rU5u4ri0 ?></a>
        </div>
      </div>
    </div>
      <div class="card <?= $brr4 ?> card-outline col-md-9">
        <div class="card-header">
          <h3 class="profile-username text-center">Trámite | <?= $n4mtR4 ?></h3>  
        </div>
        <?php if($_SESSION['m3n3Rr0R_num'] != 0){ ?>
          <div class="row">
            <div class="col-12">
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa-duotone fa-traffic-cone"></i>Por favor verifica <?= $_SESSION['m3n3Rr0R_num'] ?> Errore(s) </h5>
                <ul>
                  <?php foreach ($_SESSION['tXFrm'] as $key => $value) { ?>
                    <li><?= $value ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>
        
        <form name="nuevo" method="post" action="ap4673i/N3wTr4_4pi?axc0=tR4Add" enctype="multipart/form-data">
          <div class="form-group">
            <label for="frm_x001">Número de Trámite*</label>
            <input type="text" class="form-control" id="frm_x001" name="frm_x001" required>
          </div>

          <div class="form-group">
            <label>Fecha Emisión*</label>
            <div class="input-group date" id="frm_x002" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#frm_x002" name="frm_x002" id="frm_x002" required/>
              <div class="input-group-append" data-target="#frm_x002" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa-duotone fa-calendar"></i></div>
              </div>
            </div>
          </div>

          <div class="form-group"> 
            <label>Fecha Vencimiento</label>
            <div class="input-group date" id="frm_x003" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#frm_x003" name="frm_x003" id="frm_x003"/>
              <div class="input-group-append" data-target="#frm_x003" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa-duotone fa-calendar"></i></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="frm_x009">Proveedor*</label>
            <select class="form-control" name="frm_x009" id="frm_x009">
              <option value="nada">Selecciona...</option>
              <?php foreach ($LDP as $key => $value) { ?> 
                <option value="<?= $value['xpD'] ?>"><?= $value['xpN'] ?></option>
              <?php } ?>
            </select> 
          </div>

          <?php /*<div class="form-group">
            <label for="frm_x004">Importe</label>
            <input type="text" class="form-control" name="frm_x004" id="frm_x004">
          </div>*/ ?>

          <div class="form-group">
            <label for="frm_x005">Alerta Personalizada (Días)</label>
            <input type="text" class="form-control" name="frm_x005" id="frm_x005">
          </div>

          <input type="hidden" name="frm_x006" id="frm_x006" value="<?= $xcIDV3Hs ?>" required>
          <input type="hidden" name="frm_x007" id="frm_x007" value="<?= $xDI4Rt ?>" required>
          <input type="hidden" name="frm_x008" id="frm_x008" value="<?= $u5u4i0 ?>" required>
          <input type="hidden" name="rr" id="rr" value="<?= $rr ?>" required>

          <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-success"><i class="fa-duotone fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
          </div>
        </form> 
        <!-- /.card-body -->
      </div>
      
  </section>
</div>
<?php include('p4rc4l35/3p1416e.php'); 
unset($_SESSION['tXFrm']);
unset($_SESSION['m3n3Rr0R_num']);
?>
