<?php


include "sambung.php";
include "kiraext.php";


session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}

$nilai1 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '1' ");
$nilai2 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '2' ");
$nilai3 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '3' ");
$nilai4 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '4' ");
$nilai5 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '5' ");

$sembilan = mysqli_fetch_array($nilai1);
$sepuluh = mysqli_fetch_array($nilai2);
$sebelas = mysqli_fetch_array($nilai3);
$duabelas = mysqli_fetch_array($nilai4);
$tigabelas = mysqli_fetch_array($nilai5);


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
  <?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="ext.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EAES</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Administrator</b></span>
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
              <img src="./images/ipit.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['uname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="./images/ipit.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['uname']; ?> - System Administrator
                  <small><?php echo $_SESSION['email']; ?></small>
                </p>
              </li>
              <!--menu body-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="editprofileadmin.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logoutadmin.php" class="btn btn-default btn-flat">Log out</a>
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
          <img src="./images/ipit.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['uname']; ?></p>
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
          <a href="dashboardadmin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Analisis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ent.php"><i class="fa fa-circle-o text-aqua"></i> Entrance Survey</a></li>
            <li class="active"><a href="ext.php"><i class="fa fa-circle-o text-aqua"></i> Exit Survey</a></li>
            <li><a href="entext.php"><i class="fa fa-circle-o text-red"></i> Entrance & Exit Survey</a></li>
            <li><a href="total.php"><i class="fa fa-circle-o"></i> Rekod Borang Soal Selidik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>Daftar Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addPensyarah.php"><i class="fa fa-circle-o"></i> Pensyarah</a></li>
            <li><a href="addPelajar.php"><i class="fa fa-circle-o"></i> Pelajar</a></li>
          </ul>
        </li>
        <li>
          <a href="addCourse.php">
            <i class="fa fa-folder-open"></i> <span>Tambah Kursus</span>
          </a>
        </li>
        
        
        <li class="header">PENGURUSAN</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span>Data Maklumat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="detailcourse.php"><i class="fa fa-circle-o text-yellow"></i> Kursus</a></li>
            <li><a href="detailuser.php"><i class="fa fa-circle-o text-yellow"></i> Pengguna</a></li>
          </ul>
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
        Analisis
        <small>Exit Survey</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="ext.php"><i class="fa fa-bar-chart"></i> Analisis</a></li>
        <li class="active">Exit Survey</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
          <h4><i class="icon fa fa-warning"></i>&nbsp&nbspArahan!</h4>

          <p>
            Pada paparan Jadual Analisis Kursus <br>
            <li>Klik dan pilih menu dropdown yang ingin dipaparkan.</li>
          </p>
        </div>
      <div class="row">
        <div class="col-md-6">

          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $mata1['kodkursus'].' '.$mata1['namakursus']; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $mata2['kodkursus'].' '.$mata2['namakursus']; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart2" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $mata5['kodkursus'].' '.$mata5['namakursus']; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart5" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $mata3['kodkursus'].' '.$mata3['namakursus']; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart3" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $mata4['kodkursus'].' '.$mata4['namakursus']; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart">
                <canvas id="barChart4" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      
         
        <!-- right col -->
       </div>
      <!-- /.row (main row) -->

      <div class="row">
               <div class="col-md-12">
                     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Jadual Analisis Entrance Survey</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">

<form action="ent.php" method="post">
  <div class="form-group">
                        <!--pilih dropdown kursus by data in table-->
                            <?php
                              include "sambung.php";
                               //query
                              $sql = mysqli_query($hubung,"SELECT * FROM kursus");
                              if(mysqli_num_rows($sql)){
                              $select = 
                              '<select class="form-control select2" style="width: 100%;" name="kursus" id="mySelect" onchange="showCourse()">

                                    <option value="">Pilih Kursus Anda</option>';//default menu

                              while($rs = mysqli_fetch_array($sql)){
                                    $select.='<option value="'.$rs['kodkursus'].'">'.$rs['kodkursus'].' '.$rs['namakursus'].'</option>';
                                }
                              }
                              $select.='</select>';
                              echo $select;

                              ?>
  </div>
  <!-- tutup form grup-->

