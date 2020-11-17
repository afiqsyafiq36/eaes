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
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekod Borang Soal Selidik</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
	<?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="total.php" class="logo">
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
            <li><a href="ext.php"><i class="fa fa-circle-o text-aqua"></i> Exit Survey</a></li>
            <li><a href="entext.php"><i class="fa fa-circle-o text-red"></i> Entrance & Exit Survey</a></li>
            <li class="active"><a href="total.php"><i class="fa fa-circle-o"></i> Rekod Borang Soal Selidik</a></li>
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
        <small>Rekod Borang Soal Selidik</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="total.php"><i class="fa fa-bar-chart"></i> Analisis</a></li>
        <li class="active">Rekod Borang Soal Selidik</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!--row-->
      <div class="row">
        <div class="col-xs-12">

         <!-- BOX -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rekod Borang Soal Selidik Entrance Survey</h3>
            </div>
            <!-- / box header-->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Kod Kursus</th>
                    <th>Nama</th>
                    <th>Tarikh Dihantar</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody id="myTable">
<?php

    //Buat paparan Entrance yang telah disubmit
   $no = 1; //untuk bilangan data dalam DB
   $ent = mysqli_query($hubung,"SELECT idEnt,kodkursus,fullname,ent_tarikh FROM entrance ORDER BY idEnt DESC");
   $kira = mysqli_num_rows($ent);

while($info = mysqli_fetch_array($ent)) {
     

?>
                
                  <tr>
                    <td><?php echo $info['kodkursus']; ?></td>
                    <td><?php echo $info['fullname']; ?></td>
                    <td><?php echo $info['ent_tarikh']; ?></td>
                    <td><button type="submit" id="deleteBtn" class="btn btn-sm btn-danger" value="<?php echo $info['idEnt']; ?>"><i class="fa fa-trash-o"></i></button></td>
                  </tr>
<?php
$no++;
}
?>
                  <tr> 
                    <td>Jumlah Borang Diterima : <?php echo $kira; ?></td>
                  </tr>
                </tbody>

              </table>
          
            </div><!--/box body-->

          </div><!--/box-->
          <div class="row">
           <div class="col-sm-5">
               <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing table 1 of 2</div>
           </div>
           <div class="col-sm-7">

               <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                  <li class="paginate_button previous disabled">
                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                  </li>
                  <li class="paginate_button active">
                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                  </li>
                  <li class="paginate_button ">
                    <a href="total2.php" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                  </li>
                  <li class="paginate_button next" id="example1_next">
                    <a href="total2.php" aria-controls="example1" data-dt-idx="3" tabindex="0">Next</a>
                  </li>
                </ul>
              </div>

           </div>

          </div>


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
           
           
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
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- script untuk confirm action-->
<script>
                          //   $(document).on('click', ':not(form)[data-confirm]', function(e){
                          //     if(!confirm($(this).data('confirm'))){
                          //       e.stopImmediatePropagation();
                          //       e.preventDefault();
                          //     }
                          // });
  
    $(document).on('click', '#deleteBtn', function(e){
        
        // console.log($(this).val());
        console.log('Butang diklik');
        e.preventDefault();
        swal({
          title: "Adakah anda pasti dengan pilihan ini?",
          text: "Data yang dipadam tidak akan kembali.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
          if (willDelete) {
            
            swal("Permintaan anda sedang diproses.", {
              icon: "info",
            });
            window.location.href = "deletesurvey1.php?id_delete="+$(this).val();
          } 
        });
    });
</script> 

</body>
</html>