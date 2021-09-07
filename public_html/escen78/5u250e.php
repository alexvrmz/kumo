<?php
/// --- Todos los textos en variables 2021/05/21
include('iDi0m45/'.$iDi['u5h8ir5_iDi'].'/i_5u250e.php');
include('p4rc4l35/c4bec3r4.php');
include('p4rc4l35/m3nu-p4.php');
include('p4rc4l35/7i7ul0.php');
?>
  <!-- Main content -->
  <div class="callout callout-info col-12">
    <p><i class="fad fa-bullhorn"></i> <?= actualizacionesSistema ?> <a href="v75t4?axc0=v3r" class="btn btn-info btn-xs">Ver</a></p>
  </div>

  <?php if($rll == 0 || $rll == 2 || $rll == 3){ ?>
    <div class="row">
           
      <div class="col-lg-3 col-6">
        <div class="small-box bg-pink">
          <div class="inner">
            <h3><?= $nP ?></h3>
            <?php if($nP == 1){ ?>
                <p><?= proveedorRegistrado ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-truck-loading"></i>
            </div>
              <a href="v75t4?axc0=pR0VxD" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nP > 1) { ?>
                  <p><?= proveedoresRegistrados ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-truck-loading"></i>
            </div>
              <a href="v75t4?axc0=pR0VxD" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nP == 0) {?>
                    <p><?= proveedoresRegistrados ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-truck-loading"></i>
          </div>
            <a href="v75t4?axc0=pR0VxD" class="small-box-footer"><?= agrergarUno ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } ?>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-purple">
          <div class="inner">
            <h3><?= $nU ?></h3>
            <?php if($nU == 1){ ?>
                <p><?= usuarioRegistrado ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-user"></i>
            </div>
              <a href="v75t4?axc0=5u540l" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nU > 1) { ?>
                  <p><?= usuariosRegistrados ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-users"></i>
            </div>
              <a href="v75t4?axc0=5u540l" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nU == 0) {?>
                    <p><?= usuariosRegistrados ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-users"></i>
          </div>
            <a href="v75t4?axc0=5u540l" class="small-box-footer"><?= agrergarUno ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } ?>

    </div>
  <?php } ?>

  </section>
</div>
  
<?php
include('p4rc4l35/3p1416e.php');
 ?>