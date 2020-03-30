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



?>


<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="./img/logo.jpg">
	<title>Pengurusan Data</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />


      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

 <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
      <link href="css/style.css" rel='stylesheet' type='text/css' />
      <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
      <script src="js/jquery.min.js"></script>
<!----webfonts--->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  

<!--bootstrap 4 icon analisis-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- icon add user-->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<!-- icon dashboard-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
<!-- custom for panel-->
<link href="./style/panel.css" rel="stylesheet">
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->



</head>
<body>

<div id="wrapper">
	<!--navigasi-->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboardadmin.php">Administrator</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<!-- dropdown account-->
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/user.png" alt=""/></a>
                    <!-- account box -->
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="profileadmin.php"><i class="fa fa-user"></i> Admin</a></li>
						<li class="m_2"><a href="managedata.php"><i class="fa fa-wrench"></i> Manage Data</a></li>
						<li class="m_2"><a href="logoutadmin.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>


            <!-- search bar-->
			<!--<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>-->


            <!--navigasi menu sidebar-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <!-- dropdown account-->
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/user.png" alt=""/>  Account</a>
                        <!-- account box -->
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header text-center">
                              <strong>Account</strong>
                            </li>
                          <li class="m_2"><a href="profileadmin.php"><i class="fa fa-user"></i> Admin</a></li>
                          <li class="m_2"><a href="managedata.php"><i class="fa fa-wrench"></i> Manage Data</a></li>
                          <li class="m_2"><a href="logoutadmin.php"><i class="fa fa-lock"></i> Logout</a></li>  
                            </ul>
                      </li>

                        <!-- menu dashbaord admin-->
                        <li>
                            <a href="dashboardadmin.php"><i class="fa fa-dashboard"></i>&nbsp Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart"></i>&nbsp Analisis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ent.php">Entrance Survey</a>
                                </li>
                                <li>
                                    <a href="ext.php">Exit Survey</a>
                                </li>
                                <li>
                                    <a href="total.php">Total Survey</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fas fa-user-plus"></i>&nbspDaftar Pengguna<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addPensyarah.php">Pensyarah</a>
                                </li>
                                <li>
                                    <a href="addPelajar.php">Pelajar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="addCourse.php"><i class="fas fa-folder-open"></i>&nbsp Tambah Kursus</a>
                        </li>


                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>




        <div id="page-wrapper">
        <div class="graphs">
        <div class="graph_box">
          <!--title-->
           
             <h2>Pengurusan Data Dan Maklumat</h2><br>
<!--panel 1-->
  <div class="content_bottom">
       <div class="col-md-13 span_7">
              <div class="bs-example1" data-example-id="contextual-table">

  <!-- graf  bar-->
  <!-- tab kursus-->
    
		               <br><h3>Maklumat Admin</h3>

		                <div class="but_list">

		              <form action="simpaneditadmin1.php" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()" method="POST">
                      <fieldset> 
                    
                        <div class="form-group">
                          <label class="control-label">Username Admin<small>(Tidak boleh diubah)</small></label>
                          <input disabled="" id="disabledinput" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $user; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Password</label>
                          <input type="password" name="pass" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $pass; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Email Admin</label>
                          <input type="text" name="email" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $email; ?>" required>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label">Nombor Talian Admin <small>tanpa (-)</small></label>
                          <input type="text" name="notel" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" value="<?php echo $notel; ?>" required>
                        </div>

            <!-- submit and reset-->
                        <div class="form-group">
                          <div class="form-group">
                          <!-- button example -->
                            <button type="submit" class="btn btn-primary" data-confirm="Anda pasti dengan maklumat ini?">Update</button>
                        </div>
                        
                        </div>

                          </fieldset> 
                        </form>

		                </div><!--tutup but_list-->
             </div>
          <div class="clearfix"> </div>
      </div>

      <!--script untuk yes or no box-->
