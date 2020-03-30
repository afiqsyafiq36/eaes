<?php
  $namapage = "index.php";
  include "countVisitor.php";
  $access_number = visitor($namapage);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="icon" 
      type="image/png" 
      href="./img/logo.jpg"><title>SISTEM ENTRANCE AND EXIT SURVEY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Palette Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="./palet/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="./palet/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="./palet/css/blast.min.css" rel="stylesheet" />
    <!-- lightbox -->
    <link rel="stylesheet" href="./palet/css/lightbox.min.css">
    <!-- portfolio -->
    <link rel="stylesheet" href="./palet/css/portfolio.css">
    <!-- font-awesome icons -->
    <link href="./palet/css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="blast-box">
        <div class="blast-frame">
            <p>color schemes</p>
            <div class="blast-colors d-flex justify-content-center">
                <div class="blast-color">#3bc7ff</div>
                <div class="blast-color">#feb800</div>
                <div class="blast-color">#f25050</div>
                <div class="blast-color">#18e7d3</div>
                <!-- you can add more colors here -->
            </div>
            <p class="blast-custom-colors">Choose Custom color</p>
            <input type="color" name="blastCustomColor" value="#3bc7ff">

        </div>
        <div class="blast-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>

    </div>
    <div id="home" class="banner" data-blast="bgColor">
        <!-- header -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
            <div class="container">
                <h6 class="wthree-logo">
                    <img src="./img/logo.jpg" alt="Kolej Vokasional Datuk Seri Abu Zahar Isnin" style="width:40px">
                    <a href="index.php" id="logoLink" data-blast="color">KV DATUK SERI ABU ZAHAR ISNIN</a>
                </h6>
                <div class="nav-item  position-relative">
                    <a href="#menu" id="toggle">
                        <span></span>
                    </a>
                    <div id="menu">
                        <ul>
                            <li><a data-blast="color" href="index.php">Home</a></li>
                            <li><a data-blast="color" href="adminlogin.php">Admin Login</a></li>
                            <li><a data-blast="color" href="userlogin.php">User Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- //header -->
        <!-- banner -->
        <div class="container-fluid">
            <div class="row banner-row">
                <div class="col-lg-8 bg-img text-center">
                    <h3 class="agile-title">Entrance And Exit Survey</h3>
                    <div class="bnr-img">
                        <img src="./img/desktop.gif" alt="" class="img-fluid m-auto" />
                    </div>

                </div>
                <div class="col-lg-4  my-auto p-0">

                    <div id="login-row">
                        <h2><b>Selamat Datang</b> ke </h2><br>
                        <div id="login-column">
                            <div class="box">
                                <div class="shape1 shape-bg"></div>
                                <div class="shape2 shape-bg"></div>
                                <div class="shape3 shape-bg"></div>
                                <div class="shape4 shape-bg"></div>
                                <div class="shape5 shape-bg"></div>
                                <div class="shape6 shape-bg"></div>
                                <div class="shape7 shape-bg"></div>
                                <div class="float">
                                        <div class="form-group">
                                          
                                                <strong><h4>SISTEM PENGURUSAN PANGKALAN DATA DAN APLIKASI WEB</h4></strong>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- about -->
    <section class="wthree-row py-sm-5 py-4 about-top" id="about">
       <!-- contact map grid -->
    <div class="map contact-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.539117911288!2d102.4074929147555!3d2.3231375983068756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e76871bc7973%3A0x92161db97fe50090!2sDATUK%20SERI%20ABU%20ZAHAR%20ISNIN%20VOCATIONAL%20COLLEGE!5e0!3m2!1sen!2smy!4v1567857606739!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--//contact map grid -->
    </section>
    
    <!-- footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="agile-title"><a href="index.php" class="text-capitalize" data-blast="color">KV DSAZI</a></h2>
                </div>
                <div class="col-lg-3  mt-lg-0 mt-4">
                    <ul class="list-agileits">
                        <li>
                            <a href="index.php" class="text-secondary">
                                Home
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-lg-0 my-4">
                    <div class="fv3-contact">
                        <span class="fa fa-envelope-open mr-2" data-blast="color"></span>
                        <p>
                           <a href="mailto:kvjasin2014@gmail.com" class="text-secondary">kvjasin2014@gmail.com</a>
                        </p>
                    </div>
                    <div class="fv3-contact my-3">
                        <span class="fa fa-phone mr-2" data-blast="color"></span>
                        <p class="text-secondary">+06-529 1010</p>
                    </div>
                    <div class="fv3-contact">
                        <span class="fa fa-users" data-blast="color"></span>
                        <p class="text-secondary">
                            <?php
                                echo "Jumlah pelawat adalah ".'<br>'."(", $access_number ," orang)";
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <div class="cpy-right text-center py-2" data-blast="bgColor">
        <p class="text-dark">Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin
        </p>
    </div>
    <!-- js -->
    <script src="./palet/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--  menu toggle -->
    <script src="./palet/js/menu.js"></script>
    <!-- color switch -->
    <script src="./palet/js/blast.min.js"></script>
    <!-- light box -->
    <script src="./palet/js/lightbox-plus-jquery.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="./palet/js/scrolling-nav.js"></script>
    <!-- start-smooth-scrolling -->
    <script src="./palet/js/move-top.js"></script>
    <script src="./palet/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="./palet/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./palet/js/bootstrap.js"></script>
</body>

</html>