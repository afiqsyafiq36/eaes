<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="./img/logo.jpg">
<title>Contact Admin</title>
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
	<br><br><br>

  <h2 class="form-heading">Send e-mail to Administrator:</h2>
  <div class="app-cam">
	  <form action="sendmail.php" method="post">

	  	Username:<br>
			<input type="text" class="text" name="uname"><br>

		E-mail:<br>
			<input type="text" class="text" name="mail"><br>

		<label>Subject of email:</label><br>
			<input type="text" class="text" name="subject" id="subject" value="Request Resetting Password" /><br><br><br>

		
		<div class="submit"><input type="submit" value="Hantar"></div>
			<ul class="new">
		      <li class="new_left"><p><a href="index.php">Main Page</a></p></li>
		      <div class="clearfix"></div>
		    </ul>
		
        </div>
	</form>
  </div>
  
</body>
</html>
