<?php


include "sambung.php";
include "kiraext.php";

session_start();
if (!$_SESSION['uname']) {
  header("location:userlogin.php");
}

//update
$id = $_SESSION['id'];
$lapo = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

$lapoA = mysqli_fetch_array($lapo);

//include user query for image path
include "Quser.php";
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exit Survey</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <link rel="icon" 
      type="image/png" 
      href="./img/logo.jpg">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./adminlte/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="./adminlte/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
<!-- jvectormap -->
<script src="./adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="./adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
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

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="extpensyarah.php" class="logo">
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
          <input type="text" name="q" class="form-control" placeholder="Search...">
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

        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Analisis dan Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="entpensyarah.php"><i class="fa fa-circle-o text-aqua"></i> Entrance Survey</a></li>
            <li class="active"><a href="extpensyarah.php"><i class="fa fa-circle-o text-red"></i> Exit Survey</a></li>
            <li><a href="entextpensyarah.php"><i class="fa fa-circle-o"></i> Entrance & Exit Survey</a></li>
          </ul>
        </li>
        <li>
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
        Analisis dan Laporan
        <small>Exit Survey</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="extpensyarah.php"><i class="fa fa-file-text"></i> Analisis dan Laporan</a></li>
        <li class="active">Exit Survey</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!--row-->
      <div class="row">
        <div class="col-md-12">

         <!-- BOX -->
          <div class="box box-info">
              <div class="box-header with-border">
                  <h3 class="box-title">Analisis dan Laporan Exit Survey</h3>
              </div>
            <div class="box-body">

                  <center>
                  <h3>Course Exit Survey - Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</h3>
                  <h3>Bahagian Pendidikan Teknik Dan Vokasional</h3>
            </center><br>



