
<?php


include "sambung.php";
include "kiraent.php";
include "kiraext.php";



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Entrance & Exit Survey</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--import head-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini" style="padding:20px;">
<div class="container wrapper">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <!--row-->
      <div class="row">
        <div class="col-md-12">

                 <!-- BOX -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Analisis Entrance & Exit Survey</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

            <center>
                  <h3>Course Entrance And Exit Survey - Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</h3>
                  <h3>Bahagian Pendidikan Teknik Dan Vokasional</h3>
            </center><br>

 <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><?php echo $mata1['kodkursus']; ?></a></li>
              <li><a href="#tab_2" data-toggle="tab"><?php echo $mata2['kodkursus']; ?></a></li>
              <li><a href="#tab_3" data-toggle="tab"><?php echo $mata3['kodkursus']; ?></a></li>
              <li><a href="#tab_4" data-toggle="tab"><?php echo $mata4['kodkursus']; ?></a></li>
              <li><a href="#tab_5" data-toggle="tab"><?php echo $mata5['kodkursus']; ?></a></li>
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
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                    <h4><?php echo $mata3['kodkursus'].' '.$mata3['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                    <h4><?php echo $mata4['kodkursus'].' '.$mata4['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                    <h4><?php echo $mata5['kodkursus'].' '.$mata5['namakursus']; ?></h4>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

        </div>
        <!--end col md-->
      </div>
      <!-- end row-->

    </section>
    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->


<div class='tab_info_1'>
    <canvas id="barChart" ></canvas>
    <div style="display:none">
                <p>

                  <table border="0">

                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata1['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata1['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>
                    </table><br><br>
                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>
                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>

                                  </tr>
                        
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
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
                                    <td><?php echo $mata1['C1S1']; ?></td>
                                    <td><center><?php echo $entA1S1; ?></center></td>
                                    <td><center><?php echo $extA1S1; ?></center></td>
                                  </tr>
                                  <tr>

                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C1S2']; ?></td>
                                    <td><center><?php echo $entA1S2; ?></center></td>
                                    <td><center><?php echo $extA1S2; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>3.</center></td>
                                    <td><?php echo $mata1['C1S3']; ?></td>
                                    <td><center><?php echo $entA1S3; ?></center></td>
                                    <td><center><?php echo $extA1S3; ?></center></td>

                                  </tr>

                                  <!--clo2-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C2S1']; ?></td>
                                    <td><center><?php echo $entA2S1; ?></center></td>
                                    <td><center><?php echo $extA2S1; ?></center></td>
                                  </tr>
                                  <tr>

                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C2S2']; ?></td>
                                    <td><center><?php echo $entA2S2; ?></center></td>
                                    <td><center><?php echo $extA2S2; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>3.</center></td>
                                    <td><?php echo $mata1['C2S3']; ?></td>
                                    <td><center><?php echo $entA2S3; ?></center></td>
                                    <td><center><?php echo $extA2S3; ?></center></td>

                                  </tr>
                                  <!-- CLO3-->

                                  <tr>

                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C3S1']; ?></td>
                                    <td><center><?php echo $entA3S1; ?></center></td>
                                    <td><center><?php echo $extA3S1; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C3S2']; ?></td>
                                    <td><center><?php echo $entA3S2; ?></center></td>
                                    <td><center><?php echo $extA3S2; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>3.</center></td>
                                    <td><?php echo $mata1['C3S3']; ?></td>
                                    <td><center><?php echo $entA3S3; ?></center></td>
                                    <td><center><?php echo $extA3S3; ?></center></td>

                                  </tr>
                                </tbody>
                              </table>
                            </div>

              </p>
    </div>
</div>

<div class='tab_info_2'>
  <canvas id="barChart2" ></canvas>
  <div style="display:none">
                <p>

                  <table border="0">

                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata2['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata2['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>
                    </table><br><br>
                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>
                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>

                                  </tr>
                        
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
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
                                    <td><?php echo $mata2['C1S1']; ?></td>
                                    <td><center><?php echo $entB1S1; ?></center></td>
                                    <td><center><?php echo $extB1S1; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C1S2']; ?></td>
                                    <td><center><?php echo $entB1S2; ?></center></td>
                                    <td><center><?php echo $extB1S2; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>3.</center></td>
                                    <td><?php echo $mata2['C1S3']; ?></td>
                                    <td><center><?php echo $entB1S3; ?></center></td>
                                    <td><center><?php echo $extB1S3; ?></center></td>

                                  </tr>

                                  <!--clo2-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>

                                    <td><center>1.</center></td>

                                    <td><?php echo $mata2['C2S1']; ?></td>

                                    <td><center><?php echo $entB2S1; ?></center></td>

                                    <td><center><?php echo $extB2S1; ?></center></td>
                                  </tr>
                                  <tr>

                                    <td><center>2.</center></td>

                                    <td><?php echo $mata2['C2S2']; ?></td>

                                    <td><center><?php echo $entB2S2; ?></center></td>

                                    <td><center><?php echo $extB2S2; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>3.</center></td>

                                    <td><?php echo $mata2['C2S3']; ?></td>

                                    <td><center><?php echo $entB2S3; ?></center></td>

                                    <td><center><?php echo $extB2S3; ?></center></td>


                                  </tr>
                                  <!-- CLO3-->

                                  <tr>

                                    <td rowspan="3"><center><br><br>CLO3</center></td>

                                    <td><center>1.</center></td>

                                    <td><?php echo $mata2['C3S1']; ?></td>

                                    <td><center><?php echo $entB3S1; ?></center></td>

                                    <td><center><?php echo $extB3S1; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>2.</center></td>

                                    <td><?php echo $mata2['C3S2']; ?></td>

                                    <td><center><?php echo $entB3S2; ?></center></td>

                                    <td><center><?php echo $extB3S2; ?></center></td>

                                  </tr>
                                  <tr>

                                    <td><center>3.</center></td>

                                    <td><?php echo $mata2['C3S3']; ?></td>

                                    <td><center><?php echo $entB3S3; ?></center></td>

                                    <td><center><?php echo $extB3S3; ?></center></td>

                                  </tr>
                                </tbody>
                              </table>
                            </div>

              </p>
  </div>
</div>
<div class='tab_info_3'>
  <canvas id="barChart3" ></canvas>
  <div style="display:none">
              <p>
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata3['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata3['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
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
                                    <td><?php echo $mata3['C1S1']; ?></td>
                                    <td><center><?php echo $entC1S1; ?></center></td>
                                    <td><center><?php echo $extC1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C1S2']; ?></td>
                                    <td><center><?php echo $entC1S2; ?></center></td>
                                    <td><center><?php echo $extC1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata3['C1S3']; ?></td>
                                    <td><center><?php echo $entC1S3; ?></center></td>
                                    <td><center><?php echo $extC1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C2S1']; ?></td>
                                    <td><center><?php echo $entC2S1; ?></center></td>
                                    <td><center><?php echo $extC2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C2S2']; ?></td>
                                    <td><center><?php echo $entC2S2; ?></center></td>
                                    <td><center><?php echo $extC2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata3['C2S3']; ?></td>
                                    <td><center><?php echo $entC2S3; ?></center></td>
                                    <td><center><?php echo $extC2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C3S1']; ?></td>
                                    <td><center><?php echo $entC3S1; ?></center></td>
                                    <td><center><?php echo $extC3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C3S2']; ?></td>
                                    <td><center><?php echo $entC3S2; ?></center></td>
                                    <td><center><?php echo $extC3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata3['C3S3']; ?></td>
                                    <td><center><?php echo $entC3S3; ?></center></td>
                                    <td><center><?php echo $extC3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
            </p>  
  </div>
</div>
<div class='tab_info_4'>
  <canvas id="barChart4" ></canvas>
  <div style="display:none">
            <p>
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata4['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata4['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
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
                                    <td><?php echo $mata4['C1S1']; ?></td>
                                    <td><center><?php echo $entD1S1; ?></center></td>
                                    <td><center><?php echo $extD1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C1S2']; ?></td>
                                    <td><center><?php echo $entD1S2; ?></center></td>
                                    <td><center><?php echo $extD1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata4['C1S3']; ?></td>
                                    <td><center><?php echo $entD1S3; ?></center></td>
                                    <td><center><?php echo $extD1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C2S1']; ?></td>
                                    <td><center><?php echo $entD2S1; ?></center></td>
                                    <td><center><?php echo $extD2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C2S2']; ?></td>
                                    <td><center><?php echo $entD2S2; ?></center></td>
                                    <td><center><?php echo $extD2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata4['C2S3']; ?></td>
                                    <td><center><?php echo $entD2S3; ?></center></td>
                                    <td><center><?php echo $extD2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C3S1']; ?></td>
                                    <td><center><?php echo $entD3S1; ?></center></td>
                                    <td><center><?php echo $extD3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C3S2']; ?></td>
                                    <td><center><?php echo $entD3S2; ?></center></td>
                                    <td><center><?php echo $extD3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata4['C3S3']; ?></td>
                                    <td><center><?php echo $entD3S3; ?></center></td>
                                    <td><center><?php echo $extD3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
            </p>
  </div>
</div>
<div class='tab_info_5'>
  <canvas id="barChart5" ></canvas>
  <div style="display:none">
            <p>
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata5['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata5['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
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
                                    <td><?php echo $mata5['C1S1']; ?></td>
                                    <td><center><?php echo $entE1S1; ?></center></td>
                                    <td><center><?php echo $extE1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C1S2']; ?></td>
                                    <td><center><?php echo $entE1S2; ?></center></td>
                                    <td><center><?php echo $extE1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata5['C1S3']; ?></td>
                                    <td><center><?php echo $entE1S3; ?></center></td>
                                    <td><center><?php echo $extE1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C2S1']; ?></td>
                                    <td><center><?php echo $entE2S1; ?></center></td>
                                    <td><center><?php echo $extE2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C2S2']; ?></td>
                                    <td><center><?php echo $entE2S2; ?></center></td>
                                    <td><center><?php echo $extE2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata5['C2S3']; ?></td>
                                    <td><center><?php echo $entE2S3; ?></center></td>
                                    <td><center><?php echo $extE2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C3S1']; ?></td>
                                    <td><center><?php echo $entE3S1; ?></center></td>
                                    <td><center><?php echo $extE3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C3S2']; ?></td>
                                    <td><center><?php echo $entE3S2; ?></center></td>
                                    <td><center><?php echo $extE3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata5['C3S3']; ?></td>
                                    <td><center><?php echo $entE3S3; ?></center></td>
                                    <td><center><?php echo $extE3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
            </p>
  </div>
</div>
<!--tamat tab-->
  


  <footer class="main-footer" style='margin-top:30px;'>
    <div class="pull-right hidden-xs">
      <b>Version</b> 2
    </div>
    <strong>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin</strong> Editor @afiqsyafiq36.
  </footer>

</div>
<!-- ./wrapper -->

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.js"></script>
<script>
  $(function () {
    
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
//chart 1
//Papar grafdka4213
     var yg1 = "<?php echo $entk14213 ?>";
     var yg2 = "<?php echo $entk24213 ?>";
     var yg3 = "<?php echo $entk34213 ?>";
     var yg4 = "<?php echo $extk14213 ?>";
     var yg5 = "<?php echo $extk24213 ?>";
     var yg6 = "<?php echo $extk34213 ?>";

    var areaChartData = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Entrance Survey',
          fillColor           : '#ef553a',
          strokeColor         : '#ef553a',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [yg1,yg2,yg3]
        },
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [yg4,yg5,yg6]
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)


//chart 2
//Papar grafdka4223
var sg1 = "<?php echo $entk14223 ?>";
var sg2 = "<?php echo $entk24223 ?>";
var sg3 = "<?php echo $entk34223 ?>";
var sg4 = "<?php echo $extk14223 ?>";
var sg5 = "<?php echo $extk24223 ?>";
var sg6 = "<?php echo $extk34223 ?>";

    var areaChartData2 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Entrance Survey',
          fillColor           : '#ef553a',
          strokeColor         : '#ef553a',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [sg1,sg2,sg3]
        },
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [sg4,sg5,sg6]
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart2').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData2
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    //chart 3
//Papar grafdka4033
var vp1 = "<?php echo $entk14033 ?>";
var vp2 = "<?php echo $entk24033 ?>";
var vp3 = "<?php echo $entk34033 ?>";                            
var vp4 = "<?php echo $extk14033 ?>";                              
var vp5 = "<?php echo $extk24033 ?>";
var vp6 = "<?php echo $extk34033 ?>";

    var areaChartData3 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Entrance Survey',
          fillColor           : '#ef553a',
          strokeColor         : '#ef553a',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [vp1,vp2,vp3]
        },
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [vp4,vp5,vp6]
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart3').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData3
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

//chart 4
//Papar grafdka4043
var st1 = "<?php echo $entk14043 ?>";
var st2 = "<?php echo $entk24043 ?>";
var st3 = "<?php echo $entk34043 ?>";
var st4 = "<?php echo $extk14043 ?>";
var st5 = "<?php echo $extk24043 ?>";
var st6 = "<?php echo $extk34043 ?>";

    var areaChartData4 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Entrance Survey',
          fillColor           : '#ef553a',
          strokeColor         : '#ef553a',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [st1,st2,st3]
        },
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [st4,st5,st6]
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart4').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData4
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

//chart 5
//Papar grafdka4054
var sp1 = "<?php echo $entk14054 ?>";
var sp2 = "<?php echo $entk24054 ?>";
var sp3 = "<?php echo $entk34054 ?>";
var sp4 = "<?php echo $extk14054 ?>";
var sp5 = "<?php echo $extk24054 ?>";
var sp6 = "<?php echo $extk34054 ?>";

    var areaChartData5 = {
      labels  : ["CLO1","CLO2","CLO3"],
      datasets: [
        {
          label               : 'Entrance Survey',
          fillColor           : '#ef553a',
          strokeColor         : '#ef553a',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [sp1,sp2,sp3]
        },
        {
          label               : 'Exit Survey',
          fillColor           : "#030ffc",
          strokeColor         : "#030ffc",
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [sp4,sp5,sp6]
        }

      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart5').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData5
    barChartData.datasets[1].fillColor   = '#030ffc'
    barChartData.datasets[1].strokeColor = '#030ffc'
    barChartData.datasets[1].pointColor  = '#030ffc'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    $("[class^=tab_info_]").not('.tab_info_1').hide()
    $("[class^=tab_info_]>div").show()

    $('a[href="#tab_1"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_1").show()
    });

    $('a[href="#tab_2"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_2").show()
    });

    $('a[href="#tab_3"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_3").show()
    });

    $('a[href="#tab_4"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_4").show()
    });

    $('a[href="#tab_5"]').on('shown.bs.tab', function(){
        $("[class^=tab_info_]").hide()
        $(".tab_info_5").show()
    });
    })
</script>


</body>
</html>