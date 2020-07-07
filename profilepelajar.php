
<?php
include "sambung.php";

session_start();

if (!$_SESSION['uname']) {
  header("location:userlogin.php");
}

$id = $_SESSION['id'];
$fname = $_SESSION['fullname'];

$kemaskini = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

while($editData = mysqli_fetch_array($kemaskini) ) {

  $user = $editData['username'];
  $pass = $editData['password'];
  $nama = $editData['fullname'];
  $matrik = $editData['nomatrik'];
  $email = $editData['email'];
}

//total ent ext
$ags = mysqli_query($hubung,"SELECT idEnt FROM entrance WHERE fullname = '$fname' ");
$Gent = mysqli_num_rows($ags);

//total ext ent
$agz = mysqli_query($hubung,"SELECT idExt FROM ext WHERE fullname = '$fname' ");
$Gext = mysqli_num_rows($agz);

$totalKira = $Gent + $Gext;

//update
$id = $_SESSION['id'];
$gapo = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

$gapoA = mysqli_fetch_array($gapo);
$sesiP = $gapoA['sesi'];

?>


<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile Pelajar</title>
  <?php include "importdesign.php"; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="profilepelajar.php" class="logo">
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
        Profile
        <small><?php echo $_SESSION['fullname']; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="profilepelajar.php"><i class="fa fa-user"></i> Profile</a></li>
        <li class="active"><?php echo $_SESSION['fullname']; ?></li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="./images/ipit.png" alt="Admin profile picture">

              <h3 class="profile-username text-center"><?php echo $_SESSION['uname']; ?></h3>

              <p class="text-muted text-center">Student</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Ent & Ext</b> <a class="pull-right"><?php echo $totalKira; ?> borang</a>
                </li>
                <li class="list-group-item">
                  <b>Sesi Pengajian</b> <a class="pull-right"><?php echo $sesiP; ?></a>
                </li>
                
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>  Institusi</strong>

              <p class="text-muted">
                Kolej Vokasional Datuk Seri Abu Zahar Isnin
              </p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Program</strong>

              <p class="text-muted">Teknologi Sistem Pengurusan Pangkalan Data dan Aplikasi Web</p>

              <hr>

              <strong><i class="fa fa-folder-open margin-r-5"></i> Senarai Kursus</strong>
<?php
   $no = 1;
   $kpd = mysqli_query($hubung,"SELECT * FROM kursus");

while($dataCourse = mysqli_fetch_array($kpd)) {
     $kodkursus = $dataCourse['kodkursus'];
     $namakursus = $dataCourse['namakursus'];

?>

              <p class="text-muted"><li><?php echo $kodkursus.''.$namakursus ?></li></p>
<?php
$no++;
}
?>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              
              <div class="active tab-pane" id="settings">
                <form class="form-horizontal" name="chngpwd" action="simpaneditpelajar.php" method="POST" onSubmit="return valid();">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input disabled="" class="form-control" id="inputName" value="<?php echo $user; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Penuh</label>
                    <div class="col-sm-10">
                      <input type="text" name="fname" class="form-control" id="inputName" value="<?php echo $nama; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombor Matrik</label>

                    <div class="col-sm-10">
                      <input type="text" name="matrik" class="form-control" id="inputName" value="<?php echo $matrik; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $email; ?>" required>
                    </div>
                  </div>

                  <hr>
                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Old Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="opw" class="form-control" id="inputPassword" placeholder="Recent password" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="npw" class="form-control" id="inputPassword" placeholder="New Password.." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="cpw" class="form-control" id="inputPassword" placeholder="Retype your password.." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger" name="submit">Update</button>
                    </div>
                  </div>
                 <input type="hidden" name="idk" value="<?php echo $id; ?>">
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

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
 <!--script untuk yes or no box-->
<script>
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
//valid password changes
function valid()
{
  if(document.chngpwd.opw.value == null)
  {
    alert("Please fill out your old password");
    document.chngpwd.opw.focus();

    return false;
  }
  else if(document.chngpwd.npw.value == null)
  {
    alert("Please fill out your new password");
    document.chngpwd.npw.focus();

    return false;
  }
  else if(document.chngpwd.cpw.value == null)
  {
    alert("Please retype your password to confirm a new one");
    document.chngpwd.cpw.focus();

    return false;
  }
  else if(document.chngpwd.npw.value != document.chngpwd.cpw.value)
  {
    alert("Your new password and confirm password do not match");
    document.chngpwd.cpw.focus();

    return false;
  }

  return true;
}
</script> 



</body>
</html>