<!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><?php echo $mata1['kodkursus']; ?></a></li>
              <li><a href="#tab_2" data-toggle="tab"><?php echo $mata2['kodkursus']; ?></a></li>
              <li><a href="#tab_3" data-toggle="tab"><?php echo $mata3['kodkursus']; ?></a></li>
              <li><a href="#tab_4" data-toggle="tab"><?php echo $mata4['kodkursus']; ?></a></li>
              <li><a href="#tab_5" data-toggle="tab"><?php echo $mata5['kodkursus']; ?></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                    <h4><?php echo $mata1['kodkursus'].' '.$mata1['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                    <h4><?php echo $mata2['kodkursus'].' '.$mata2['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                    <h4><?php echo $mata3['kodkursus'].' '.$mata3['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                    <h4><?php echo $mata4['kodkursus'].' '.$mata4['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                    <h4><?php echo $mata5['kodkursus'].' '.$mata5['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

          <div class='tab_info_1'>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart" ></canvas>
                  <div style="display:none"></div>
              </div>
    
                <p>

                  <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata1['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata1['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
                                    </b>
                                  </tr>
                                  

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C1S1']; ?></td>
                                    <td><center><?php echo $A1S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c14213 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C1S2']; ?></td>
                                    <td><center><?php echo $A1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata1['C1S3']; ?></td>
                                    <td><center><?php echo $A1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C2S1']; ?></td>
                                    <td><center><?php echo $A2S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c24213 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C2S2']; ?></td>
                                    <td><center><?php echo $A2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata1['C2S3']; ?></td>
                                    <td><center><?php echo $A2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C3S1']; ?></td>
                                    <td><center><?php echo $A3S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c34213 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C3S2']; ?></td>
                                    <td><center><?php echo $A3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata1['C3S3']; ?></td>
                                    <td><center><?php echo $A3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>

              </p>
    </div>
</div>
<div class='tab_info_2'>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart2" ></canvas>
                  <div style="display:none"></div>
              </div>
    
                <p>

                  <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata2['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata2['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>
<!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
                                    </b>
                                  </tr>
                                  

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata2['C1S1']; ?></td>
                                    <td><center><?php echo $B1S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c14223 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C1S2']; ?></td>
                                    <td><center><?php echo $B1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata2['C1S3']; ?></td>
                                    <td><center><?php echo $B1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata2['C2S1']; ?></td>
                                    <td><center><?php echo $B2S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c24223 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C2S2']; ?></td>
                                    <td><center><?php echo $B2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata2['C2S3']; ?></td>
                                    <td><center><?php echo $B2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata2['C3S1']; ?></td>
                                    <td><center><?php echo $B3S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c34223 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C3S2']; ?></td>
                                    <td><center><?php echo $B3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata2['C3S3']; ?></td>
                                    <td><center><?php echo $B3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>

              </p>
    </div>
</div>
<div class='tab_info_3'>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart3" ></canvas>
                  <div style="display:none"></div>
              </div>
    
                <p>

                 <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata3['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata3['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
                                    </b>
                                  </tr>
                                  

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C1S1']; ?></td>
                                    <td><center><?php echo $C1S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c14033 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C1S2']; ?></td>
                                    <td><center><?php echo $C1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata3['C1S3']; ?></td>
                                    <td><center><?php echo $C1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C2S1']; ?></td>
                                    <td><center><?php echo $C2S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c24033 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C2S2']; ?></td>
                                    <td><center><?php echo $C2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata3['C2S3']; ?></td>
                                    <td><center><?php echo $C2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C3S1']; ?></td>
                                    <td><center><?php echo $C3S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c34033 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C3S2']; ?></td>
                                    <td><center><?php echo $C3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata3['C3S3']; ?></td>
                                    <td><center><?php echo $C3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>

              </p>
    </div>
</div>
<div class='tab_info_4'>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart4" ></canvas>
                  <div style="display:none"></div>
              </div>
    
                <p>

                 <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata4['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata4['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
                                    </b>
                                  </tr>
                                  

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C1S1']; ?></td>
                                    <td><center><?php echo $D1S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c14043 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C1S2']; ?></td>
                                    <td><center><?php echo $D1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata4['C1S3']; ?></td>
                                    <td><center><?php echo $D1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C2S1']; ?></td>
                                    <td><center><?php echo $D2S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c24043 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C2S2']; ?></td>
                                    <td><center><?php echo $D2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata4['C2S3']; ?></td>
                                    <td><center><?php echo $D2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C3S1']; ?></td>
                                    <td><center><?php echo $D3S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c34043 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C3S2']; ?></td>
                                    <td><center><?php echo $D3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata4['C3S3']; ?></td>
                                    <td><center><?php echo $D3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>

              </p>
    </div>
</div>
<div class='tab_info_5'>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart5" ></canvas>
                  <div style="display:none"></div>
              </div>
    
                <p>

                 <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata5['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata5['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
                                    </b>
                                  </tr>
                                  

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C1S1']; ?></td>
                                    <td><center><?php echo $E1S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c14054 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C1S2']; ?></td>
                                    <td><center><?php echo $E1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata5['C1S3']; ?></td>
                                    <td><center><?php echo $E1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C2S1']; ?></td>
                                    <td><center><?php echo $E2S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c24054 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C2S2']; ?></td>
                                    <td><center><?php echo $E2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata5['C2S3']; ?></td>
                                    <td><center><?php echo $E2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C3S1']; ?></td>
                                    <td><center><?php echo $E3S1; ?></center></td>
                                    <td rowspan="3" style="text-align: center; vertical-align: middle;"><?php echo $c34054 ?></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C3S2']; ?></td>
                                    <td><center><?php echo $E3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td><?php echo $mata5['C3S3']; ?></td>
                                    <td><center><?php echo $E3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>

              </p>
    </div>
</div>

<!--tamat tab-->

            </div><!--box body-->
          </div>
         <!--/div box info-->


        </div>
        <!--end col md-->
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


<!--import graf by @iwan-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.js"></script>

<script>
  $(function () {
    
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
//chart 1
//Papar grafdka4213
     
     var yg4 = "<?php echo $extk14213 ?>";
     var yg5 = "<?php echo $extk24213 ?>";
     var yg6 = "<?php echo $extk34213 ?>";

    var areaChartData = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [yg4,yg5,yg6]
        },
        {
          
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)


//chart 2
//Papar grafdka4223

var sg4 = "<?php echo $extk14223 ?>";
var sg5 = "<?php echo $extk24223 ?>";
var sg6 = "<?php echo $extk34223 ?>";

    var areaChartData2 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [sg4,sg5,sg6]
        },
        {
          
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart2').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData2
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    //chart 3
//Papar grafdka4033
                           
var vp4 = "<?php echo $extk14033 ?>";                              
var vp5 = "<?php echo $extk24033 ?>";
var vp6 = "<?php echo $extk34033 ?>";

    var areaChartData3 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [vp4,vp5,vp6]
        },
        {
          
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart3').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData3
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

//chart 4
//Papar grafdka4043

var st4 = "<?php echo $extk14043 ?>";
var st5 = "<?php echo $extk24043 ?>";
var st6 = "<?php echo $extk34043 ?>";

    var areaChartData4 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [st4,st5,st6]
        },
        {
          
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart4').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData4
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

//chart 5
//Papar grafdka4054

var sp4 = "<?php echo $extk14054 ?>";
var sp5 = "<?php echo $extk24054 ?>";
var sp6 = "<?php echo $extk34054 ?>";

    var areaChartData5 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [sp4,sp5,sp6]
        },
        {
          
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart5').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData5
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)



    $("[class^=tab_info_]").not('.tab_info_1').hide()
    $("[class^=tab_info_]>div").show()

    $('a[href="#tab_1"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_1").show()
    });

    $('a[href="#tab_2"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_2").show()
    });
    $('a[href="#tab_3"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_3").show()
    });

    $('a[href="#tab_4"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_4").show()
    });

    $('a[href="#tab_5"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_5").show()
    });
    })
</script>
<script>
function myFunction() {
  window.print();
};
window.onafterprint = function() {
    //alert("Hello");
    window.location.reload(true);
};
</script>
<?php include "importjs.php"; ?>

</body>
</html>