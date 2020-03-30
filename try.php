<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
  header("location:adminlogin.php");
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
  <title>Total Survey</title>

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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->


<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>

<!-- css table middle td-->
<link href="style/table.css" rel="stylesheet">

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
            <li class="m_2"><a href="profileadmin.php"><i class="fa fa-user"></i> Profile</a></li>
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
 <!--script untuk yes or no box-->
<script>
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
</script> 

        <div id="page-wrapper">
        <div class="graphs">
        <div class="graph_box">
          <!--title-->
            <div class="grid_3 grid_5">
                <div class="but_list">
                        <ol class="breadcrumb">
                          <li class="active">Analisis</li>
                          <li>Total Survey</li>
                          <li><a href="total.php">Entrance Survey</a></li>
                        </ol>
               </div>

               <!-- Analisis jadual-->

                <div class="content_bottom">
                 <div class="col-md-13 span_7">

                          <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                             <div class="panel-body no-padding">
                               <table class="table table-striped">
                                     <thead>
                                        <tr class="warning">
                                          <td>Kod Kursus</td>
                                          <td>Nama</td>
                                          <td>Tarikh Dihantar</td>
                                          <td>Tindakan</td>
                                        </tr>
                                      </thead>
<?php

    //Buat paparan Entrance yang telah disubmit
   $no = 1; //untuk bilangan data dalam DB
   $ent = mysqli_query($hubung,"SELECT idEnt,kodkursus,fullname,ent_tarikh FROM entrance");
   $kira = mysqli_num_rows($ent);

