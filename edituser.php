<?php

include "sambung.php";
include "importfungsi.php";
include "importdesign.php";

$id = $_GET['id_edit'];
?>
<!--modal start-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" onclick="window.location.href='detailuser.php'" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Kemaskini Maklumat Pengguna</h4>
                  </div>
                    <div class="modal-body">
                      <p>
                        <fieldset>
                          
                          <form action="simpaneditadmin2.php" method="post">
                          <?php  
                                   
                                //    $papa = $dataUser['id'];
                                    //$pat = "<script>var st= 'id_edit'</script>";
                                    $rowdata = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");
                                    while($userdetail = mysqli_fetch_array($rowdata) ) {

                                      $fnameUser = $userdetail['fullname'];
                                      $matrikUser = $userdetail['nomatrik'];
                                      $emailUser = $userdetail['email'];
                                      $sesiUser = $userdetail['sesi'];
                                      
                                    }
                          ?>
                           
                              <input type="hidden" name="papa2" value="<?php echo $id; ?>">

                           <!--mula form-->

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
                    <button type="button" class="btn btn-default" onclick="window.location.href='detailuser.php'" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data="Simpan Kemaskini?">Save changes</button>
                  </div>
                </form>
                </fieldset>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div> <!--modal end-->

<script>
  $(document).ready(function(){

    Pace.restart();
    // $('#btnEdit').on('click', function(){
      var id = $(this).val();
      console.log('here');
      $('#myModal').modal('show');
    // });
  });  
</script>