<!-- script menu onchange dropdown menu kursus-->
<script>
function showCourse() {

  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = x;

  if ( x == "<?php echo $sembilan['kodkursus']; ?>") {

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata1['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata1['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata1['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata1['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata1['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata1['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata1['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata1['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata1['C3S3'] ?>";
      
      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14213 ?>";
      document.getElementById("min1").innerHTML="<?php echo $A1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $A1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $A1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24213 ?>";
      document.getElementById("min4").innerHTML="<?php echo $A2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $A2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $A2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34213 ?>";
      document.getElementById("min7").innerHTML="<?php echo $A3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $A3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $A3S3 ?>";

      
  }
  else if (x == "<?php echo $sepuluh['kodkursus']; ?>") {
     
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata2['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata2['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata2['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata2['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata2['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata2['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata2['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata2['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata2['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14223 ?>";
      document.getElementById("min1").innerHTML="<?php echo $B1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $B1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $B1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24223 ?>";
      document.getElementById("min4").innerHTML="<?php echo $B2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $B2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $B2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34223 ?>";
      document.getElementById("min7").innerHTML="<?php echo $B3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $B3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $B3S3 ?>";




  }
  else if (x == "<?php echo $sebelas['kodkursus']; ?>") {
      
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata3['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata3['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata3['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata3['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata3['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata3['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata3['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata3['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata3['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14033 ?>";
      document.getElementById("min1").innerHTML="<?php echo $C1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $C1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $C1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24033 ?>";
      document.getElementById("min4").innerHTML="<?php echo $C2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $C2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $C2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34033 ?>";
      document.getElementById("min7").innerHTML="<?php echo $C3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $C3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $C3S3 ?>";

      
  }
  else if (x == "<?php echo $duabelas['kodkursus']; ?>") {
     
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata4['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata4['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata4['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata4['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata4['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata4['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata4['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata4['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata4['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14043 ?>";
      document.getElementById("min1").innerHTML="<?php echo $D1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $D1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $D1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24043 ?>";
      document.getElementById("min4").innerHTML="<?php echo $D2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $D2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $D2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34043 ?>";
      document.getElementById("min7").innerHTML="<?php echo $D3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $D3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $D3S3 ?>";

      
  }
  else if (x == "<?php echo $tigabelas['kodkursus']; ?>") {
      
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata5['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata5['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata5['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata5['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata5['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata5['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata5['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata5['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata5['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14054 ?>";
      document.getElementById("min1").innerHTML="<?php echo $E1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $E1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $E1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24054 ?>";
      document.getElementById("min4").innerHTML="<?php echo $E2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $E2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $E2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34054 ?>";
      document.getElementById("min7").innerHTML="<?php echo $E3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $E3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $E3S3 ?>";

      
  }
  else {

      //By default 
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="";
      document.getElementById("c1s2").innerHTML="";
      document.getElementById("c1s3").innerHTML="";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="";
      document.getElementById("c2s2").innerHTML="";
      document.getElementById("c2s3").innerHTML="";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="";
      document.getElementById("c3s2").innerHTML="";
      document.getElementById("c3s3").innerHTML="";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="";
      document.getElementById("min1").innerHTML="";
      document.getElementById("min2").innerHTML="";
      document.getElementById("min3").innerHTML="";

      document.getElementById("avg2").innerHTML="";
      document.getElementById("min4").innerHTML="";
      document.getElementById("min5").innerHTML="";
      document.getElementById("min6").innerHTML="";

      document.getElementById("avg3").innerHTML="";
      document.getElementById("min7").innerHTML="";
      document.getElementById("min8").innerHTML="";
      document.getElementById("min9").innerHTML="";

      
  }

}
</script>

<!-- //script-->

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                Kursus :<p id="demo"></p>
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>MIN</center></th>
                                    <th scope="row"><center><br>AVG</center></th>
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
                                    <td id="c1s1"></td>
                                    <td id="min1"><center></center></td>
                                    <td rowspan="3" id="avg1" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c1s2"></td>
                                    <td id="min2"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c1s3"></td>
                                    <td id="min3"><center></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c2s1"></td>
                                    <td id="min4"><center></center></td>
                                    <td rowspan="3" id="avg2" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c2s2"></td>
                                    <td id="min5"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c2s3"></td>
                                    <td id="min6"><center></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c3s1"></td>
                                    <td id="min7"><center></center></td>
                                    <td rowspan="3" id="avg3" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c3s2"></td>
                                    <td id="min8"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c3s3"></td>
                                    <td id="min9"><center></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                      </form>


<!--end table kursus-->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
               </div>

      </div>

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

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
//chart 1
//Papar grafdka4213
     var yg = "<?php echo $c14213 ?>";
     var yg2 = "<?php echo $c24213 ?>";
     var yg3 = "<?php echo $c34213 ?>";                         

    var areaChartData = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : '#030ffc',
          strokeColor         : '#030ffc',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [yg,yg2,yg3]
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
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
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
     var y1 = "<?php echo $c14223 ?>";
     var y2 = "<?php echo $c24223 ?>";
     var y3 = "<?php echo $c34223 ?>";                         

    var areaChartData2 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : '#030ffc',
          strokeColor         : '#030ffc',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [y1,y2,y3]
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
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
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
            var s1 = "<?php echo $c14033 ?>";
            var s2 = "<?php echo $c24033 ?>";
            var s3 = "<?php echo $c34033 ?>";                         

    var areaChartData3 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : '#030ffc',
          strokeColor         : '#030ffc',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [s1,s2,s3]
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
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
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
            var lg1 = "<?php echo $c14043 ?>";
            var lg2 = "<?php echo $c24043 ?>";
            var lg3 = "<?php echo $c34043 ?>";                     

    var areaChartData4 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : '#030ffc',
          strokeColor         : '#030ffc',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [lg1,lg2,lg3]
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
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
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
            var d1 = "<?php echo $c14054 ?>";
            var d2 = "<?php echo $c24054 ?>";
            var d3 = "<?php echo $c34054 ?>";                  

    var areaChartData5 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Exit Survey',
          fillColor           : '#030ffc',
          strokeColor         : '#030ffc',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [d1,d2,d3]
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
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
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


  })
</script>

</body>
</html>