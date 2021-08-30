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
style="min-height: 373.2px;background-color: #454d55; color:white;background-image: url('<?= $carpetaFondos ?><?= fondoRandom() ?>');height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;padding-top: 10%;padding-bottom: 10%;">
<div class="login-box" id="app">


  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '556896955739933',
        cookie     : true,
        xfbml      : true,
        version    : 'v11.0'
      });
        
      FB.AppEvents.logPageView();   
        
    };

    (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }

    (document, 'script', 'facebook-jssdk'));
  
  </script>

  <div class="login-logo">
    <a href="index.php" class="texto-neon-azul" style="color: white;"><br><b>KUMO</b> 雲 </a>
          <?php if(!empty($m3ns4J3) && $err != '' ){ ?>
            <div> 
              <p style="color: white;font-size: 20px;" class="texto-neon-rojo"><?= $dCry($m3ns4J3) ?></p>
            </div> -
          <?php }
                elseif(!empty($m3ns4J3) && $err == '') {?>
             <div> 
              <p style="color: white;font-size: 20px;" class="texto-neon-verde"><?= $dCry($m3ns4J3) ?></p>
            </div>
          <?php } ?>
         
      
  </div>
  <!-- /.login-logo -->
  <div >
    <div>
      <p class="login-box-msg" style="font-weight: bold;">Ingresa tus datos para iniciar sesión</p>
      <form id="inicioSesion" autosomplete="off" method="POST" action="lgaccs25?axc0=x005" class="form">
      <div id="printMe"></div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="pp_xx005" style="background-color: #ffffff94;color: black; font-weight: bold;" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fad fa-user"></span>
            </div>
          </div>
        </div> 
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="psbxX012s" style="background-color: #ffffff94;color: black; font-weight: bold;" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fad fa-lock" ></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="font-weight: bold; color: white;">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style="font-weight: bold;"> <i class="fad fa-portal-enter"></i> Entrar</button>
          </div>
          <!-- /.col -->
        </div>

      
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>

         <a id="btn-fblogin" href="fblogin.php" class="btn btn-primary">Login with Facebook</a>
      </div>

      <p class="mb-1">
        <a href="lgaccs25?axc0=p3rMps" style="font-weight: bold; color: white;">Perdi mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="lgaccs25?axc0=r3g7r0" class="text-center" style="font-weight: bold; color: white;">Registrarme</a>
      </p>
    </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  <div class="text-center texto-neon-azul" style="color: white;"><h3><a href="https://kumo.click" style="color: white;">Kumo.click</a></h3> <br><p style="font-size: 18px;">V 21.0829.01</p></div>
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
