<?php include_once 'header.php';?>
<?php include_once 'aside.php';


// Delete Subscriber
if(isset($_POST['del_subs']))
{
   $subs_id = filter_var($_POST['subs_id'], FILTER_SANITIZE_NUMBER_INT);
   mysqli_query($conn, "DELETE FROM `subscriber` WHERE `id`='$subs_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Subscribers</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>Email</th>
                                       <th>join date</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    
                                    $sql = "SELECT * FROM `subscriber` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);
                                    if($fire)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td class="serial">'.$row['id'].'</td>';
                                          $html .='<td>'.$row['email'].'</td>';
                                          $html .='<td>'.$row['join_date'].'</td>';
                                          $html .='<td>';
                                          $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                          $html .='<input type="hidden" name="subs_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="del_subs" class="btn btn-danger btn-sm">Delete</button>';
                                          $html .='</form>';
                                          $html .='</td>';
                                          $html .='</tr>';
                                       }
                                       echo $html;
                                    }
                                    
                                    ?>
                                    
                                    <!-- <tr>
                                       <td class="serial">2</td>
                                       <td>test12@yahoo.com</td>
                                       <td>11/09/2021</td>
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