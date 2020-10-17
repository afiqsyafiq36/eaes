<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
  header("location:userlogin.php");
}

$icx = $_SESSION['fullname'];

if(isset($_POST['kursus'])) {
// variable
     $kursus = $_POST['kursus'];
     $nama = $_SESSION['fullname'];
     $c1s1 =$_POST['c1s1'];
     $c1s2 =$_POST['c1s2'];
     $c1s3 =$_POST['c1s3'];

     $c2s1 =$_POST['c2s1'];
     $c2s2 =$_POST['c2s2'];
     $c2s3 =$_POST['c2s3'];

     $c3s1 =$_POST['c3s1'];
     $c3s2 =$_POST['c3s2'];
     $c3s3 =$_POST['c3s3'];

     $tarikh = date("d/m/Y");

     $aji = mysqli_query($hubung,"SELECT * FROM ext WHERE fullname = '$icx' AND kodkursus = '$kursus'");
     $apit = mysqli_fetch_array($aji);
     $G1 = $apit['kodkursus'];
     $G2 = $apit['fullname'];
     $api = mysqli_num_rows($aji);

      if($api == 0 ) {

           //insert table kursus

           $tambah = "INSERT INTO ext (kodkursus,fullname,ext_C1S1,ext_C1S2,ext_C1S3,ext_C2S1,ext_C2S2,ext_c2S3,ext_C3S1,ext_C3S2,ext_C3S3,ext_tarikh) VALUES 
           ('$kursus','$nama','$c1s1','$c1s2','$c1s3','$c2s1','$c2s2','$c2s3','$c3s1','$c3s2','$c3s3','$tarikh')";
            $added_history = "INSERT INTO activity_history (activity,created_date) VALUES ('$nama telah melengkapkan Exit Survey bagi Kod Kursus $kursus .', NOW())";
            //kursus
            $activity = mysqli_query($hubung,$added_history);
           $hasil = mysqli_query($hubung,$tambah);
           
           $_SESSION['status'] = "Tahniah! anda telah melengkapkan Exit Survey ini.";
           $_SESSION['status_code'] = "success";

      }

      elseif ($kursus == $G1 && $nama == $G2) {
          $_SESSION['status'] = "Anda telah melengkapkan Exit Survey bagi kursus ini.";
          $_SESSION['status_code'] = "info";
      }
      else {
          $_SESSION['status'] = "Ralat! Sesuatu telah terjadi, sila berhubung dengan admin.";
          $_SESSION['status_code'] = "error";
      }
      
}

//data daripada table kursus
//DKA4213
$data1 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4213' ");
$infoA = mysqli_fetch_array($data1);

//DKA4223
$data2 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4223' ");
$infoB = mysqli_fetch_array($data2);

//DKA4033
$data3 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4033' ");
$infoC = mysqli_fetch_array($data3);

//DKA4043
$data4 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4043' ");
$infoD = mysqli_fetch_array($data4);

//DKA4054
$data5 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4054' ");
$infoE = mysqli_fetch_array($data5);


//update
$id = $_SESSION['id'];
$gapo = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

$gapoA = mysqli_fetch_array($gapo);
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Borang Exit</title>
  <?php include "importdesign.php"; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="borangexit.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EAES</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pelajar</b></span>
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
              <img src="./img/asg.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="./img/asg.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['uname']; ?> - Student
                  <small><?php echo $_SESSION['email']; ?></small><br>
                </p>
              </li>
              <!--menu body-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profilepelajar.php" class="btn btn-default btn-flat">Profile</a>
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
          <img src="./img/asg.png" class="img-circle" alt="User Image">
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
          <a href="dashboardpelajar.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Borang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="borangent.php"><i class="fa fa-circle-o text-aqua"></i> Entrance Survey</a></li>
            <li class="active"><a href="borangexit.php"><i class="fa fa-circle-o text-red"></i> Exit Survey</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-inbox"></i>
            <span>Rekod</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="rekodent.php"><i class="fa fa-circle-o text"></i> Entrance Survey</a></li>
            <li><a href="rekodext.php"><i class="fa fa-circle-o text"></i> Exit Survey</a></li>
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
        Borang
        <small>Exit Survey</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="borangexit.php"><i class="fa fa-file-text"></i> Borang</a></li>
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
              <h3 class="box-title">Borang Exit Survey</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

                        <center>
                        <h3>Course Exit Survey - Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</h3>
                        <h3>Bahagian Pendidikan Teknik Dan Vokasional</h3>
  
              <!-- start form action -->
              <form action="borangexit.php" method="POST">

                          <medium>
                          <center>
                          <!--pilih dropdown kursus by data in table-->
                            <?php
                              include "sambung.php";
                               //query
                              $sql = mysqli_query($hubung,"SELECT * FROM kursus");
                              if(mysqli_num_rows($sql)){
                              $select = 
                              '<select  name="kursus" id="mySelect" onchange="showCourse()" required>

                                    <option value="">SILA PILIH KURSUS ANDA</option>';//default menu

                              while($rs = mysqli_fetch_array($sql)){
                                    $select.='<option value="'.$rs['kodkursus'].'">'.$rs['kodkursus'].' '.$rs['namakursus'].'</option>';
                                }
                              }
                              $select.='</select>';
                              echo $select;

                              ?>
                        </center>
                        </medium>

                        </center><br>

