
<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="./img/logo.jpg">
<title>Administrator Login</title>
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
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>


<body id="login">
  <div class="login-logo">
    <img src="img/logo.jpg" height="151px" width="151px" alt="Kolej Vokasional Datuk Seri Abu Zahar Isnin"/>
  </div>
  <h2 class="form-heading">admin login</h2>
  <div class="app-cam">
    <form action="prosesloginadmin.php" method="post">
    <input class="input-field" type="text" value="<?php if(isset($_COOKIE["admin_login"])) { echo $_COOKIE["admin_login"]; } ?>" placeholder="Username" name="uname" required>
    <input class="input-field" type="password" value="<?php if(isset($_COOKIE["admin_password"])) { echo $_COOKIE["admin_password"]; } ?>" placeholder="Password" name="pass" required>
      <label>
        <input type="checkbox" class="form-group" name="remember" <?php if(isset($_COOKIE["admin_login"])) { ?> checked <?php } ?>> Remember me
      </label> 
    <div class="submit">
      <input type="submit" value="Login">
    </div>
    
    <ul class="new">
      <li class="new_left"><p><a href="index.php">Back</a></p></li>
      <div class="clearfix"></div>
    </ul>
  </form>
  <div class="copy_layout login">
      <p>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin </p>
   </div>
  </div>
   
</body>

</html>
  