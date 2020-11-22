<?php
include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:userlogin.php");
}

$id = $_SESSION['id'];
//include user query for image path
include "Quser.php";
?>

<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekod Pelajar</title>
  <?php include "importdesign.php"; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="rekodpelajarpensyarah.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EAES</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pensyarah</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= $imgPath; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= $imgPath; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['uname']; ?> - Lecturer
                  <small><?php echo $_SESSION['email']; ?></small><br>
                </p>
              </li>
              <!--menu body-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profilepensyarah.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logoutuser.php" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= $imgPath; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo wordwrap($_SESSION['fullname'],22,"<br>\n"); ?></p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" id="myInput" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li>
          <a href="dashboardpensyarah.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Analisis dan Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="entpensyarah.php"><i class="fa fa-circle-o text-aqua"></i> Entrance Survey</a></li>
            <li><a href="extpensyarah.php"><i class="fa fa-circle-o text-red"></i> Exit Survey</a></li>
            <li><a href="entextpensyarah.php"><i class="fa fa-circle-o"></i> Entrance & Exit Survey</a></li>
          </ul>
        </li>
        <li class="active">
          <a href="rekodpelajarpensyarah.php">
            <i class="fa fa-inbox"></i> <span>Rekod Pelajar</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekod Pelajar
      </h1>
      <ol class="breadcrumb">
        <li><a href="rekodpelajarpensyarah.php"><i class="fa fa-file-text"></i> Rekod Pelajar</a></li>
        <li class="active">Senarai Pelajar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!--row-->
      <div class="row">
        <div class="col-md-12">

         <!-- BOX -->
          <div class="box">
              <div class="box-header with-border">
                  <h3 class="box-title">Senarai Maklumat Pelajar</h3>
              </div>
            <div class="box-body">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-hover table-striped">
               <thead>
                  <tr>
                    <th>Bil.</th>
                    <th>Username</th>
                    <th>Nama Penuh</th>
                    <th>No Matrik Pelajar</th>
                    <th>Email</th>
                    <th>Sesi Pengajian</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody id="myTable1">
                    
                </tbody>
              </table>
             <!--habis content-->
            </div>
           <!--box body-->
          </div>
         <!--/div box info-->


        </div>
        <!--//box-->

     <!-- BOX -->
          <div class="box">
              <div class="box-header with-border">
                  <h3 class="box-title">Senarai Maklumat Kursus</h3>
              </div>
            <div class="box-body">
                   
                  
            <div class="box-body table-responsive">
               
                   <table id="example1" class="table table-hover table-striped">
                   <thead>
                      <tr>
                        <th>Bil.</th>
                        <th>Kod Kursus</th>
                        <th>Nama Kursus</th>
                        <th>Keterangan</th>
                        <th>Semester</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
    

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kvw = mysqli_query($hubung,"SELECT * FROM kursus");
   $jumpa = mysqli_num_rows($kvw);
while($perlu = mysqli_fetch_array($kvw)) {
      
      $idkur = $perlu['idkursus'];
         


?>
                    
                      <tr>
                        <th><center><?php echo $no; ?></center></th>
                        <td><?php echo $perlu['kodkursus']; ?></td>
                        <td><?php echo $perlu['namakursus']; ?></td>
                        <td><?php echo $perlu['keterangan']; ?></td>
                        <td>
                          <?php 
                            $af = $perlu['semester']; 

                            if ($af == 'DVM1') {
                              echo "Semester 1 Diploma";
                            }
                            elseif ($af == 'DVM2'){
                              echo "Semester 2 Diploma";
                            }
                            elseif ($af == 'DVM3'){
                              echo "Semester 3 Diploma";
                            }
                            elseif ($af == 'DVM4'){
                              echo "Semester 4 Diploma";
                            }
                            else {
                              echo "Sila hubungi admin segera!";
                            }
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-sm btn-info" title="Show detail" data-toggle="modal" data-target="#myModal<?php echo $idkur; ?>"><i class="fa fa-eye"></i>
                          </a>

<!--modal start-->
        <div class="modal fade" id="myModal<?php echo $idkur; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <?php
                 $apaitu = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '$idkur'");
                 $yes = mysqli_fetch_array($apaitu);
                      
                      $kodkur = $yes['kodkursus'];
                      $namakur = $yes['namakursus'];
                      $clo1 = $yes['CLO1'];
                         $c1s1 = $yes['C1S1'];
                         $c1s2 = $yes['C1S2'];
                         $c1s3 = $yes['C1S3'];
                      $clo2 = $yes['CLO2'];
                         $c2s1 = $yes['C2S1'];
                         $c2s2 = $yes['C2S2'];
                         $c2s3 = $yes['C2S3'];
                      $clo3 = $yes['CLO3'];
                         $c3s1 = $yes['C3S1'];
                         $c3s2 = $yes['C3S2'];
                         $c3s3 = $yes['C3S3'];
               ?>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Maklumat Kursus <?php echo $kodkur; ?></h4>
                  </div>
                    <div class="modal-body">
                      <p>

                  <div class="box-body table-responsive">
               
                   <table id="example1" class="table table-hover table-striped">
                   <thead>
                      <tr>
                        <td colspan="2"><b>Nama Kursus</b></td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td colspan="3"><?php echo $namakur; ?></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>CLO 1</th>
                          <td colspan="4"><?php echo $clo1; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 1</td>
                          <td colspan="4"><?php echo $c1s1; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 2</td>
                          <td colspan="4"><?php echo $c1s2; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 3</td>
                          <td colspan="4"><?php echo $c1s3; ?></td>
                        </tr>
                        <tr>
                          <th>CLO 2</th>
                          <td colspan="4"><?php echo $clo2; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 1</td>
                          <td colspan="4"><?php echo $c2s1; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 2</td>
                          <td colspan="4"><?php echo $c2s2; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 3</td>
                          <td colspan="4"><?php echo $c2s3; ?></td>
                        </tr>
                        <tr>
                          <th>CLO 3</th>
                          <td colspan="4"><?php echo $clo3; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 1</td>
                          <td colspan="4"><?php echo $c3s1; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 2</td>
                          <td colspan="4"><?php echo $c3s2; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Soalan 3</td>
                          <td colspan="4"><?php echo $c3s3; ?></td>
                        </tr>
                    </tbody>
                  </table>
                </div><!-- box body responsive-->
                          
                      </p>
                    </div><!--modal body-->

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div> 
<!--modal end-->


                        </td>
                      </tr>
                      
                    
<?php
$no++;
}
?>
                    <tr>
                      <td colspan="7">Jumlah kursus : <?php echo $jumpa; ?></td>
                    </tr>
                   </tbody>
                  </table>
  <!--habis content-->


            </div><!--box body-->
          </div>
         <!--/div box info-->
       </div><!--box-->


      </div>
      <!-- end col-->
     </div>
   <!-- end row-->
    </section>
    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2
    </div>
    <strong>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin</strong> Editor @afiqsyafiq36.
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
       

      </div>
      <!-- /.tab-pane -->
      
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include "importfungsi.php"; ?>
<?php include "importjs.php"; ?>
<!--search function-->
<script>
$(document).ready(function(){

  //fuungsi search
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


  // script for realtime user online status
  fetch_user_data();

  setInterval(function(){
    // update_last_activity();
    fetch_user_data();
  }, 1000);

  function fetch_user_data()
  {
    $.ajax({
      url: "fetch_pelajar.php",
      method: "POST",
      success: function(data){
        $('#myTable1').html(data);
      }
    });
  }

});
</script>

</body>
</html>
