
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
                            <a class="btn btn-sm btn-info" title="Edit" data-toggle="modal" id="btnEdit" href="edituser.php?id_edit=<?php echo $dataUser['id']; ?>"><i class="fa fa-pencil"></i></a>
                            &nbsp|&nbsp
                            <button type="submit" id="resetBtn" title="Reset" class="btn btn-sm btn-warning" value="<?php echo $dataUser['id']; ?>"><i class="fa fa-undo"></i></button>
                            &nbsp|&nbsp
                            <button type="submit" id="deleteBtn" title="Delete" class="btn btn-sm btn-danger" value="<?php echo $dataUser['id']; ?>"><i class="fa fa-trash-o"></i></button>
                        </td>
                      </tr>
<?php
$no++;
}
?>
