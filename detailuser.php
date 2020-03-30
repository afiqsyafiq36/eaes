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
  <title>Maklumat Pengguna</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="detailuser.php" class="logo">
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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span>Data Maklumat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="detailcourse.php"><i class="fa fa-circle-o text-yellow"></i> Kursus</a></li>
            <li class="active"><a href="detailuser.php"><i class="fa fa-circle-o text-yellow"></i> Pengguna</a></li>
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
        Data Maklumat
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="detailuser.php"><i class="fa fa-fw fa-file-text-o"></i> Data Maklumat</a></li>
        <li class="active">Pengguna</li>
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
              <h3 class="box-title">Pengguna</h3>
            </div>
            <!-- / box header-->

            <div class="box-body table-responsive">
               
                   <table id="example1" class="table table-hover table-striped">
                   <thead>
                      <tr>
                        <th>Bil.</th>
                        <th>Username</th>
                        <th>Nama Penuh</th>
                        <th>No Matrik</th>
                        <th>Email</th>
                        <th>Sesi Pengajian</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
    

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kpd = mysqli_query($hubung,"SELECT * FROM user");

while($dataUser = mysqli_fetch_array($kpd)) {
     

?>
                    
                      <tr>
                        <th><center><?php echo $no; ?></center></th>
                        <td><?php echo $dataUser['username']; ?></td>
                        <td><?php echo $dataUser['fullname']; ?></td>
                        <td><?php echo $dataUser['nomatrik']; ?></td>
                        <td><?php echo $dataUser['email']; ?></td>
                        <td><?php echo $dataUser['sesi']; ?></td>
                        <td>
                          <?php
                             if ($dataUser['level'] == '1') {
                               echo $kategori="Pelajar";
                             }
                             else {
                               echo $kategori="Pensyarah";
                             }
                          ?>
                        </td>
                        <td>
                          <?php 
                             if ($dataUser['status'] == '1' ){
                                echo "<i class=\"fa fa-circle text-success\"></i> Online"; 
                             }
                             elseif ($dataUser['status'] == '2' ) {
                                echo "<i class=\"fa fa-circle text-red\"></i> Offline"; 
                             }
                             else {
                                echo "<i class=\"fa fa-star\"></i> New User";
                             }
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-sm btn-info" title="Edit" data-toggle="modal" data-target="#myModal<?php echo $dataUser['id']; ?>"><i class="fa fa-pencil"></i>
                          </a>
     <!--modal start-->
        <div class="modal fade" id="myModal<?php echo $dataUser['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Kemaskini Maklumat Pengguna</h4>
                  </div>
                    <div class="modal-body">
                      <p>
                        <fieldset> 
                          <!--js id_edit
                          <script>
                            $('#myModal').on('show.bs.modal', function (event) {
                            let id_edit = $(event.relatedTarget).data('id_edit') 
                            $(this).find('.modal-body input').val(id_edit)
                          })
                          </script>
                          -->
                          
                          <form action="simpaneditadmin2.php" method="post">
                          <?php  
                                   
                                   $papa = $dataUser['id'];
                                    //$pat = "<script>var st= 'id_edit'</script>";
                                    $meka = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$papa'");
                                    while($kpdCourse = mysqli_fetch_array($meka) ) {

                                      $fnameUser = $kpdCourse['fullname'];
                                      $matrikUser = $kpdCourse['nomatrik'];
                                      $emailUser = $kpdCourse['email'];
                                      $sesiUser = $kpdCourse['sesi'];
                                      
                                    }
                          ?>
                           
                              <input type="hidden" name="papa2" value="<?php echo $papa; ?>">

                           <!--mula form-->

                        <div class="form-group">
                          <label class="control-label">Nama Penuh</label>
                          <input type="text" name="fname" class="form-control" value="<?php echo $fnameUser; ?>" required>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label">Nombor Matrik <small>tanpa (-)</small></label>
                          <input type="text" name="matrik" class="form-control" value="<?php echo $matrikUser; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $emailUser; ?>" required>
                        </div>

                        <!--dropdown menu-->
                        <div class="form-group filled">
                          <label class="control-label">Sesi Pengajian</label>
                            <select id="Sesi" class="form-control" name="sesi">

                                    <option value="<?php echo $sesiUser; ?>"><?php echo $sesiUser; ?> <small>(updated)</small></option>
                                    <option value="1/<?php echo date('Y'); ?>">1/<?php echo date('Y'); ?></option>
                                    <option value="2/<?php echo date('Y'); ?>">2/<?php echo date('Y'); ?></option>
                               </select>
                        </div>

                      </p>

                     <!--pembahagi 
                     <hr>
                   -->
                          
                        
                    </div><!--modal body-->

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data="Simpan Kemaskini?">Save changes</button>
                  </div>
                </form>
                </fieldset>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div> <!--modal end-->

                    &nbsp|&nbsp
                    <a type="submit" data-confirm="Reset katalaluan pengguna?" title="Reset" class="btn btn-sm btn-warning" href="resetuser.php?id_reset=<?php echo $dataUser['id']; ?>"><i class="fa fa-undo"></i></a>
                    &nbsp|&nbsp
                    <a type="submit" data-confirm="Adakah anda betul-betul pasti?" title="Delete" class="btn btn-sm btn-danger" href="deleteuser.php?id_del=<?php echo $dataUser['id']; ?>"><i class="fa fa-trash-o"></i></a>
                  </td>

                      </tr>
                    
<?php
$no++;
}
?>
                   </tbody>
                  </table>


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