<script>
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
</script> 
            

        
	  <div class="col_1"></div>
 </div>

 <!-- panel 2-->
 <div class="content_bottom">
       <div class="col-md-13 span_7">
              <div class="bs-example1" data-example-id="contextual-table">

  <!-- graf  bar-->
  <!-- tab kursus-->
    
		               <br><h3>Maklumat Kursus</h3>
                      <!-- Table Maklumat kursus-->
		               <div class="but_list">
		                    
                <div class="bs-example4" data-example-id="simple-responsive-table">
                  <div class="table-responsive">
                    <table class="table">
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
		

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kursuskita = mysqli_query($hubung,"SELECT * FROM kursus");

while($dataGuna = mysqli_fetch_array($kursuskita)) {
     

?>
							      <tbody>
							        <tr>
							          <th scope="row"><?php echo $no; ?></th>
							          <td><?php echo $dataGuna['kodkursus']; ?></td>
							          <td><?php echo $dataGuna['namakursus']; ?></td>
							          <td><?php echo $dataGuna['semester']; ?></td>
							          <td><?php echo $dataGuna['keterangan']; ?></td>
							          <td><a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal<?php echo $dataGuna['idkursus']; ?>"><i class="fa fa-pencil"></i></a>

                    
     
     <!--modal start-->
        <div class="modal fade" id="myModal<?php echo $dataGuna['idkursus']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">Kemaskini Maklumat Kursus</h2>
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
                                <h2>Maklumat Kursus</h2>
                                <label class="control-label">Kod Kursus <small>*Tanpa jarak</small></label>
                                <input type="text" name="kodkursus" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $kodk; ?>" required>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Nama Kursus</label>
                                <input type="text" name="namakursus" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $namak; ?>" required>
                              </div>

                              <div class="form-group">
                                <label for="semester">Semester</label>
                                  <select id="Semester" name="semester" class="form-control1 ng-invalid ng-invalid-required">
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
                                <input type="text" name="keterangan" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $tentang; ?>" placeholder="Maklumat atau penerangan ringkas tentang kursus tersebut." required>
                              </div>
                      </p>

                      <hr>
                          <div class="form-group">
                                  <h2>Hasil Pembelajaran Kursus</h2><br>
                                <label class="control-label"><strong>CLO 1</strong></label>
                                <input type="text" name="clo1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl1; ?>" placeholder="Course Learning Outcome 1" required><br><br>

                                <input type="text" name="c1s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl1s1; ?>" placeholder="Soalan 1" required><br><br>

                                <input type="text" name="c1s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl1s2; ?>" placeholder="Soalan 2" required><br><br>

                                <input type="text" name="c1s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl1s3; ?>" placeholder="Soalan 3" required><br><br>

                                <!--clo2-->
                                <label class="control-label"><strong>CLO 2</strong></label>
                                <input type="text" name="clo2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl2; ?>" placeholder="Course Learning Outcome 2" required><br><br>

                                <input type="text" name="c2s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl2s1; ?>" placeholder="Soalan 1" required><br><br>

                                <input type="text" name="c2s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl2s2; ?>" placeholder="Soalan 2" required><br><br>

                                <input type="text" name="c2s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl2s3; ?>" placeholder="Soalan 3" required><br><br>

                                <!--clo3-->
                                <label class="control-label"><strong>CLO 3</strong></label>
                                <input type="text" name="clo3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl3; ?>" placeholder="Course Learning Outcome 3" required><br><br>

                                <input type="text" name="c3s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl3s1; ?>" placeholder="Soalan 1" required><br><br>

                                <input type="text" name="c3s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl3s2; ?>" placeholder="Soalan 2" required><br><br>

                                <input type="text" name="c3s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $cl3s3; ?>" placeholder="Soalan 3" required>
                          </div>
                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-confirm="Simpan Kemaskini?">Save changes</button>
                  </div>
                </form>
                </fieldset>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div> <!--modal end-->

										&nbsp|&nbsp
										<a type="submit" data-confirm="Adakah anda pasti?" class="btn btn-sm btn-danger" href="deleteadmin.php?id_del=<?php echo $dataGuna['idkursus']; ?>"><i class="fa fa-trash-o"></i></a>
									</td>

							        </tr>
							      </tbody>
<?php
$no++;
}
?>
							    </table>
							    </div>

		                </div>
             </div>
          <div class="clearfix"> </div>
      </div>
    
            

        
	  <div class="col_1"></div>
 </div>

 <!-- panel 3-->
 <div class="content_bottom">
       <div class="col-md-13 span_7">
              <div class="bs-example1" data-example-id="contextual-table">

  <!-- table maklumat user-->
  <!-- modals-->
    
                   <br><h3>Maklumat Pengguna</h3>

                    <div class="but_list">
               <div class="bs-example4" data-example-id="simple-responsive-table">
                  <div class="table-responsive">
                    <table class="table">
                   <thead>
                      <tr>
                        <th>Bil.</th>
                        <th>Username</th>
                        <th>Nama Penuh</th>
                        <th>No Matrik</th>
                        <th>Email</th>
                        <th>Sesi Pengajian</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
    

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kpd = mysqli_query($hubung,"SELECT * FROM user");

