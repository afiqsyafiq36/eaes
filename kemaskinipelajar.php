<?php
include "sambung.php";

session_start();

if (!$_SESSION['uname']) {
  header("location:userlogin.php");
}

$id = $_SESSION['id'];

$kemaskini = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

while($editData = mysqli_fetch_array($kemaskini) ) {

  $user = $editData['username'];
  $pass = $editData['password'];
	$nama = $editData['fullname'];
	$matrik = $editData['nomatrik'];
	$email = $editData['email'];
}


//update
$id = $_SESSION['id'];
$gapo = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

$gapoA = mysqli_fetch_array($gapo);


?>
<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="./img/logo.jpg">
  <title>Profile Pelajar</title>

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

</head>
<body>
 <!--script untuk yes or no box-->
<script>
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
</script> 
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
                <a class="navbar-brand" href="dashboardpelajar.php">Pelajar</a>
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
            <li class="m_2"><a href="profilepelajar.php"><i class="fa fa-user"></i> User</a></li>
            <li class="m_2"><a href="kemaskinipelajar.php?id_edit=<?php echo $gapoA['id']; ?>"><i class="fa fa-wrench"></i> Update Detail</a></li>
            <li class="m_2"><a href="logoutuser.php"><i class="fa fa-lock"></i> Logout</a></li>  
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

                         <!-- menu dashbaord pelajar-->
                        <li>
                            <a href="dashboardpelajar.php"><i class="fa fa-dashboard"></i>&nbsp Dashboard</a>
                        </li>

                        <li>
                          <!-- entrance survey-->
                            <a href="#"><i class="far fa-file-alt"></i>&nbsp&nbsp Borang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="borangent.php">Entrance Survey</a>
                                </li>
                                <li>
                                    <a href="borangexit.php">Exit Survey</a>
                                </li>
                            </ul>
                        </li>

                        


                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
        <div class="graphs">
        <div class="col_3">
          <!--title-->
            <div class="grid_3 grid_5">
               

               <!-- Borang Tambah Pelajar-->

                <div class="content_bottom">
                 <div class="col-md-13 span_7">
                      <div class="bs-example1" data-example-id="contextual-table">

                        <form action="simpaneditpelajar.php" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()" method="POST">
                      <fieldset> 
                    
                        <div class="form-group">
                          <h2>Kemaskini Maklumat Pelajar</h2><br>
                          <label class="control-label">Username <small>(Tidak boleh diubah)</small></label>
                          <input disabled="" id="disabledinput" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $user; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Password</label>
                          <input type="password" name="pass" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $pass; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Nama Penuh</label>
                          <input type="text" name="fname" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $nama; ?>" required>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label">Nombor Matrik <small>tanpa (-)</small></label>
                          <input type="text" name="matrik" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" value="<?php echo $matrik; ?>" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" name="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" value="<?php echo $email; ?>" required>
                        </div>
                        <!-- dropdown menu-->
              
                         
                        <!-- data input for pensyarah / pelajar-->
                        <input type="hidden" name="idk" value="<?php echo $id; ?>">
            <!-- submit and reset-->
                        <div class="form-group">
                          <button type="submit" data-confirm="Kemaskini maklumat?" class="btn btn-primary">Update</button>
                        </div>

                          </fieldset> 
                        </form>
                       </div>

            <div class="clearfix"> </div>
      </div>
    
            

        
  <div class="col_1">
</div>
</div>
      
        <div class="clearfix"> </div>
        </div>
        <div class="copy">
            <p>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin  </p>
        </div>
        </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>