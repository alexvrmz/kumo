  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand <?= $iDi['config_navbar'] ?>">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fad fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link"><?= lbl_iNicI0 ?></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><?= lbl_C0N74c70 ?></a>
      </li>
    </ul>
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto nav-child-indent">
      <!-- Banderas Idiomas -->
      <li class="nav-item">
        <?php if($iDi['u5h8ir5_iDi'] == 'es_MX'){ ?>
          <a class="nav-link" href="ap4673i/c4r64iDi?axc0=c02252&u5u4i0=<?= $u5u4i0 ?>&uh73Gg=<?= $_SERVER["REQUEST_URI"] ?>">
            <img src="dist/img/en_US.png" width="24px" height="auto" title="Switch to english">
          </a>
        <?php } elseif($iDi['u5h8ir5_iDi'] == 'en_US'){ ?>
          <a class="nav-link" href="ap4673i/c4r64iDi?axc0=c02251&u5u4i0=<?= $u5u4i0 ?>&uh73Gg=<?= $_SERVER["REQUEST_URI"] ?>">
          <img src="dist/img/es_MX.png" width="24px" height="auto" title="Cambiar a Español">
          </a>
        <?php } ?>
      </li>

      <?php /*<!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start 
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fad fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
             Message Start 
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fad fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Message Start 
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fad fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">En desarrollo...</a>
        </div>
      </li> ----> */ ?>
      

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fad fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fad fa-palette"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom <?= $iDi['config_sidebar'] ?> elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link <?= $iDi['config_brand'] ?>">
      <img src="dist/img/noPixcuaMieke.png" alt="noPixcua Mieke" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KUMO <b>雲</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $_SESSION['u5hFt8ir5'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['u5h8ir5_nombre_corto'] ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link <?= $menu_5u250e ?>">
              <i class="nav-icon fad fa-desktop"></i>
              <p>
                <?= lbl_d4shb ?> 
                <i class="right fad fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          
        

          <?php if(v4lID44x50("1500-001", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_kuru_abierto ?>">
              <a href="v75t4?axc0=bin4kuru" class="nav-link <?= $menu_kuru ?>">
                <i class="nav-icon fad fa-book"></i>
                <p>
                  Bitácora
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
            </li>
          <?php } ?>

          <?php if(v4lID44x50("500-001", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_u5u405_abierto ?>">
              <a href="v75t4?axc0=5u540l" class="nav-link <?= $menu_u5u405 ?>">
                <i class="nav-icon fad fa-users-cog"></i>
                <p>
                  <?= lbl_u5u4ri05 ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=5u540l" class="nav-link <?= $menu_u5u405 ?>">
                    <i class="fad fa-list nav-icon"></i>
                    <p><?= lbl_lI574D0_u5u ?></p>
                  </a>
                </li>
              
              
              </ul>
              
            </li>
          <?php } ?>

          <?php if(v4lID44x50("200-001", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_mascotas_abierto ?>">
              <a href="v75t4?axc0=mascotas" class="nav-link <?= $menu_mascotas ?>">
                <i class="nav-icon fad fa-paw"></i>
                <p>
                  <?= mascotas ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=mascotas" class="nav-link <?= $menu_mascotas ?>">
                    <i class="fad fa-list nav-icon"></i>
                    <p><?= listadoMascotas ?></p>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>


          <?php if(v4lID44x50("1600-000", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_pR0VxD_abierto ?>">
              <a href="v75t4?axc0=pR0VxD" class="nav-link <?= $menu_pR0VxD ?>">
                <i class="nav-icon fad fa-truck-loading"></i>
                <p>
                  <?= lbl_pR0VxD ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=pR0VxD" class="nav-link <?= $menu_pR0VxD ?>">
                    <i class="fad fa-list nav-icon"></i>
                    <p><?= lbl_lI574D0_pR0VxD ?></p>
                  </a>
                </li>
              
              </ul>
              
            </li>
          <?php } ?>

          <?php if(v4lID44x50("400-001", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_m0d78Os_abierto ?>">
              <a href="v75t4?axc0=m0d78Os" class="nav-link <?= $menu_m0d78Os ?>">
                <i class="nav-icon fad fa-puzzle-piece"></i>
                <p>
                  <?= lbl_m0Dul05 ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=m0d78Os" class="nav-link <?= $menu_m0d78Os ?>">
                    <i class="fad fa-list nav-icon"></i>
                    <p><?= lbl_lI574D0_m0D ?></p>
                  </a>
                </li>
              
              </ul>
              
            </li>
          <?php } ?>

          <?php if(v4lID44x50("300-004", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_permisos_abierto ?>">
              <a href="v75t4?axc0=5u550l" class="nav-link <?= $menu_permisos ?>">
                <i class="nav-icon fad fa-lock"></i>
                <p>
                  <?= lbl_p3rMi505 ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=5u550l" class="nav-link <?= $menu_permisos_0 ?>">
                    <i class="fad fa-key nav-icon"></i>
                    <p><?= lbl_lI574D0_p3r ?></p>
                  </a>
                </li>
                
                <?php if($axc0 === '5uXds4H'){ ?>
                  <li class="nav-item">
                    <a href="#" class="nav-link <?= $menu_permisos_2 ?>">
                      <i class="fad fa-user-lock nav-icon"></i>
                      <p><?= lbl_V4r45i6N4D05 ?></p>
                    </a>
                  </li>
                <?php } ?>

              
            
              </ul>
            
            </li>
          <?php } ?>  

          <?php /*if(v4lID44x50("1300-001", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_s3rv_abierto ?>">
              <a href="v75t4?axc0=s3rv" class="nav-link <?= $menu_s3rv ?>">
                <i class="nav-icon fad fa-toolbox"></i>
                <p>
                  <?= lbl_s3rv ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=s3rv" class="nav-link <?= $menu_s3rv_0 ?>">
                    <i class="fad fa-key nav-icon"></i>
                    <p><?= lbl_lI574D0_s3rv ?></p>
                  </a>
                </li>
                             
            
              </ul>
            
            </li>
          <?php }*/ ?>  

          <?php /*if(v4lID44x50("1400-001", $u5u4i0) == TRUE){ /// --- ?>
            <li class="nav-item <?= $menu_d0cx6y_abierto ?>">
              <a href="v75t4?axc0=d0cx6y" class="nav-link <?= $menu_d0cx6y ?>">
                <i class="nav-icon fad fa-cabinet-filing"></i>
                <p>
                  <?= lbl_d0cx6y ?>
                  <i class="right fad fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="v75t4?axc0=d0cx6y" class="nav-link <?= $menu_d0cx6y_0 ?>">
                    <i class="fad fa-list nav-icon"></i>
                    <p><?= lbl_lI574D0_d0cx6y ?></p>
                  </a>
                </li>
                             
            
              </ul>
            
            </li>
          <?php }*/ ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <div class="sidebar-custom">
      <a href="v75t4?axc0=c0Nfi6" class="btn btn-link"><i class="fad fa-cogs"></i></a>
      <a href="v75t4?axc0=l00k5cR3n" class="btn btn-link" style="--fa-secondary-opacity: 1.0; --fa-primary-color: gold; --fa-secondary-color: silver;"><i class="fad fa-lock"></i></a>
      <a href="lgaccs25?axc0=x002" class="btn btn-danger hide-on-collapse pos-right"><i class="fad fa-door-open"></i></a>
    </div>
  </aside>