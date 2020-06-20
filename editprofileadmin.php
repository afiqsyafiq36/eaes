<?php


include "sambung.php";


session_start();
if (!$_SESSION['uname']) {
  header("location:adminlogin.php");
}

$id = $_SESSION['id'];
$tukar = mysqli_query($hubung,"SELECT * FROM admin ");

while($editDetail = mysqli_fetch_array($tukar) ) {

  $user = $editDetail['username'];
  $pass = $editDetail['password'];
  $email = $editDetail['email'];
  $notel = $editDetail['notel'];
}



$ag1 = mysqli_query($hubung,"SELECT * FROM user WHERE level = '1' ");
$ag2 = mysqli_query($hubung, "SELECT * FROM user WHERE level = '2' ");
$ag3 = mysqli_query($hubung, "SELECT * FROM kursus");

$pelajar = mysqli_num_rows($ag1);
$pensyarah = mysqli_num_rows($ag2);
$kursus = mysqli_num_rows($ag3);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="editprofileadmin.php" class="logo">
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
        Profile
        <small><?php echo $_SESSION['uname']; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="editprofileadmin.php"><i class="fa fa-user"></i> Profile</a></li>
        <li class="active"><?php echo $_SESSION['uname']; ?></li>
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

              <p class="text-muted text-center">System Administrator</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Pelajar</b> <a class="pull-right"><?php echo $pelajar; ?> orang</a>
                </li>
                <li class="list-group-item">
                  <b>Pensyarah</b> <a class="pull-right"><?php echo $pensyarah; ?> orang</a>
                </li>
                <li class="list-group-item">
                  <b>Kursus</b> <a class="pull-right"><?php echo $kursus; ?> kursus</a>
                </li>
              </ul>

              <a href="resetVisitor.php" class="btn btn-primary btn-block"><b>Reset User Log Session</b></a>
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

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Peringatan</strong>

              <div class="box-body">
              <blockquote>
                <p>Admin adalah seorang yang berdedikasi dalam mengekalkan privasi data maklumat pengguna dengan sebaiknya.</p>
                <small>Muhd Syafiq <cite title="Source Title"><a href="https://www.instagram.com/afiqsyafiq36/">@afiqsyafiq36</a></cite></small>
              </blockquote>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" name="chngpwd" action="simpaneditadmin1.php" method="POST" onSubmit="return valid();">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input disabled="" class="form-control" id="inputName1" value="<?php echo $user; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $email; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombor Telefon</label>

                    <div class="col-sm-10">
                      <input type="text" name="notel" class="form-control" id="inputName" value="<?php echo $notel; ?>" required>
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

                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="profile">
              <?php
                $query = mysqli_query($hubung,"SELECT * FROM activity_history WHERE DATE(created_date) = CURRENT_DATE() ORDER BY created_date DESC");
                if(mysqli_num_rows($query) != null) {
                  while($data = mysqli_fetch_array($query)) {
                    $activity = $data['activity'];
                    $date_create = $data['created_date'];
                    $date_display = date('Y-m-d H:i:s',strtotime($date_create));
              ?>
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="./images/bot.png" alt="user image">
                        <span class="username">
                          <a href="#">System bot</a>
                        </span>
                    <span class="description"><time class="timeago" datetime="<?= $date_display; ?>"></time></span>
                    <!-- <time class="timeago" datetime="2008-07-17T09:24:17Z">July 17, 2008</time> -->
                  </div>
                  <!-- /.user-block -->
                  <p>
                    <?= $activity ?>
                  </p>
                </div>
                <!-- /.post -->
              <?php
                  }
                } elseif(mysqli_num_rows($query) == "") {
              ?>
              <!-- Post -->
              <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="./images/bot.png" alt="user image">
                        <span class="username">
                          <a href="#">System bot</a>
                        </span>
                    <span class="description">today</span>
                    <!-- <time class="timeago" datetime="2008-07-17T09:24:17Z">July 17, 2008</time> -->
                  </div>
                  <!-- /.user-block -->
                  <p>
                    No recent activity..
                  </p>
                </div>
                <!-- /.post -->
              <?php
                } else {
                  echo "Something not right";
                }
              ?>
                
                
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
<script type="text/javascript">
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
$(document).ready(function() {
  $("time.timeago").timeago();
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