while($dataUser = mysqli_fetch_array($kpd)) {
     

?>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $dataUser['username']; ?></td>
                        <td><?php echo $dataUser['fullname']; ?></td>
                        <td><?php echo $dataUser['nomatrik']; ?></td>
                        <td><?php echo $dataUser['email']; ?></td>
                        <td><?php echo $dataUser['sesi']; ?></td>
                        <td><a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal<?php echo $dataUser['id']; ?>"><i class="fa fa-pencil"></i></a>

                    
     
     <!--modal start-->
        <div class="modal fade" id="myModal<?php echo $dataUser['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">Kemaskini Maklumat Pengguna</h2>
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

                                      $passUser = $kpdCourse['password'];
                                      $fnameUser = $kpdCourse['fullname'];
                                      $matrikUser = $kpdCourse['nomatrik'];
                                      $emailUser = $kpdCourse['email'];
                                      $sesiUser = $kpdCourse['sesi'];
                                      
                                    }
                          ?>
                           
                              <input type="hidden" name="papa2" value="<?php echo $papa; ?>">

                           <!--mula form-->

                        <div class="form-group">
                          <label class="control-label">Password</label>
                          <input type="password" name="pass" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $passUser; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Nama Penuh</label>
                          <input type="text" name="fname" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $fnameUser; ?>" required>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label">Nombor Matrik <small>tanpa (-)</small></label>
                          <input type="text" name="matrik" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" value="<?php echo $matrikUser; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" name="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" value="<?php echo $emailUser; ?>" required>
                        </div>

                        <!--dropdown menu-->
                        <div class="form-group filled">
                          <label class="control-label">Sesi Pengajian</label>
                            <select class="form-control1 ng-invalid ng-invalid-required" name="sesi" ng-model="model.select" required>

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
                    <button type="submit" class="btn btn-primary" data-confirm="Simpan Kemaskini?">Save changes</button>
                  </div>
                </form>
                </fieldset>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div> <!--modal end-->

                    &nbsp|&nbsp
                    <a type="submit" data-confirm="Adakah anda betul-betul pasti?" class="btn btn-sm btn-danger" href="deleteadmin.php?id_del=<?php echo $dataUser['id']; ?>"><i class="fa fa-trash-o"></i></a>
                  </td>

                      </tr>
                    </tbody>
<?php
$no++;
}
?>
                  </table>
                  </div>

                    </div>
             </div>
          <div class="clearfix"> </div>
      </div>
    
            

        
    <div class="col_1"></div>
 </div>
 <!--panel3-->

 

    
     
      <div class="clearfix"> </div>
       </div>


        <div class="copy">
            <p>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin </p>
        </div>
        </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>