<!-- script menu onchange dropdown menu kursus-->
<script>
function showCourse() {

  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = x;

  if ( x == "DKA4213") {
      document.getElementById("kur").innerHTML="<?php echo $infoA['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoA['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoA['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoA['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoA['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoA['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoA['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoA['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoA['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoA['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoA['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoA['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoA['C3S3'] ?>";
  }
  else if (x == "DKA4223") {
      document.getElementById("kur").innerHTML="<?php echo $infoB['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoB['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoB['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoB['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoB['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoB['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoB['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoB['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoB['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoB['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoB['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoB['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoB['C3S3'] ?>";
  }
  else if (x == "DKA4033") {
      document.getElementById("kur").innerHTML="<?php echo $infoC['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoC['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoC['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoC['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoC['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoC['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoC['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoC['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoC['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoC['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoC['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoC['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoC['C3S3'] ?>";
  }
  else if (x == "DKA4043") {
      document.getElementById("kur").innerHTML="<?php echo $infoD['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoD['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoD['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoD['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoD['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoD['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoD['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoD['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoD['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoD['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoD['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoD['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoD['C3S3'] ?>";
  }
  else if (x == "DKA4054") {
      document.getElementById("kur").innerHTML="<?php echo $infoE['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoE['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoE['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoE['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoE['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoE['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoE['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoE['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoE['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoE['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoE['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoE['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoE['C3S3'] ?>";
  }
  else {
      
      document.getElementById("kur").innerHTML="";
      document.getElementById("co1").innerHTML="";
      document.getElementById("co2").innerHTML="";
      document.getElementById("co3").innerHTML="";

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
  }

}
</script>

<!-- //script-->
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                           
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                           
                        </tr>
                        <tr>
                     
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td id="kur"></td>
                    
                        </tr>
                        <tr>
                            
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td id="demo"></td>
                            
                        </tr>
                        <tr>
                          
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            
                        </tr>

                    </table><br>

                    <table border="0">
                        <!--table maklumat pelajar-->



                        <tr>
                        
                               <td>Nama Pelajar</td>
                               <td> : </td>
                               <td><?php echo $_SESSION['fullname']; ?></td>
                      
                        </tr>
                        <tr>
                            
                               <td>Sesi</td>
                               <td> : </td>
                               <td><?php echo $_SESSION['sesi']; ?></td>
                            
                        </tr>
                        <tr>
                          
                               <td>No. Matrik</td>
                               <td> : </td>
                               <td><?php echo $_SESSION['nomatrik']; ?></td>
                       
                        </tr>
                        <tr>
                        
                               <td>Tarikh</td>
                               <td> : </td>
                               <td><?php echo date("d/m/Y"); ?></td>
                       
                        </tr>
                    </table>


                        <br>
                        <!--nota pringatan-->

                        <medium>Sila lengkapkan inventori ini dengan menanda <i class="fa fa-dot-circle-o"></i> pada skala yang dinyatakan.</medium><br>
                        <medium>1 = Sangat Tidak Setuju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2 = Tidak Setuju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3 = Tidak Pasti&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4 = Setuju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5 = Sangat Setuju</medium><br><br>

                        <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                            
                            </tr>
                            <tr>
                             
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td id="co1"></td>
                             
                            </tr>
                            <tr>
                              
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td id="co2"></td>
                            
                            </tr>
                            <tr>
                            
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td id="co3"></td>
                            
                            </tr>
                      </table>

                      <br>
                        <medium><b>Soalan :</b></medium><br>

                        
                        
                        
                        <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th rowspan="2" scope="row"><center><br>CLO</center></th>
                                    <th rowspan="2" scope="row"><center><br>No.</center></th>
                                    <th rowspan="2" scope="row"><center><br>Item</center></th>
                                    <th colspan="5" scope="row"><center>Skala</center></th>
                                    </b>
                                  </tr>

                                  <tr>
                                    <th scope="row"><center>1</center></th>
                                    <th scope="row"><center>2</center></th>
                                    <th scope="row"><center>3</center></th>
                                    <th scope="row"><center>4</center></th>
                                    <th scope="row"><center>5</center></th>
                                  </tr>

                                  <!-- clo1-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c1s1"></td>
                                    <td><center><input type="radio" name="c1s1" value="1" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="2" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="3" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="4" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c1s2"></td>
                                    <td><center><input type="radio" name="c1s2" value="1" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="2" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="3" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="4" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>3.</center></td>
                                    <td id="c1s3"></td>
                                    <td><center><input type="radio" name="c1s3" value="1" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="2" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="3" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="4" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="5" required></center></td>
                                  </tr>

                                  <!-- //clo1-->
                                  <!-- clo2-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c2s1"></td>
                                    <td><center><input type="radio" name="c2s1" value="1" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="2" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="3" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="4" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c2s2"></td>
                                    <td><center><input type="radio" name="c2s2" value="1" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="2" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="3" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="4" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>3.</center></td>
                                    <td id="c2s3"></td>
                                    <td><center><input type="radio" name="c2s3" value="1" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="2" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="3" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="4" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="5" required></center></td>
                                  </tr>

                                  <!-- //clo2-->
                                  <!--clo 3-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c3s1"></td>
                                    <td><center><input type="radio" name="c3s1" value="1" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="2" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="3" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="4" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c3s2"></td>
                                    <td><center><input type="radio" name="c3s2" value="1" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="2" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="3" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="4" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>3.</center></td>
                                    <td id="c3s3"></td>
                                    <td><center><input type="radio" name="c3s3" value="1" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="2" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="3" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="4" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="5" required></center></td>
                                  </tr>
                                  <!-- //clo3-->

                                </tbody>
                              </table>
                            </div>

                        <div class="form-group" align="right">
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
</form>
<!-- //close form action-->
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
<?php include "importjs.php"; ?>

</body>
</html>