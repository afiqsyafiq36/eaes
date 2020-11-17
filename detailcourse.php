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
  <title>Maklumat Kursus</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <?php include "importdesign.php"; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="detailcourse.php" class="logo">
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
            <li class="active"><a href="detailcourse.php"><i class="fa fa-circle-o text-yellow"></i> Kursus</a></li>
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
        Data Maklumat
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="detailcourse.php"><i class="fa fa-fw fa-file-text-o"></i> Data Maklumat</a></li>
        <li class="active">Kursus</li>
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
              <h3 class="box-title">Kursus</h3>
            </div>
            <!-- / box header-->

            <div class="box-body table-responsive">
                
              <table id="example1" class="table table-hover table-striped">
                <thead>
							        <tr>
							          <th>Bil.</th>
							          <th>Kod Kursus</th>
							          <th>Nama Kursus</th>
							          <th>Semester</th>
							          <th>Keterangan</th>
							          <th>Tindakan</th>
							        </tr>
							      </thead>
							      <tbody id="myTable">
		

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kursuskita = mysqli_query($hubung,"SELECT * FROM kursus");

while($dataGuna = mysqli_fetch_array($kursuskita)) {
     

?>
							      
				<tr>
				    <th><center><?php echo $no; ?></center></th>
				    <td><?php echo $dataGuna['kodkursus']; ?></td>
					<td><?php echo $dataGuna['namakursus']; ?></td>
					<td><?php echo $dataGuna['semester']; ?></td>
					<td><?php echo $dataGuna['keterangan']; ?></td>
					<td>
						<a class="btn btn-sm btn-info" title="Edit" data-toggle="modal" data-target="#myModal<?php echo $dataGuna['idkursus']; ?>"><i class="fa fa-pencil"></i>
						</a>

						<!--modal start-->
        <div class="modal fade" id="myModal<?php echo $dataGuna['idkursus']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Kemaskini Maklumat Kursus</h4>
                  </div>
                    <div class="modal-body">
                      <p>
                        <fieldset> 
                          
                          <form action="simpaneditadmin.php" method="post">
                          <?php  
                                   
                                   $pat = $dataGuna['idkursus'];
                                    //$pat = "<script>var st= 'id_edit'</script>";
                                    $tara = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '$pat'");
                                    while($maklumat = mysqli_fetch_array($tara) ) {

                                      $kodk = $maklumat['kodkursus'];
                                      $namak = $maklumat['namakursus'];
                                      $sem = $maklumat['semester'];
                                      $tentang = $maklumat['keterangan'];
                                      $cl1 = $maklumat['CLO1'];
                                      $cl2 = $maklumat['CLO2'];
                                      $cl3 = $maklumat['CLO3'];

                                      $cl1s1 = $maklumat['C1S1'];
                                      $cl1s2 = $maklumat['C1S2'];
                                      $cl1s3 = $maklumat['C1S3'];

                                      $cl2s1 = $maklumat['C2S1'];
                                      $cl2s2 = $maklumat['C2S2'];
                                      $cl2s3 = $maklumat['C2S3'];

                                      $cl3s1 = $maklumat['C3S1'];
                                      $cl3s2 = $maklumat['C3S2'];
                                      $cl3s3 = $maklumat['C3S3'];
                                    }
                          ?>
                           
                              <input type="hidden" name="idpat" value="<?php echo $pat; ?>">

                              <div class="form-group">
                                <h5>Maklumat Kursus</h5>
                                <label class="control-label">Kod Kursus</label>
                                <input type="text" name="kodkursus" class="form-control" value="<?php echo $kodk; ?>" required>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Nama Kursus</label>
                                <input type="text" name="namakursus" class="form-control" value="<?php echo $namak; ?>" required>
                              </div>

                              <div class="form-group">
                                <label for="semester">Semester</label>
                                  <select id="Semester" name="semester" class="form-control">
                                  <option value="<?php echo $sem; ?>"><?php echo $sem; ?> <small>(updated)</small></option>
                                  <option value="DVM1">1 Diploma</option>
                                  <option value="DVM2">2 Diploma</option>
                                  <option value="DVM3">3 Diploma</option>
                                  <option value="DVM4">4 Diploma</option>
                               </select>
                              </div>

                              <!-- text area-->

                              <div class="form-group">
                                <label for="Keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="<?php echo $tentang; ?>" placeholder="Maklumat atau penerangan ringkas tentang kursus tersebut." required>
                              </div>
                      </p>

                      <hr>
                      <p>
                          <div class="form-group">
                                  <h5>Hasil Pembelajaran Kursus</h5><br>
                                <label>CLO 1</label>
                                <input type="text" name="clo1" class="form-control" value="<?php echo $cl1; ?>" placeholder="Course Learning Outcome 1" required><br>

                                <input type="text" name="c1s1" class="form-control" value="<?php echo $cl1s1; ?>" placeholder="Soalan 1" required><br>

                                <input type="text" name="c1s2" class="form-control" value="<?php echo $cl1s2; ?>" placeholder="Soalan 2" required><br>

                                <input type="text" name="c1s3" class="form-control" value="<?php echo $cl1s3; ?>" placeholder="Soalan 3" required><br>

                                <!--clo2-->
                                <label>CLO 2</label>
                                <input type="text" name="clo2" class="form-control" value="<?php echo $cl2; ?>" placeholder="Course Learning Outcome 2" required><br>

                                <input type="text" name="c2s1" class="form-control" value="<?php echo $cl2s1; ?>" placeholder="Soalan 1" required><br>

                                <input type="text" name="c2s2" class="form-control" value="<?php echo $cl2s2; ?>" placeholder="Soalan 2" required><br>

                                <input type="text" name="c2s3" class="form-control" value="<?php echo $cl2s3; ?>" placeholder="Soalan 3" required><br>

                                <!--clo3-->
                                <label class="control-label">CLO 3</label>
                                <input type="text" name="clo3" class="form-control" value="<?php echo $cl3; ?>" placeholder="Course Learning Outcome 3" required><br>

                                <input type="text" name="c3s1" class="form-control" value="<?php echo $cl3s1; ?>" placeholder="Soalan 1" required><br>

                                <input type="text" name="c3s2" class="form-control" value="<?php echo $cl3s2; ?>" placeholder="Soalan 2" required><br>

                                <input type="text" name="c3s3" class="form-control" value="<?php echo $cl3s3; ?>" placeholder="Soalan 3" required>
                          </div>
                      </p>
                    </div><!-- /modal body-->

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
                        <button type="submit" id="deleteBtn" class="btn btn-sm btn-danger" value="<?php echo $dataGuna['idkursus']; ?>"><i class="fa fa-trash-o"></i></button>
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
            window.location.href = "deleteadmin.php?id_del="+$(this).val();
          } 
        });
  });
</script> 

</body>
</html>