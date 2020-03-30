<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}



?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pensyarah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="addPensyarah.php" class="logo">
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

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Analisis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ent.php"><i class="fa fa-circle-o text-aqua"></i> Entrance Survey</a></li>
            <li><a href="ext.php"><i class="fa fa-circle-o text-aqua"></i> Exit Survey</a></li>
            <li><a href="entext.php"><i class="fa fa-circle-o text-red"></i> Entrance & Exit Survey</a></li>
            <li><a href="total.php"><i class="fa fa-circle-o"></i> Rekod Borang Soal Selidik</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>Daftar Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="addPensyarah.php"><i class="fa fa-circle-o"></i> Pensyarah</a></li>
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
        Daftar Pengguna
        <small>Pensyarah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="addPensyarah.php"><i class="fa fa-user-plus"></i> Daftar Pengguna</a></li>
        <li class="active">Pensyarah</li>
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
              <h3 class="box-title">Pensyarah</h3>
            </div>
            <!-- / box header-->
            <div class="box-body">

                    <form action="tambahPensyarah.php" method="POST" role="form">
                      <fieldset> 
                    
                        <div class="form-group">
                          <label class="control-label">Nama Penuh</label>
                          <input type="text" name="fname" class="form-control" placeholder="Nama penuh pensyarah.." required>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Nombor Matrik </label>
                          <input type="text" name="matrik" class="form-control" placeholder="Contoh.. 001234567890" required>
                          <span class="help-block">tiada ( - )</span>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="nama@gmail.com" required>
                        </div>
                        
                        <!--dropdown menu-->
                        <div class="form-group filled">
                          <label class="control-label">Sesi Pengajian</label>
                            <select class="form-control" name="sesi" required>

                                    <option value="">Sila pilih sesi pengajian</option>
                                    <option value="1/<?php echo date('Y');?>">1/<?php echo date('Y');?></option>
                                    <option value="2/<?php echo date('Y');?>">2/<?php echo date('Y');?></option>
                            </select>
                           </div>

                        <div class="form-group">
                          <label class="control-label">Username</label>
                          <input type="text" name="uname" class="form-control" placeholder="Username ini tidak boleh diubah.." required>
                        </div>
                        <div class="form-group has-error">
                          <span class="help-block">Password by default 123</span>
                        </div>

                        <!-- data input for pensyarah-->
                        <input type="hidden" name="pass" class="form-control" value="123">
                        <input type="hidden" name="level" value="2">

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>

                          </fieldset> 
                        </form>
                     
            </div><!--/box body-->

          </div><!--/box-->
         
        </div>
        <!-- /.col -->
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
<!-- script untuk confirm action-->
<script>
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
</script> 

</body>
</html>