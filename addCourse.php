<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}

$admin_id = $_SESSION['id'];
$query_admin = mysqli_query($hubung,"SELECT * FROM admin WHERE id = '$admin_id'");
while($detail = mysqli_fetch_array($query_admin) ) {
  $imgPath = $detail['image'];
}

if(isset($_POST['kodkursus'])) {

  // variable
     $kodkursus = $_POST['kodkursus'];
     $namakursus = $_POST['namakursus'];
     $semester = $_POST['semester'];
     $keterangan = $_POST['keterangan'];
     $clo1 = $_POST['clo1'];
     $c1s1 = $_POST['c1s1'];
     $c1s2 = $_POST['c1s2'];
     $c1s3 = $_POST['c1s3'];

     $clo2 = $_POST['clo2'];
     $c2s1 = $_POST['c2s1'];
     $c2s2 = $_POST['c2s2'];
     $c2s3 = $_POST['c2s3'];

     $clo3 = $_POST['clo3'];
     $c3s1 = $_POST['c3s1'];
     $c3s2 = $_POST['c3s2'];
     $c3s3 = $_POST['c3s3'];


     //insert table kursus

     $tambah = "INSERT INTO kursus (kodkursus,namakursus,semester,keterangan,CLO1,CLO2,CLO3,C1S1,C1S2,C1S3,C2S1,C2S2,C2S3,C3S1,C3S2,C3S3) VALUES 
     ('$kodkursus','$namakursus','$semester','$keterangan','$clo1','$clo2','$clo3','$c1s1','$c1s2','$c1s3','$c2s1','$c2s2','$c2s3','$c3s1','$c3s2','$c3s3')";
      //kursus
     $hasil = mysqli_query($hubung,$tambah);
     
     //ent untuk tambah course
     $dataEnt = "INSERT INTO ent (kodkursus) VALUES ('$kodkursus')";
     $hasilEnt = mysqli_query($hubung,$dataEnt);

     //ext untuk tambah course
     $dataExt = "INSERT INTO ext (kodkursus) VALUES ('$kodkursus')"; 
     $hasilExt = mysqli_query($hubung,$dataExt);
     
     echo "<script>alert('Kursus berjaya ditambah');
        window.location='addCourse.php'</script>";

}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kursus</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="addCourse.php" class="logo">
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
              <?php if($imgPath != null) { ?>
                    <img src="<?= $imgPath; ?>" class="user-image" alt="User Image">
              <?php } else { ?>
                    <img src="./images/ipit.png" class="user-image" alt="User Image">
              <?php } ?>
              <span class="hidden-xs"><?php echo $_SESSION['uname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if($imgPath != null) { ?>
                      <img src="<?= $imgPath ?>" class="img-circle" alt="User Image">
                <?php } else { ?>
                      <img src="./images/ipit.png" class="img-circle" alt="User Image">
                <?php } ?>

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
          <?php if($imgPath != null) { ?>
                <img id="uploaded_image3" src="<?= $imgPath ?>" class="img-circle" alt="User Image">
          <?php } else { ?>
                <img id="uploaded_image3" src="./images/ipit.png" class="img-circle" alt="User Image">
          <?php } ?>
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
        <li class="active">
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
        Tambah Kursus
      </h1>
      <ol class="breadcrumb">
        <li><a href="addCourse.php"><i class="fa fa-folder-open"></i> Tambah Kursus</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!--row-->
      <div class="row">
        <div class="col-md-12">

          <div class="callout callout-info">
          <h4><i class="icon fa fa-warning"></i>&nbsp&nbspArahan!</h4>
          <p>
            Sila lengkapkan borang pada bahagian <b>Course Detail</b> dan kemudian borang pada bahagian <b>Course Outcome</b>. <br>
          </p>
        </div>

         <!-- BOX -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Kursus</h3>
            </div>
            <!-- / box header-->
            <div class="box-body">

        
<!-- START CUSTOM TABS -->

    <form action="addCourse.php" method="POST">
      <fieldset>

         <!-- START CUSTOM TABS -->

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Course Detail</a></li>
              <li><a href="#tab_2" data-toggle="tab">Course Outcome</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <p>
                    <div class="form-group">
                          <h4>Maklumat Kursus</h4><br>
                          <label class="control-label">Kod Kursus </label>
                          <input type="text" name="kodkursus" class="form-control" placeholder="Contoh.. DKA1123" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Nama Kursus</label>
                          <input type="text" name="namakursus" class="form-control" placeholder="Nama kursus.." required>
                        </div>

                        <div class="form-group">
                          <label for="semester">Semester</label>
                            <select id="Semester" name="semester" class="form-control" required>
                            <option value="">Sila pilih semester</option>
                            <option value="DVM1">1 Diploma</option>
                            <option value="DVM2">2 Diploma</option>
                            <option value="DVM3">3 Diploma</option>
                            <option value="DVM4">4 Diploma</option>
                         </select>
                        </div>

                        <!-- text area-->

                        <div class="form-group">
                          <label for="Keterangan" class="control-label">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control" placeholder="Maklumat atau penerangan ringkas tentang kursus tersebut." required>
                        </div>
                        <div class="form-group has-error">
                          <span class="help-block">* Sila isi borang Course Detail dan Course Outcome</span>
                        </div>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <p>
                        <div class="form-group">
                            <h4>Hasil Pembelajaran Kursus</h4><br>
                          <label class="control-label"><strong>CLO 1</strong></label>
                          <input type="text" name="clo1" class="form-control" placeholder="Course Learning Outcome 1" required><br>

                          <input type="text" name="c1s1" class="form-control" placeholder="Soalan 1" required><br>

                          <input type="text" name="c1s2" class="form-control" placeholder="Soalan 2" required><br>

                          <input type="text" name="c1s3" class="form-control" placeholder="Soalan 3" required>
                        </div>

                        <!-- SOALAN -->
                        

                        <div class="form-group">
                          <label class="control-label"><strong>CLO 2</strong></label>
                          <input type="text" name="clo2" class="form-control" placeholder="Course Learning Outcome 2" required><br>

                          <input type="text" name="c2s1" class="form-control" placeholder="Soalan 1" required><br>

                          <input type="text" name="c2s2" class="form-control" placeholder="Soalan 2" required><br>

                          <input type="text" name="c2s3" class="form-control" placeholder="Soalan 3" required>
                        </div>


                        <!-- SOALAN-->

                        <div class="form-group">
                          <label class="control-label"><strong>CLO 3</strong></label>
                          <input type="text" name="clo3" class="form-control" placeholder="Course Learning Outcome 3" required><br>

                          <input type="text" name="c3s1" class="form-control" placeholder="Soalan 1" required><br>

                          <input type="text" name="c3s2" class="form-control" placeholder="Soalan 2" required><br>

                          <input type="text" name="c3s3" class="form-control" placeholder="Soalan 3" required>
                          
                        </div>
                        <div class="form-group has-error">
                          <span class="help-block">* Sila pastikan maklumat yang diisi adalah betul.</span>
                        </div>

                        <!--submit-->

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                </p>
              </div>
              <!-- /.tab-pane -->
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

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


</body>
</html>