
<script type="text/javascript">
	function e(q) {
    document.body.appendChild( document.createTextNode(q) );
    document.body.appendChild( document.createElement("BR") );
}
function inactividad() {
    window.location.href = "v75t4?axc0=l00k5cR3n";
}
var t=null;
function contadorInactividad() {
var tt = (60000*<?= $iDi['config_7im3Bl0'] ?>);//60,000 == 1 Minuto
    t=setTimeout("inactividad()",tt);
}
window.onblur=window.onmousemove=function() {
    if(t) clearTimeout(t);
    contadorInactividad();
    
}
</script>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> <a href="v75t4?axc0=v3r">2021.08.28</a>
    </div>
    <strong>Copyright &copy; <?php date('Y'); ?> <a href="http://mieke.mx" target="_blank">mieke.mx</a>.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<?php include('escen78/p4rc4l35/c0nf.php'); ?>
<!-- Selector de etiquetas -->
<?php if($axc0 == 'pR0VxD'){ ?>
  <script src="plugins/select2/js/select2.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple1').select2();
      $('.js-example-basic-multiple2').select2();
      $('.js-example-basic-multiple3').select2();
      $('.js-example-basic-multiple4').select2();
    });
  </script>
<?php } ?>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>



<?php if($axc0 === '5u540l'){ ?>
  <script>
    $(document).ready(function() {
    $("#cxxt453_add a").on('click', function(event) {
      event.preventDefault();
      if($('#cxxt453_add input').attr("type") == "text"){
        $('#cxxt453_add input').attr('type', 'password');
        $('#cxxt453_add i').addClass( "fa-eye-slash" );
        $('#cxxt453_add i').removeClass( "fa-eye" );
      }else if($('#cxxt453_add input').attr("type") == "password"){
        $('#cxxt453_add input').attr('type', 'text');
        $('#cxxt453_add i').removeClass( "fa-eye-slash" );
        $('#cxxt453_add i').addClass( "fa-eye" );
      }
      });
    });
  </script>
<?php } ?>

<?php if($axc0 === 'eMpr35As' || $axc0 === 'pR0VxD'){
        if($px002 != ''){ ?>
          <script type="text/javascript">
            $(window).on('load', function() {
              $('#modal-nuevo').modal('show');
            });
          </script> 
  <?php } 
      } ?>
<script>
  $(function() {
    
    <?php if($_SESSION['m3ns4J3'] != '' && $_SESSION['m3n3Rr0R']=== 'si'){ ?>
      $('.toastrDefaultSuccess').ready(function() {
        
        /*toastr['error']('<?php /*echo "<ul>";
                              foreach($_SESSION["m3ns4J3"] as $key => $value){ 
                                echo "<li>".$value."</li>"; 
                              } 
                              echo "</ul>"; 
                         */?>','<?php // lbl_3rR0r ?>',{*/
        toastr['error']('<?= $_SESSION["m3ns4J3"]?>','<?= lbl_3rR0r ?>',{                 
          closeButton: true, 
          progressBar: true,
          newestOnTop: true,
          showDuration: 1000,
          hideDuration: 5000,
          timeOut: 5000,
          extendedTimeOut: 5000,
          positionClass: 'toast-top-center'
        })
        
      });
    <?php }elseif($_SESSION['m3ns4J3'] != '' && $_SESSION['m3n3Rr0R']!= 'si'){ ?>
      $('.toastrDefaultSuccess').ready(function() {
        
        toastr['success']('<?= $_SESSION['m3ns4J3'] ?>','<?= lbl_3xi70 ?>',{
          closeButton: true, 
          progressBar: true,
          newestOnTop: true,
          showDuration: 1000,
          hideDuration: 1000,
          timeOut: 5000,
          extendedTimeOut: 5000,
          positionClass: 'toast-top-center'
        })
        
      });
    <?php } ?>

    $('.toastrTheme').click(function() {
        
        toastr['success']('s','<?= lbl_3xi70 ?>',{
          closeButton: true, 
          progressBar: true,
          newestOnTop: true,
          showDuration: 1000,
          hideDuration: 1000,
          timeOut: 5000,
          extendedTimeOut: 5000,
          positionClass: 'toast-top-center'
        })
        
      });


    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    
  });
</script>

<?php if($axc0 == 'xkmtr4G' || $axc0 == 'v3hiXs' || $axc0 == 'eMpr35As' || $axc0 == 'x7l07iLl4' || $axc0 == '5u250e' || $axc0 == 's3rv' || $axc0 == 'd0cx6y' || $axc0 == 'v3hFh4'
      || $axc0 == 'ldxV' || $axc0 == 'lsxV' || $axc0 == '5u550l' || $axc0 == 'bin4kuru' || $axc0 == 'm0d78Os' || $axc0 == 'Tr4V' || $axc0 == 'pR0VxD' || $axc0 == 'Tr4V'){ ?>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!--<script src="plugins/jszip/jszip.min.js"></script>-->
  <!--<script src="plugins/pdfmake/pdfmake.min.js"></script>-->
  <!--<script src="plugins/pdfmake/vfs_fonts.js"></script>-->
  <?php include('plugins/datatables-buttons/js/buttons.html5_veh1.min.php'); ?>
  <?php include('plugins/datatables-buttons/js/buttons.print_veh1.min.php'); ?>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<?php } ?>
<?php if($axc0 == 'v3hiXs'){ ?>
  <?php if($_SESSION['v3_c004'] != ''){ ?>
          <script type="text/javascript">
            $(window).on('load', function() {
                $('#modal-nuevo').modal('show');
            });
          </script>
        <?php } ?> 
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["copy", "csv", "excel", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?php } ?>
<?php if($axc0 == 'x7l07iLl4'){ ?>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["copy", "csv", "excel", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?php } ?>
<?php if($axc0 == 's3rv' || $axc0 == 'd0cx6y' || $axc0 == 'Tr4V'){ ?>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["copy", "csv", "excel", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?php } ?>
<?php if($axc0 == '5u250e' || $axc0 == 'v3hFh4' || $axc0 == '5u550l' || $axc0 == 'bin4kuru' || $axc0 == 'm0d78Os'
      || $axc0 == 'pR0VxD'){ ?>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["copy", "csv", "excel", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?php } ?>

<?php if($axc0 == 'eMpr35As'){ ?>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["copy", "csv", "excel", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?php } ?>
<?php if($axc0 == 'xkmtr4G' || $axc0 == 'v3hFh4' || $axc0 == 'eDtSrv' || $axc0 == 'eDtD' || $axc0 == 'N3wTr4' || $axc0 == 'Tr4V'){ ?>
  <!-- Tempusdominus Bootstrap 4 -->

  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="plugins/moment/locale/es.js"></script>
<?php } ?>

  <?php if($axc0 == 'N3wTr4'){ ?>
    <script>
      $('#frm_x002').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#frm_x003').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
    </script>
  <?php } ?>



  



  <?php if($axc0 == 'eDtSrv'){ ?>
    <script>
      $('#xDsSx003').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#xDsSx004').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
    </script>
  <?php } ?>

  <?php if($axc0 == 'eDtD'){ ?>
    <script>
      $('#xDsDx003').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#xDsDx040').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
    </script>
  <?php } ?>
  
<?php if($axc0 == '5u540l'){ ?>
  <?php if($pp_xx007_add != ''){ ?>
    <script type="text/javascript">
      $(window).on('load', function() {
        $('#modal-nuevo').modal('show');
      });
    </script>
  <?php } ?> 
<?php }?>

</body>
</html>
<?php

unset($_SESSION['m3ns4J3']);
unset($_SESSION['m3n3Rr0R']);
?>