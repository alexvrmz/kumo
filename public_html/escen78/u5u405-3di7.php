<?php
include('iDi0m45/'.$iDi['u5h8ir5_iDi'].'/i_u5u405-3di7.php');
include('p4rc4l35/c4bec3r4.php');
include('p4rc4l35/m3nu-p4.php');
include('p4rc4l35/7i7ul0.php');
?>

<?php
            foreach ($d4705_u5u as $key => $u5h34r5) { ?>      
    <!-- Main content -->
    <div class="row">
      <?php if($u5h34r5['u5hOn44P8ir5'] == 1){ ?>
        <div class="col-md-6">
      <?php } else { ?>
        <div class="col-12">
      <?php } ?>
          <!-- acciones -->
          <div class="card <?= $brr4 ?> card-outline col-md-12 col-sm-12">
            <div class="card-header">
                <h3 class="card-title"><?= lbl_acx0 ?></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fad fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                        
                    <a href="app?accion=5u540l" class="btn btn-app bg-success">
                      <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
                    </a>   

                  <?php if(v4lID44x50("500-004", $u5u4i0) == TRUE): /// --- permiso suspender usuario ?>
                    <?php if($u5h34r5['u5hOn8ir5'] == '1'){ ?>
                      <a href="ap4673i/u5u405_4pi.php?accion=10300&u5h8ir5nm=<?= $eCry($u5h34r5['u5hID8ir5']) ?>" class="btn btn-app bg-danger">
                        <i class="fad fa-user-slash"></i> <?= btn_5u5p3Nd3R ?>
                      </a>
                    <?php } elseif($u5h34r5['u5hOn8ir5'] == '0') { ?>
                      <a href="ap4673i/u5u405_4pi.php?accion=10400&u5h8ir5nm=<?= $eCry($u5h34r5['u5hID8ir5']) ?>" class="btn btn-app bg-success">
                        <i class="fad fa-user"></i> <?= btn_d355u5p3Nd3R ?>
                      </a>
                    <?php } ?>
          
                  <?php endif; ?>

                  <?php //if(v4lID44x50("500-007", $u5u4i0) == TRUE): /// --- generar llaves ?>
                  
                      <!--<a class="btn btn-app bg-warning disabled"><i class="fad fa-sync-alt"></i> <?= btn_R3s7_llyT ?></a>-->
                            
                  <?php //endif; ?>

                  <?php if(v4lID44x50("500-006", $u5u4i0) == TRUE && $u5h34r5['u5hOn44P8ir5'] == 0): /// --- generar Token ?>
                          <a href="ap4673i/g3nt0k3n_4pi.php?accion=50210&u5h8ir5nm=<?= $eCry($u5h34r5['u5hID8ir5']) ?>" class="btn btn-app bg-purple"><i class="fad fa-sync-alt"></i> <?= btn_07r0Di5p02 ?></a>
                  <?php endif; ?>

                  <?php if(v4lID44x50("300-003", $u5u4i0) == TRUE): /// --- editar permisos ?>
                    
                      <a href="app?accion=5uXds4H&u5u4oxX=<?= $eCry($u5h34r5['u5hID8ir5']) ?>" class="btn btn-app bg-warning"><i class="fad fa-key"></i> <?= btn_p3rm505 ?></a>
                    
                  <?php endif; ?> 
                  <?php if(v4lID44x50("700-015", $u5u4i0) == TRUE && $ea == false): /// --- vincular auto ?>
                    
                    <a href="app?accion=asNxV&xux=<?= $eCry($u5h34r5['u5hID8ir5']) ?>" class="btn btn-app bg-purple" ><i class="fad fa-car-side"></i> <?= btn_linkaut ?></a>
                  
                  <?php endif; ?>
            
            </div>
          </div>
          <!-- acciones -->
        </div>
      <?php if($u5h34r5['u5hOn44P8ir5'] == 1){ ?>
        <div class="col-md-6">
          <!-- acciones -->
          <?php if($u5h34r5['u5hOn44P8ir5'] == 1){ ?>
            <div class="card <?= $brr4 ?> card-outline col-md-12 col-sm-12">
              <div class="card-header">
                <h3 class="card-title"><?= lbl_dpsitvncul2 ?></h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fad fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2" style="text-align: center;">
                    <i class="fad fa-mobile bg-accent" style="font-size: 60px;"></i>
                  </div>
                  <div class="col-md-10">
                    <b>Nombre Dispositivo:</b> <a><?= $u5h34r5['sjh77'] ?></a><br>
                    <b>ID Dispositivo:</b> <a><?= $u5h34r5['dis66'] ?></a><br>
                    <a href="#" class="btn bg-blue btn-flat btn-xs disabled" title="Proximamente..."><i class="fad fa-history"></i> Ver Historial</a>
                    <?php if(v4lID44x50("500-006", $u5u4i0) == TRUE): /// --- generar Token ?>
                      <a href="ap4673i/g3nt0k3n_4pi.php?accion=50210&u5h8ir5nm=<?= $eCry($u5h34r5['u5hID8ir5']) ?>" class="btn btn-flat btn-xs bg-purple"><i class="fad fa-sync-alt"></i> <?= btn_07r0Di5p0 ?></a>
                    <?php endif; ?>
                  </div>
                </div>               
              </div>
            </div>
          <?php } ?>
          <!-- acciones -->
        </div>
      <?php } ?>

    <?php if($_SESSION['cxxt453_add'] != '' && $_SESSION['pp_xx005_add'] != ''){ ?>
        <div class="col-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fad fa-shield-check"></i> Info</h5>
            La clave del usuario: <span class="badge bg-warning" title="Usuario"><?= $_SESSION['pp_xx005_add'] ?></span> es: <span class="badge bg-warning" title="Contraseña"><?= $_SESSION['cxxt453_add'] ?></span> <br>
            Guardala en un lugar seguro, despues de cerrar este recuadro o actualizar la pagina, ya no se mostrara.
          </div>
        </div>
      <?php } 
        unset($_SESSION['cxxt453_add']);
        unset($_SESSION['pp_xx005_add']);
      ?>

      <!-- Default box -->
      <?php if($ea === true){ ?>
        <div class="card <?= $brr4 ?> card-outline col-md-12 col-sm-12">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_assia ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card-body table-responsive p-0">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <?php if($u5u4i0 == 1){ ?>
                      <th style="width: 10px"><?= lbl_t4biD ?></th>
                    <?php } ?>
                    <th><?= lbl_t4beco ?></th>
                    <th><?= lbl_t4bpl4 ?></th>
                    <th><?= lbl_t4bmk ?></th>
                    <th><?= lbl_m0d ?></th>                    
                    <th><?= lbl_ft ?></th>
                    <?php if(v4lID44x50("700-003", $u5u4i0) == TRUE){ /// --- EDITAR USUARIOS ?>
                      <th style="width: 10px"><?= lbl_t4b3Di74r ?></th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php if($u5u4i0 == 1){ ?>
                      <td><?= $vXIDxv ?></td>
                    <?php } ?>
                    <td class="corta-texto"><?= $vXECxv ?></td>
                    <td class="corta-texto"><?= $vXPLxv ?></td>
                    <td class="corta-texto"><?= $vXMKxv ?></td>
                    <td class="corta-texto"><?= $xVMDxv ?> <?= $xVTPxv ?> <?= $xVANxV ?></td>
                    <td><span style="margin: 0;width: 80px;"><?= $xVFTxv ?></span></td>
                    <?php if(v4lID44x50("700-003", $u5u4i0) == TRUE){ /// --- EDITAR USUARIOS ?>
                      <td>
            
                        <div class="btn-group"> 
                          <a href="app?accion=v3hFh4_sd04&gju8UUy=<?= $eCry($vXIDxv) ?>" type="button" class="btn btn-warning btn-flat btn-xs" title="Editar"><i class="fad fa-edit"></i></a>
                          <a href="ap4673i/v3hiCs_4pi.php?accion=d3svA&aIDdx=<?= $eCry($vXIDxv) ?>&uxu=<?= $eCry($u5h34r5['u5hID8ir5']) ?>&r3l=<?= $eCry($xDridn) ?>" type="button" class="btn btn-danger btn-flat btn-xs"><i class="fad fa-unlink" title="Desasignar"></i></a>
                        </div>

                      </td>
                    <?php } ?>
                  </tr>
                 
                </tbody>
              </table>
                
            </div>            
          </div>
        </div>
      <?php }
            elseif($ea === false){ ?>

      <?php } ?>

        <div class="col-md-9">
        <div class="card <?= $brr4 ?> card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_1er7i7u ?><?php if($u5h34r5['u5hOn8ir5'] == '0'){ ?> <small><?= lbl_ud53r3r5w; }?></small></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            <div class="card-body p-0">
                <?php if(!empty($_SESSION['m3ns4j3Frm'])){ ?>
                  Por favor verifica <?= $_SESSION['err'] ?> pendiete(s):
                  <ul>
                    <?php foreach ($_SESSION['m3ns4j3Frm'] as $key => $value) { ?>
                      <li><?= $value ?></li>
                    <?php } ?>
                  </ul>
                <?php } ?>

              <form name="edit_user" method="post" action="ap4673i/u5u405_4pi.php?accion=5u540l_03">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx001"><?= lbl_n3w1erN0m8r3 ?>*</label>
                      <?php if($pp_xx001 != ''){ $px001 = $dCry($pp_xx001); } else { $px001 = $u5h34r5['u5hN18ir5']; } ?>
                      <input type="text" class="form-control" name="pp_xx001" id="pp_xx001" placeholder="Primer Nombre" value="<?= $px001 ?>" <?php //required ?>>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx002"><?= lbl_n3w2dON0m8r3 ?></label>
                      <input type="text" class="form-control" name="pp_xx002" id="pp_xx002" placeholder="Segundo Nombre" value="<?= $u5h34r5['u5hN28ir5'] ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx003"><?= lbl_n3w4PP ?>*</label>
                      <input type="text" class="form-control" name="pp_xx003" id="pp_xx003" placeholder="Apellido Paterno" value="<?= $u5h34r5['u5hA18ir5'] ?>" <?php //required ?>>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx004"><?= lbl_n3w4PM ?></label>
                      <input type="text" class="form-control" name="pp_xx004" id="pp_xx004" placeholder="Apellido Materno" value="<?= $u5h34r5['u5hA28ir5'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="pp_xx005"><?= lbl_n3w3M4il ?>*</label>
                      <input type="email" class="form-control" name="pp_xx005" id="pp_xx005" placeholder="<?= lbl_n3w3M4il ?>" value="<?= $u5h34r5['u5hUS8ir5'] ?>" <?php //required ?>>
                    </div>
                  </div>
  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="cxxt453"><?= lbl_n3wP455w ?></label>
                      <input type="password" class="form-control" name="cxxt453" id="cxxt453" >
                    </div>
                  </div>

                  <!--div class="col-sm-12">
                    <div class="form-group">
                      <label for="pp_xx007"><?= lbl_n3wd8ir ?></label>
                      <input type="text" class="form-control" name="pp_xx007" id="pp_xx007" disabled value="<?= $u5h34r5['u5hUS8ir5'] ?>">
                    </div>
                  </div>--->
                  <?php //if(v4lID44x50("500-005", $u5u4i0) == TRUE){ /// --- Permiso ver llaves y token ?>

                    <!--<button type="button" data-toggle="modal" data-target="#modal_llvs" class="btn bg-gradient-warning btn-app">
                      <i class="fad fa-eye"></i> <?= lbl_asdE30 ?>
                    </button>

                                  

                    <div class="col-sm-12">&nbsp;
                    </div>-->

                  <?php //} ?>

                  <div class="col-sm-12">
                    <input type="hidden" name="u5h8ir5nm" id="u5h8ir5nm" value="<?= $u5h34r5['u5hID8ir5'] ?>">
                    <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
                  </div>
                </div>  

            
              </form>

            </div>
          </div>
          <!--/.card-body -->
        </div>
                  </div>



                  <div class="col-md-3">
        <div class="card <?= $brr4 ?> card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_1er7i7u2 ?><?php if($u5h34r5['u5hOn8ir5'] == '0'){ ?> <small><?= lbl_ud53r3r5w; }?></small></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
              </button>
            </div>
          </div>
          
          <div class="card-body">
            <div class="card-body p-0">

            Empresa: <?= $u5h34r5['nEmP'] ?><br>
              Flota: <?= $u5h34r5['nFlO'] ?>


              

              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#c4mFe"> Cambiar </button>
              <div class="form-group">
                <label for="xFL0"><?= emxSsdA ?></label>
                <select class="form-control" name="XFL0" id="XFL0" <?php //required ?>>
                  <option value="0" ><?= sleeccx ?></option>
                  <?php foreach ($LDE as $key => $value) { ?>
                    <option value="<?= $value['xEID'] ?>" <?php if($u5h34r5['xDeidn'] == $value['xEID']) { echo 'selected'; } ?>><?= $value['xNIc'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="XFL1"><?= fl57h ?></label>
                <select class="form-control" name="XFL1" id="XFL1" <?php //required ?>>
                  <option value="0" ><?= sleeccx ?></option>
                  <?php foreach ($LDF as $key => $value) { ?>
                    <option value="<?= $value['xFID'] ?>" ><?= $value['xFDc'] ?></option>
                  <?php } ?>
                </select>
              </div>




            </div>
            
          </div>
          <!--/.card-body -->

         
        </div>

        <script type="text/javascript">
            atOptions = {
              'key' : 'abd0f6a20a26d349d295f4d6dd323474',
              'format' : 'iframe',
              'height' : 250,
              'width' : 300,
              'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://writtenanonymousgum.com/abd0f6a20a26d349d295f4d6dd323474/invoke.js"></scr' + 'ipt>');
          </script>


                  </div>


                  </div>

      <?php if($_SESSION['publicidad'] == 1){ echo add728x90(); } ?>

          
      <!-- /.card -->
    <?php if(v4lID44x50("700-015", $u5u4i0) == TRUE){ /// --- vincular auto ?>
      <div class="modal fade" id="asign">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ap4673i/u5u405_4pi.php?accion=5u540l_04">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_asigau ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="ap4673i/v3hiCs_4pi.php?accion=assBtf" method="POST">
                  <!--<pre>
                    <?php print_r($lV); ?>
                  </pre>-->
                  <div class="form-group">
                    <label for="as_001"><?= lbl_as001 ?></label>
                    <select class="form-control" name="as_001" id="as_001">
                      <option value="nada">Selecciona...</option>
                      <?php foreach ($lV as $key => $value) {?>
                        <option value="<?= $value['vXIDxv'] ?>"><?= $value['vXECxv'] ?> - <?= $value['vXPLxv'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                </form>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>              
                <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
              </div>
           </form> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->



      </div>
    <?php } ?>


    <div class="modal fade" id="c4mFe">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="#">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_dasdau ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="#" method="POST">
                  <!--<pre>
                    <?php print_r($lV); ?>
                  </pre>-->
                  <div class="form-group">
                    <label for="pp_xx007_add">Empresa*</label>
                    <select class="form-control <?= $v ?>" name="pp_xx007_add" id="pp_xx007_add" onchange="this.form.submit()">
                      <option value="nada">Selecciona...</option>
                      <?php foreach (c0nEmP(0,0) as $key => $value) {?>
                        <option value="<?= $value['XrIDEx'] ?>" <?php if($value['XrIDEx'] === $pp_xx007_add) { echo 'selected'; } ?>><?= dCry2($value['XrNICEx']) ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  
                  <div class="form-group">
                    <label for="pp_xx008_add">Flota*</label>
                    <select class="form-control <?= $v ?>" name="pp_xx008_add" id="pp_xx008_add">
                      <option value="nada">Selecciona...</option>
                      <?php foreach (C0nFl0(0, $pp_xx007_add) as $key => $value) {?>
                        <option value="<?= $value['xfdifx'] ?>" <?php if($value['xfdifx'] === $pp_xx008_add) { echo 'selected'; } ?>><?= $value['xfmnfx'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                </form>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>              
                <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
              </div>
           </form> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->



      </div>


      <!--
      <div class="modal fade" id="modal_llvs">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ap4673i/u5u405_4pi.php?accion=5u540l_04">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3wu5u4ri0 ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                
                <?php //if(v4lID44x50("500-005", $u5u4i0) == TRUE){ /// --- Permiso ver llaves y token ?>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="ll_privada"><?= lbl_lL4v3Pv ?></label>
                      <textarea class="form-control" rows="3"><?= $u5h34r5['u5h8ir5_llave_privada'] ?></textarea>     
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="ll_publica"><?= lbl_lL4v3Pu ?></label>
                      <textarea class="form-control" rows="3"><?= $u5h34r5['u5h8ir5_llave_publica'] ?></textarea>            
                    </div>
                    
                  </div> 

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="u5htK8ir5"><?= lbl_70k3n ?></label>
                      <input type="text" class="form-control" name="u5htK8ir5" id="u5htK8ir5" value="<?= $u5h34r5['u5htK8ir5'] ?>">
                    </div>
                  </div>                  

                  <div class="col-sm-12">&nbsp;
                  </div>

                <?php //} ?>

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
              
              
              </div>
           </form> 
          </div>
         
        </div>
        



      </div>-->

    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->
  <?php } ?>
<?php
include('p4rc4l35/3p1416e.php');
 ?>
