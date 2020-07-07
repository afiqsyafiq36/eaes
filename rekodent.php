<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
  header("location:userlogin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekod Borang Entrance</title>
  <?php include "importdesign.php"; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="rekodent.php" class="logo">
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
          <a href="dashboardpelajar.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Borang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="borangent.php"><i class="fa fa-circle-o text-aqua"></i> Entrance Survey</a></li>
            <li><a href="borangexit.php"><i class="fa fa-circle-o text-red"></i> Exit Survey</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-inbox"></i>
            <span>Rekod</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="rekodent.php"><i class="fa fa-circle-o text"></i> Entrance Survey</a></li>
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
        Rekod
        <small>Entrance Survey</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="rekodent.php"><i class="fa fa-inbox"></i> Rekod</a></li>
        <li class="active">Entrance Survey</li>
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
              <h3 class="box-title">Rekod Borang Entrance Survey</h3>
            </div>
            <div class="box-body">

            <div class="table-responsive">
             <table class="table table-bordered table-striped">
                                     <thead>
                                        <tr>
                                          <td>Kod Kursus</td>
                                          <td>Nama</td>
                                          <td>Tarikh Dihantar</td>
                                        </tr>
                                      </thead>
                                      <tbody id="myTable">
<?php

  $namapenuh = $_SESSION['fullname'];
    //Buat paparan Entrance yang telah disubmit
  $no = 1; //untuk bilangan data dalam DB
   $entE = mysqli_query($hubung,"SELECT kodkursus,fullname,ent_tarikh FROM entrance WHERE fullname = '$namapenuh' ");
   $kiraS = mysqli_num_rows($entE);
    /* $kodkursus = $kira['kodkursus'];
     $fullname = $kira['fullname'];
     $ent_tarikh = $kira['ent_tarikh'];*/



     while ($tetA = mysqli_fetch_array($entE)){

?>
                                       
                                        <tr>
                                          <td><?php echo $tetA['kodkursus']; ?></td>
                                          <td><?php echo $tetA['fullname']; ?></td>
                                          <td><?php echo $tetA['ent_tarikh']; ?></td>
                                        </tr>
<?php

$no++;
}

?>

                                        <tr> 
                                          <td colspan="3">Jumlah borang Entrance Survey yang anda telah lengkapkan : 
                                            <?php 

                                             if ($kiraS == "0"){
                                              echo "Tiada" ;
                                             }
                                             else {
                                              echo $kiraS;
                                             } 
                                             ?>
                                               
                                             </td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>


			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

      </div><!--col-->
  </div><!--row-->

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
<!--search function-->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<?php include "importfungsi.php"; ?>
<?php include "importjs.php"; ?>

</body>
</html>