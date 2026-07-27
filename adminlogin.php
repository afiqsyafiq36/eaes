<?php
session_start();
$flash_message = isset($_SESSION['reset_flash']) ? $_SESSION['reset_flash'] : '';
$flash_type = isset($_SESSION['reset_flash_type']) ? $_SESSION['reset_flash_type'] : 'info';
unset($_SESSION['reset_flash'], $_SESSION['reset_flash_type']);

$saved_username = isset($_COOKIE['admin_login']) ? $_COOKIE['admin_login'] : '';
?>
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
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<script src="js/bootstrap.min.js"></script>
<style>
.reset-flash{padding:12px 14px;margin:0 0 1em 0;border-radius:2px;font-size:13px;line-height:1.4;text-align:left}
.reset-flash.success{background:rgba(6,217,149,.18);border-left:3px solid #06d995;color:#0a5c42}
.reset-flash.error{background:rgba(220,53,69,.12);border-left:3px solid #dc3545;color:#842029}
.password-wrap{position:relative;margin:0 0 1em 0}
.password-wrap .input-field{margin-bottom:0 !important;padding-right:44px}
.password-toggle{
	position:absolute;right:10px;top:50%;transform:translateY(-50%);
	background:none;border:none;color:#999;cursor:pointer;padding:6px;line-height:1;
}
.password-toggle:hover,.password-toggle:focus{color:#06d995;outline:none}
</style>
</head>


<body id="login">
  <div class="login-logo">
    <img src="img/logo.jpg" height="151px" width="151px" alt="Kolej Vokasional Datuk Seri Abu Zahar Isnin"/>
  </div>
  <h2 class="form-heading">admin login</h2>
  <div class="app-cam">
    <?php if ($flash_message !== '') { ?>
      <div class="reset-flash <?php echo htmlspecialchars($flash_type, ENT_QUOTES, 'UTF-8'); ?>">
        <?php echo htmlspecialchars($flash_message, ENT_QUOTES, 'UTF-8'); ?>
      </div>
    <?php } ?>
    <form action="prosesloginadmin.php" method="post" autocomplete="on">
    <input class="input-field" type="text" name="uname" placeholder="Username" required
      value="<?php echo htmlspecialchars($saved_username, ENT_QUOTES, 'UTF-8'); ?>">

    <div class="password-wrap">
      <input class="input-field" id="adminLoginPass" type="password" name="pass" placeholder="Password" required autocomplete="current-password">
      <button type="button" class="password-toggle" id="adminTogglePass" aria-label="Tunjuk atau sembunyikan kata laluan" tabindex="0">
        <i class="fa fa-eye" id="adminTogglePassIcon" aria-hidden="true"></i>
      </button>
    </div>

      <label>
        <input type="checkbox" class="form-group" name="remember" <?php if ($saved_username !== '') { ?> checked <?php } ?>> Remember me
      </label>
    <div class="submit">
      <input type="submit" value="Login">
    </div>

    <ul class="new">
      <li class="new_left"><p><a href="forgotpassword.php?type=admin">Forgot Password ?</a></p></li>
      <li class="new_right"><p><a href="index.php">Back</a></p></li>
      <div class="clearfix"></div>
    </ul>
  </form>
  <div class="copy_layout login">
      <p>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin </p>
   </div>
  </div>

<script>
(function () {
  var toggleBtn = document.getElementById('adminTogglePass')
  var passInput = document.getElementById('adminLoginPass')
  var icon = document.getElementById('adminTogglePassIcon')
  if (!toggleBtn || !passInput || !icon) return

  var handleToggle = function () {
    if (passInput.type === 'password') {
      passInput.type = 'text'
      icon.className = 'fa fa-eye-slash'
      toggleBtn.setAttribute('aria-label', 'Sembunyikan kata laluan')
    } else {
      passInput.type = 'password'
      icon.className = 'fa fa-eye'
      toggleBtn.setAttribute('aria-label', 'Tunjuk kata laluan')
    }
  }

  toggleBtn.addEventListener('click', handleToggle)
  toggleBtn.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault()
      handleToggle()
    }
  })
})()
</script>
</body>

</html>
