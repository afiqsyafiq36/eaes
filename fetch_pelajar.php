
<?php

include "sambung.php";
session_start();

   $no = 1; //untuk bilangan data dalam DB
   $kpd = mysqli_query($hubung,"SELECT * FROM user WHERE level = '1'");
   
   // time comparison
   $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 5 second');
   $curr_time = date('Y-m-d H:i:s', $current_timestamp);

   $jum = mysqli_num_rows($kpd);

while($dataUser = mysqli_fetch_array($kpd)) {
    // Why ?? '': local DB may not have last_activity column yet (PHP 8+ warning)
    $user_last_activity = $dataUser['last_activity'] ?? '';
?>
                    
                      <tr>
                        <th><center><?php echo $no; ?></center></th>
                        <td><?php echo htmlspecialchars($dataUser['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($dataUser['fullname'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($dataUser['nomatrik'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($dataUser['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($dataUser['sesi'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                        <td>
                          <?php 
                            if ($user_last_activity !== '' && $user_last_activity > $curr_time) 
                            {
                                echo "<i class=\"fa fa-circle text-success\"></i> Online";
                            }
                            else 
                            {
                                echo "<i class=\"fa fa-circle text-red\"></i> Offline";
                            } 
                          ?>
                        </td>
                        

                     </tr>

<?php
$no++;
}
?>
                    <tr>
                    	<td colspan="7">Jumlah pelajar : <?php echo $jum; ?> orang</td>
                    </tr>