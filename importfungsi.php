<!-- jQuery 3 -->
<script src="./adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="./adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="./adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="./adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="./adminlte/bower_components/raphael/raphael.min.js"></script>
<script src="./adminlte/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="./adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="./adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="./adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="./adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="./adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="./adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="./adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./adminlte/dist/js/demo.js"></script>
<!-- ChartJS -->
<script src="./adminlte/bower_components/chart.js/Chart.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!--TimeAgo-->
<script src="./js/jquery.timeago.js" type="text/javascript"></script>
<!--Sweet Alert-->
<script src="./js/sweetalert.min.js"></script>

<?php
  if(isset($_SESSION['status']) && $_SESSION['status'] != '')
  {
?>
    <script>
      swal({
        title: "<?php echo $_SESSION['status']; ?>",
        // text: "Data berjayadipadam",
        icon: "<?php echo $_SESSION['status_code']; ?>",
      });
    </script>
<?php
    unset($_SESSION['status']);
  }
?>

  
