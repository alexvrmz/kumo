<?php
include ('ap4673i/ccnnxx547.php');
include ('ap4673i/fncnes5632.php');
?>
<!DOCTYPE html>
<html lang="es_MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KUMO 雲 | Log in | Sistema de Administración en la Nube</title>

  <!-- Google Font: Poppins -->
  <link rel="stylesheet" href="dist/css/fonts/poppins/poppins.css?family=Poppins:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" 
style="min-height: 373.2px;background-color: #454d55; color:white;background-image: url('<?= $carpetaFondos.$fondo ?>');height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;padding-top: 10%;padding-bottom: 10%;">
<div class="login-box" id="app">
  <div class="login-logo">
    <a href="index.php" class="texto-neon-azul" style="color: white;"><br><b>KUMO</b> 雲 </a>
          <?php if(!empty($m3ns4J3) && $err != '' ){ ?>
            <div> 
              <p style="color: white;font-size: 20px;" class="texto-neon-rojo"><?= $dCry($m3ns4J3) ?></p>
            </div>
          <?php }
                elseif(!empty($m3ns4J3) && $err == '') {?>
             <div> 
              <p style="color: white;font-size: 20px;" class="texto-neon-verde"><?= $dCry($m3ns4J3) ?></p>
            </div>
          <?php } ?>
         
      
  </div>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style="background-color: #00000014;">
    <div class="card-body login-card-body" style="background-color: #343a4000; color:white;box-shadow: 0px 0px 81px #007BFF;">
      <p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>
      <form id="inicioSesion" autosomplete="off" method="POST" action="lgaccs25?axc0=x005" class="form">
      <div id="printMe"></div>
        <div class="input-group mb-3">
          <input type="text" class="form-control texto-neon-azul" placeholder="Usuario" name="pp_xx005" style="background-color: #ffffff30;color: white;" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa-duotone fa-user texto-neon-azul"></span>
            </div>
          </div>
        </div> 
        <div class="input-group mb-3">
          <input type="password" class="form-control texto-neon-azul" placeholder="Password" name="psbxX012s" style="background-color: #ffffff30;color: white;" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa-duotone fa-lock texto-neon-azul" ></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block texto-neon-azul" style="background-color: #0000;box-shadow: 0px 0px 20px #007BFF;">Entrar</button>
          </div>
          <!-- /.col -->
        </div>

<!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>-->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="lgaccs25?axc0=p3rMps">Perdi mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="lgaccs25?axc0=r3g7r0" class="text-center">Registrarme</a>
      </p>
    </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!--

  -->
  <style>
    .texto-neon-azul{
      color: #FFFFFF;
      text-shadow: 0 0 8px #007bff, 0 0 2px #007bff, 0 0 10px #007bff, 0 0 6px #007bff, 0 0 20px #007bff, 0 0 20px #007bff, 0 0 1px #007bff, 0 0 12px #007bff;
    }
    .texto-neon-rojo{
      text-shadow: 0 0 8px #f00, 0 0 2px #f00, 0 0 10px #f00, 0 0 6px #f00, 0 0 20px #f00, 0 0 20px #f00, 0 0 1px #f00, 0 0 12px #f00;
    }
    .texto-neon-verde{
      color: #FFFFFF;
      text-shadow: 0 0 8px #12d71e, 0 0 2px #12d71e, 0 0 10px #12d71e, 0 0 6px #12d71e, 0 0 20px #12d71e, 0 0 20px #12d71e, 0 0 1px #12d71e, 0 0 12px #12d71e;
    }
  </style>
</body>
</html>