while($info = mysqli_fetch_array($ent)) {
     

?>
                                        <tbody>
                                        <tr>
                                          <td><?php echo $info['kodkursus']; ?></td>
                                          <td><?php echo $info['fullname']; ?></td>
                                          <td><?php echo $info['ent_tarikh']; ?></td>
                                          <td><a type="submit" data-confirm="Data yang dipadam tidak akan kembali!" class="btn btn-sm btn-danger" href="deletesurvey1.php?id_delete=<?php echo $info['idEnt']; ?>"><i class="fa fa-trash-o"></i></a></td>
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
                               </div>
          </div>
          <!--tutp table-->

          <!-- pagination-->
                    <ul class="pagination pagination-sm" >
                          <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                          <li class="active"><a href="total.php">1</a></li>
                          <li><a href="total2.php">2</a></li>
                          <li><a href="total2.php"><i class="fa fa-angle-right"></i></a></li>
                    </ul>


            <div class="clearfix"> </div>
      </div>

            

        
  <div class="col_1">
</div>

<!-- borang form -->
    
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
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
           <div class="panel-body no-padding">
             <table class="table table-striped">
                                     <thead>
                                        <tr class="warning">
                                          <td>Kod Kursus</td>
                                          <td>Nama</td>
                                          <td>Tarikh Dihantar</td>
                                        </tr>
                                      </thead>
<?php

    //Buat paparan Entrance yang telah disubmit
   $no = 1; //untuk bilangan data dalam DB
   $ent = mysqli_query($hubung,"SELECT kodkursus,fullname,ent_tarikh FROM entrance");
   $kira = mysqli_num_rows($ent);

while($info = mysqli_fetch_array($ent)) {
     

?>
                                        <tbody>
                                        <tr>
                                          <td><?php echo $info['kodkursus']; ?></td>
                                          <td><?php echo $info['fullname']; ?></td>
                                          <td><?php echo $info['ent_tarikh']; ?></td>
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
                               </div>
          </div>




          <div class="form-group">
                          <!-- button example -->
                            <button type="button" data-confirm="Are you sure you want to click the button?">Update</button>
                        </div>
                        <script>
                            $(document).on('click', ':not(form)[data-confirm]', function(e){
                              if(!confirm($(this).data('confirm'))){
                                e.stopImmediatePropagation();
                                e.preventDefault();
                              }
                          });
                        </script>



                        <!--untuk graf-->

                         <h3>Tab Kursus.</h3>

         <div class="but_list">
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

            <ul id="myTab" class="nav nav-tabs" role="tablist" >

              <li role="presentation">
                <a href="#dka4213" id="dka4213-tab" role="tab" data-toggle="tab" aria-controls="dka4213" aria-expanded="true"><?php echo $mata1['kodkursus']; ?></a>
              </li>

              <li role="presentation" >
                <a href="#dka4223" role="tab" id="dka4223-tab" data-toggle="tab" aria-controls="dka4223"><?php echo $mata2['kodkursus']; ?></a>
              </li>

              <li role="presentation">
                <a href="#dka4033" role="tab" id="dka4033-tab" data-toggle="tab" aria-controls="dka4033"><?php echo $mata3['kodkursus']; ?></a>
              </li>

              <li role="presentation">
                <a href="#dka4043" role="tab" id="dka4043-tab" data-toggle="tab" aria-controls="dka4043"><?php echo $mata4['kodkursus']; ?></a>
              </li>
              <li role="presentation">
                <a href="#dka4054" role="tab" id="dka4054-tab" data-toggle="tab" aria-controls="dka4054"><?php echo $mata5['kodkursus']; ?></a>
              </li>

            </ul>
         <!--tab content-->

        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade" id="dka4213" aria-labelledby="dka4213-tab">

            <!-- tab 4213-->
              <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Entrance Survey <?php echo $mata1['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
              </p>
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4223" aria-labelledby="dka4223-tab">

            <!-- tab 4223-->
              <p>
                          <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Entrance Survey <?php echo $mata2['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar2" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
              </p>
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4033" aria-labelledby="dka4033-tab">
            <!-- tab 4033-->
            <p>
                    <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Entrance Survey <?php echo $mata3['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar3" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4043" aria-labelledby="dka4043-tab">
            <!-- tab 4033-->
            <p>
                    <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Entrance Survey <?php echo $mata4['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar4" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                            </center>
                          </div>
                        </div>
                        </div>
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4054" aria-labelledby="dka4054-tab">
            <!-- tab 4033-->
            <p>
                    <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Entrance Survey <?php echo $mata5['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar5" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
            </p>
          </div>

        </div>
   </div>
   </div>
    <script>
   
                  
     //Papar grafdka4213
                              var yg = "<?php echo $c14213 ?>";
                              var yg2 = "<?php echo $c24213 ?>";
                              var yg3 = "<?php echo $c34213 ?>";
                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#ef553a",
                                    strokeColor : "#ef553a",
                                    data : [yg,yg2,yg3]
                                  },
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
          //graf dka4223

                var y1 = "<?php echo $c14223 ?>";
                var y2 = "<?php echo $c24223 ?>";
                var y3 = "<?php echo $c34223 ?>";
                //nilai x adalah auto 
                 var barChartData = {
                  labels : ["CLO1","CLO2","CLO3"],//nilai y
                  datasets : [
                    {
                      fillColor : "#ef553a",
                      strokeColor : "#ef553a",
                      data : [y1,y2,y3]
                    },
                  ]
                  
                };
              //call graf
              new Chart(document.getElementById("bar2").getContext("2d")).Bar(barChartData);

          //graf dka4033
          //Papar graf
            var s1 = "<?php echo $c14033 ?>";
            var s2 = "<?php echo $c24033 ?>";
            var s3 = "<?php echo $c34033 ?>";
            //nilai x adalah auto 
             var barChartData = {
              labels : ["CLO1","CLO2","CLO3"],//nilai y
              datasets : [
                {
                  fillColor : "#ef553a",
                  strokeColor : "#ef553a",
                  data : [s1,s2,s3]
                },
              ]
              
            };
          //call graf
          new Chart(document.getElementById("bar3").getContext("2d")).Bar(barChartData);
          //graf dka4043
          //Papar graf
            var lg1 = "<?php echo $c14043 ?>";
            var lg2 = "<?php echo $c24043 ?>";
            var lg3 = "<?php echo $c34043 ?>";
            //nilai x adalah auto 
             var barChartData = {
              labels : ["CLO1","CLO2","CLO3"],//nilai y
              datasets : [
                {
                  fillColor : "#ef553a",
                  strokeColor : "#ef553a",
                  data : [lg1,lg2,lg3]
                },
              ]
              
            };
          //call graf
          new Chart(document.getElementById("bar4").getContext("2d")).Bar(barChartData);
          //graf dka4054
          //Papar graf
            var d1 = "<?php echo $c14054 ?>";
            var d2 = "<?php echo $c24054 ?>";
            var d3 = "<?php echo $c34054 ?>";
            //nilai x adalah auto 
             var barChartData = {
              labels : ["CLO1","CLO2","CLO3"],//nilai y
              datasets : [
                {
                  fillColor : "#ef553a",
                  strokeColor : "#ef553a",
                  data : [d1,d2,d3]
                },
              ]
              
            };
          //call graf
          new Chart(document.getElementById("bar5").getContext("2d")).Bar(barChartData);


            
</script>



<!-- table kursus-->
<!-- graf  bar-->
          <!-- tab kursus-->
    
      

   

  

                        <!-- table kiraan min & avg-->
                        <h3>Analisis Entrance Survey</h3>
                        <form action="ent.php" method="post">
                        <!--pilih dropdown kursus by data in table-->
                            <?php
                              include "sambung.php";
                               //query
                              $sql = mysqli_query($hubung,"SELECT * FROM kursus");
                              if(mysqli_num_rows($sql)){
                              $select = 
                              '<select  name="kursus" id="mySelect" onchange="showCourse()">

                                    <option value="">Pilih Kursus Anda</option>';//default menu

                              while($rs = mysqli_fetch_array($sql)){
                                    $select.='<option value="'.$rs['kodkursus'].'">'.$rs['kodkursus'].' '.$rs['namakursus'].'</option>';
                                }
                              }
                              $select.='</select>';
                              echo $select;

                              ?>
                        <br><br>
<!-- script menu onchange dropdown menu kursus-->
<script>
function showCourse() {

  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = x;

  if ( x == "<?php echo $sembilan['kodkursus']; ?>") {

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata1['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata1['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata1['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata1['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata1['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata1['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata1['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata1['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata1['C3S3'] ?>";
      
      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14213 ?>";
      document.getElementById("min1").innerHTML="<?php echo $A1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $A1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $A1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24213 ?>";
      document.getElementById("min4").innerHTML="<?php echo $A2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $A2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $A2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34213 ?>";
      document.getElementById("min7").innerHTML="<?php echo $A3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $A3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $A3S3 ?>";

      
  }
  else if (x == "<?php echo $sepuluh['kodkursus']; ?>") {
     
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata2['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata2['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata2['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata2['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata2['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata2['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata2['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata2['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata2['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14223 ?>";
      document.getElementById("min1").innerHTML="<?php echo $B1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $B1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $B1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24223 ?>";
      document.getElementById("min4").innerHTML="<?php echo $B2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $B2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $B2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34223 ?>";
      document.getElementById("min7").innerHTML="<?php echo $B3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $B3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $B3S3 ?>";




  }
  else if (x == "<?php echo $sebelas['kodkursus']; ?>") {
      
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata3['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata3['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata3['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata3['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata3['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata3['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata3['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata3['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata3['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14033 ?>";
      document.getElementById("min1").innerHTML="<?php echo $C1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $C1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $C1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24033 ?>";
      document.getElementById("min4").innerHTML="<?php echo $C2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $C2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $C2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34033 ?>";
      document.getElementById("min7").innerHTML="<?php echo $C3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $C3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $C3S3 ?>";

      
  }
  else if (x == "<?php echo $duabelas['kodkursus']; ?>") {
     
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata4['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata4['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata4['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata4['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata4['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata4['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata4['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata4['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata4['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14043 ?>";
      document.getElementById("min1").innerHTML="<?php echo $D1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $D1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $D1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24043 ?>";
      document.getElementById("min4").innerHTML="<?php echo $D2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $D2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $D2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34043 ?>";
      document.getElementById("min7").innerHTML="<?php echo $D3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $D3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $D3S3 ?>";

      
  }
  else if (x == "<?php echo $tigabelas['kodkursus']; ?>") {
      
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata5['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata5['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata5['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata5['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata5['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata5['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata5['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata5['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata5['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14054 ?>";
      document.getElementById("min1").innerHTML="<?php echo $E1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $E1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $E1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24054 ?>";
      document.getElementById("min4").innerHTML="<?php echo $E2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $E2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $E2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34054 ?>";
      document.getElementById("min7").innerHTML="<?php echo $E3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $E3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $E3S3 ?>";

      
  }
  else {

      //By default 
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="";
      document.getElementById("c1s2").innerHTML="";
      document.getElementById("c1s3").innerHTML="";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="";
      document.getElementById("c2s2").innerHTML="";
      document.getElementById("c2s3").innerHTML="";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="";
      document.getElementById("c3s2").innerHTML="";
      document.getElementById("c3s3").innerHTML="";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="";
      document.getElementById("min1").innerHTML="";
      document.getElementById("min2").innerHTML="";
      document.getElementById("min3").innerHTML="";

      document.getElementById("avg2").innerHTML="";
      document.getElementById("min4").innerHTML="";
      document.getElementById("min5").innerHTML="";
      document.getElementById("min6").innerHTML="";

      document.getElementById("avg3").innerHTML="";
      document.getElementById("min7").innerHTML="";
      document.getElementById("min8").innerHTML="";
      document.getElementById("min9").innerHTML="";

      
  }

}
</script>

<!-- //script-->

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                Kursus :<p id="demo"></p>
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
                                    </b>
                                  </tr>

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->


                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c1s1"></td>
                                    <td id="min1"><center></center></td>
                                    <td rowspan="3" id="avg1" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c1s2"></td>
                                    <td id="min2"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c1s3"></td>
                                    <td id="min3"><center></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c2s1"></td>
                                    <td id="min4"><center></center></td>
                                    <td rowspan="3" id="avg2" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c2s2"></td>
                                    <td id="min5"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c2s3"></td>
                                    <td id="min6"><center></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c3s1"></td>
                                    <td id="min7"><center></center></td>
                                    <td rowspan="3" id="avg3" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c3s2"></td>
                                    <td id="min8"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c3s3"></td>
                                    <td id="min9"><center></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                      </form>
                      <button onclick="myFunction()" class="btn btn-primary">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>



<!-- START CUSTOM TABS -->
      <h2 class="page-header">AdminLTE Custom Tabs</h2>

      <div class="row">
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Course Detail</a></li>
              <li><a href="#tab_2" data-toggle="tab">Course Outcome</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <p>
                    <div class="form-group">
                          <h2>Maklumat Kursus</h2><br>
                          <label class="control-label">Kod Kursus <small>*Tanpa jarak</small></label>
                          <input type="text" name="kodkursus" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Nama Kursus</label>
                          <input type="text" name="namakursus" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
                        </div>

                        <div class="form-group">
                          <label for="semester">Semester</label>
                            <select id="Semester" name="semester" class="form-control1 ng-invalid ng-invalid-required" required>
                            <option value="">Sila pilih semester</option>
                            <option value="DVM1">1 Diploma</option>
                            <option value="DVM2">2 Diploma</option>
                            <option value="DVM3">3 Diploma</option>
                            <option value="DVM4">4 Diploma</option>
                         </select>
                        </div>

                        <!-- text area-->

                        <div class="form-group">
                          <label for="Keterangan" class="control-label">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Maklumat atau penerangan ringkas tentang kursus tersebut." required>
                        </div><br><br>
                        <b>* Sila isi borang Course Detail dan Course Outcome</b>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <p>
                        <div class="form-group">
                            <h2>Hasil Pembelajaran Kursus</h2><br>
                          <label class="control-label"><strong>CLO 1</strong></label>
                          <input type="text" name="clo1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Course Learning Outcome 1" required><br><br>

                          <input type="text" name="c1s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 1" required><br><br>

                          <input type="text" name="c1s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 2" required><br><br>

                          <input type="text" name="c1s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 3" required>
                        </div>

                        <!-- SOALAN -->
                        

                        <div class="form-group">
                          <label class="control-label"><strong>CLO 2</strong></label>
                          <input type="text" name="clo2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Course Learning Outcome 2" required><br><br>

                          <input type="text" name="c2s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 1" required><br><br>

                          <input type="text" name="c2s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 2" required><br><br>

                          <input type="text" name="c2s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 3" required>
                        </div>


                        <!-- SOALAN-->

                        <div class="form-group">
                          <label class="control-label"><strong>CLO 3</strong></label>
                          <input type="text" name="clo3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Course Learning Outcome 3" required><br><br>

                          <input type="text" name="c3s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 1" required><br><br>

                          <input type="text" name="c3s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 2" required><br><br>

                          <input type="text" name="c3s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 3" required>
                        </div>

                        <!--submit-->

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                </p>
              </div>
              <!-- /.tab-pane -->
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Tab 1</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Tab 2</a></li>
              <li><a href="#tab_3-2" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> Custom Tabs</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->





      <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Maklumat Kursus</a></li>
              <li><a href="#tab_2" data-toggle="tab">Hasil Pembelajaran Kursus</a></li>
              <li class="pull-right"><a href="detailcourse.php" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                    <h4><?php echo $mata1['kodkursus'].' '.$mata1['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                    <h4><?php echo $mata2['kodkursus'].' '.$mata2['namakursus']; ?></h4>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

        <div class='tab_info_1'>
            
        </div>

        <div class='tab_info_2'>
                    
        </div>
        <!--tamat tab-->syafiq
        


        <table id="example1" class="table table-bordered table-striped">
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
                    <tbody>
    

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kursuskita = mysqli_query($hubung,"SELECT * FROM kursus");

while($dataGuna = mysqli_fetch_array($kursuskita)) {
     

?>
                    
                      <tr>
                        <th><?php echo $no; ?></th>
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
                                <label class="control-label">Kod Kursus <small>*Tanpa jarak</small></label>
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
                          <div class="form-group">
                                  <h2>Hasil Pembelajaran Kursus</h2><br>
                                <label class="control-label"><strong>CLO 1</strong></label>
                                <input type="text" name="clo1" class="form-control" value="<?php echo $cl1; ?>" placeholder="Course Learning Outcome 1" required><br><br>

                                <input type="text" name="c1s1" class="form-control" value="<?php echo $cl1s1; ?>" placeholder="Soalan 1" required><br><br>

                                <input type="text" name="c1s2" class="form-control" value="<?php echo $cl1s2; ?>" placeholder="Soalan 2" required><br><br>

                                <input type="text" name="c1s3" class="form-control" value="<?php echo $cl1s3; ?>" placeholder="Soalan 3" required><br><br>

                                <!--clo2-->
                                <label class="control-label"><strong>CLO 2</strong></label>
                                <input type="text" name="clo2" class="form-control" value="<?php echo $cl2; ?>" placeholder="Course Learning Outcome 2" required><br><br>

                                <input type="text" name="c2s1" class="form-control" value="<?php echo $cl2s1; ?>" placeholder="Soalan 1" required><br><br>

                                <input type="text" name="c2s2" class="form-control" value="<?php echo $cl2s2; ?>" placeholder="Soalan 2" required><br><br>

                                <input type="text" name="c2s3" class="form-control" value="<?php echo $cl2s3; ?>" placeholder="Soalan 3" required><br><br>

                                <!--clo3-->
                                <label class="control-label"><strong>CLO 3</strong></label>
                                <input type="text" name="clo3" class="form-control" value="<?php echo $cl3; ?>" placeholder="Course Learning Outcome 3" required><br><br>

                                <input type="text" name="c3s1" class="form-control" value="<?php echo $cl3s1; ?>" placeholder="Soalan 1" required><br><br>

                                <input type="text" name="c3s2" class="form-control" value="<?php echo $cl3s2; ?>" placeholder="Soalan 2" required><br><br>

                                <input type="text" name="c3s3" class="form-control" value="<?php echo $cl3s3; ?>" placeholder="Soalan 3" required>
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


<table id="example1" class="table table-bordered table-striped">
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
                    <tbody>
    

<?php
   $no = 1; //untuk bilangan data dalam DB
   $kpd = mysqli_query($hubung,"SELECT * FROM user");

while($dataUser = mysqli_fetch_array($kpd)) {
     

?>
                    
                      <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $dataUser['username']; ?></td>
                        <td><?php echo $dataUser['fullname']; ?></td>
                        <td><?php echo $dataUser['nomatrik']; ?></td>
                        <td><?php echo $dataUser['email']; ?></td>
                        <td><?php echo $dataUser['sesi']; ?></td>
                        <td>
                          <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal<?php echo $dataUser['id']; ?>"><i class="fa fa-pencil"></i>
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
                          <input type="password" name="pass" class="form-control" value="<?php echo $passUser; ?>" required>
                        </div>

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
                    <a type="submit" data-confirm="Adakah anda betul-betul pasti?" class="btn btn-sm btn-danger" href="deleteadmin.php?id_del=<?php echo $dataUser['id']; ?>"><i class="fa fa-trash-o"></i></a>
                  </td>

                      </tr>
                    
<?php
$no++;
}
?>
                   </tbody>
                  </table>