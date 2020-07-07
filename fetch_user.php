
<?php

include "sambung.php";
// include "importfungsi.php";
session_start();

   $no = 1; //untuk bilangan data dalam DB
   $kpd = mysqli_query($hubung,"SELECT * FROM user");
   
   // time comparison
   $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 5 second');
   $curr_time = date('Y-m-d H:i:s', $current_timestamp);

while($dataUser = mysqli_fetch_array($kpd)) {
    //online status
    $user_last_activity = $dataUser['last_activity'];

?>                  
                      <tr>
                        <th><center><?php echo $no; ?></center></th>
                        <td><?php echo $dataUser['username']; ?></td>
                        <td><?php echo $dataUser['fullname']; ?></td>
                        <td><?php echo $dataUser['nomatrik']; ?></td>
                        <td><?php echo $dataUser['email']; ?></td>
                        <td><?php echo $dataUser['sesi']; ?></td>
                        <td>
                          <?php
                             if ($dataUser['level'] == '1') {
                               echo $kategori="Pelajar";
                             }
                             else {
                               echo $kategori="Pensyarah";
                             }
                          ?>
                        </td>
                        <td>
                          <?php 
                            if ($user_last_activity > $curr_time) 
                            {
                                echo "<i class=\"fa fa-circle text-success\"></i> Online";
                            }
                            else 
                            {
                                echo "<i class=\"fa fa-circle text-red\"></i> Offline";
                            } 
                          ?>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" title="Edit" data-toggle="modal" id="btnEdit" value="<?php echo $dataUser['id']; ?>" data-target="#myModal<?php echo $dataUser['id']; ?>"><i class="fa fa-pencil"></i></a>
                            &nbsp|&nbsp
                            <a type="submit" data-confirm="Reset katalaluan pengguna?" title="Reset" class="btn btn-sm btn-warning" href="resetuser.php?id_reset=<?php echo $dataUser['id']; ?>"><i class="fa fa-undo"></i></a>
                            &nbsp|&nbsp
                            <a type="submit" data-confirm="Adakah anda betul-betul pasti?" title="Delete" class="btn btn-sm btn-danger" href="deleteuser.php?id_del=<?php echo $dataUser['id']; ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
        <!--modal start-->
        <div class="modal fade" id="#myModal<?php echo $dataUser['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Kemaskini Maklumat Pengguna</h4>
                  </div>
                    <div class="modal-body">
                      <p>
                        <fieldset>
                          
                          <form action="simpaneditadmin2.php" method="post">
                          <?php  
                                   
                                   $papa = $dataUser['id'];
                                    //$pat = "<script>var st= 'id_edit'</script>";
                                    $meka = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$papa'");
                                    while($kpdCourse = mysqli_fetch_array($meka) ) {

                                      $fnameUser = $kpdCourse['fullname'];
                                      $matrikUser = $kpdCourse['nomatrik'];
                                      $emailUser = $kpdCourse['email'];
                                      $sesiUser = $kpdCourse['sesi'];
                                      
                                    }
                          ?>
                           
                              <input type="hidden" name="papa2" value="<?php echo $papa; ?>">

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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data="Simpan Kemaskini?">Save changes</button>
                  </div>
                </form>
                </fieldset>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div> <!--modal end-->

                      </tr>
<?php
$no++;
}
?>
<script>
  $(document).ready(function(){

    
    $('#btnEdit').on('click', function(){
      var id = $(this).val();
      console.log('here');
      $('#myModal').modal('show');
    });
  });  
</script>