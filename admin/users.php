<?php include_once 'header.php';?>
<?php include_once 'aside.php';

// Active User
if(isset($_POST['active_user']))
{
   $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
   mysqli_query($conn, "UPDATE `users` SET `status`='1' WHERE `id`='$user_id'");
}

// Block User
if(isset($_POST['block_user']))
{
   $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
   mysqli_query($conn, "UPDATE `users` SET `status`='0' WHERE `id`='$user_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Users</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>username</th>
                                       <th>email</th>
                                       <th>Join date</th>
                                       <th>active</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `users` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);
                                    
                                    if(mysqli_num_rows($fire) > 0)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td class="serial">'.$row['id'].'</td>';
                                          $html .='<td>'.$row['username'].'</td>';
                                          $html .='<td>'.$row['email'].'</td>';
                                          $html .='<td>'.$row['join_date'].'</td>';
                                          $html .='<td>';
                                          if($row['status'] == '1')
                                          {
                                             $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                             $html .='<input type="hidden" name="user_id" value="'.$row['id'].'">';
                                             $html .='<button type="submit" name="block_user" class="btn btn-light btn-sm">Block</button>';
                                             $html .='</form>';
                                          }
                                          else
                                          {
                                             $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                             $html .='<input type="hidden" name="user_id" value="'.$row['id'].'">';
                                             $html .='<button type="submit" name="active_user" class="btn btn-info btn-sm">Active</button>';
                                             $html .='</form>';
                                          }
                                          $html .='</td>';
                                          $html .='<td>';
                                          $html .='<form method="POST" action="delete_user.php">';
                                          $html .='<input type="hidden" name="user_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="del_user" class="btn btn-danger btn-sm">Delete</button>';
                                          $html .='</form>';
                                          $html .='</td>';
                                          $html .='</tr>';
                                       }
                                       echo $html;
                                    }                       
                                    ?>
                                    <!-- <tr>
                                       <td class="serial">1</td>
                                       <td>Ahmad Faraz</td>
                                       <td>faraz123@yahoo.com</td>
                                       <td>12/08/2021</td>
                                       <td>
                                          <form>
                                              <button class="btn btn-info btn-sm">Active</button>
                                          </form>
                                       </td>
                                       <td>
                                          <form>
                                              <button class="btn btn-danger btn-sm">Delete</button>
                                          </form>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="serial">2</td>
                                       <td>Test</td>
                                       <td>faraz123@yahoo.com</td>
                                       <td>12/08/2021</td>
                                       <td>
                                          <form>
                                              <button class="btn btn-light btn-sm">Block</button>
                                          </form>
                                       </td>
                                       <td>
                                          <form>
                                              <button class="btn btn-danger btn-sm">Delete</button>
                                          </form>
                                       </td>
                                    </tr> -->
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
<?php include_once 'footer.php';?>