<?php include_once 'header.php';?>
<?php include_once 'aside.php';

// Show Review 
if(isset($_POST['show_review']))
{
   $review_id = filter_var($_POST['reveiw_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `review` SET `status`='1' WHERE `id`='$review_id'");
}

// Hide Review 
if(isset($_POST['hide_review']))
{
   $review_id = filter_var($_POST['reveiw_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `review` SET `status`='0' WHERE `id`='$review_id'");
}

// Delete Review 
if(isset($_POST['del_review']))
{
   $review_id = filter_var($_POST['reveiw_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "DELETE FROM `review` WHERE `id`='$review_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Reviews</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th class="serial">User id</th>
                                       <th>Product id</th>
                                       <th>Rating</th>
                                       <th>Review</th>
                                       <th>Added on</th>
                                       <th>Active</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `review` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($fire) > 0)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td class="serial">'.$row['id'].'</td>';
                                          $html .='<td class="serial">'.$row['user_id'].'</td>';
                                          $html .='<td>'.$row['prod_id'].'</td>';
                                          $html .='<td>'.$row['rating'].'</td>';
                                          $html .='<td>'.$row['review'].'</td>';
                                          $html .='<td>'.$row['added_on'].'</td>';
                                          $html .='<td>';
                                          if($row['status'] == '1')
                                          {
                                             $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                             $html .='<input type="hidden" name="reveiw_id" value="'.$row['id'].'">';
                                             $html .='<button type="submit" name="hide_review" class="btn btn-light btn-sm">Hide</button>';
                                             $html .='</form>';
                                          }
                                          else
                                          {
                                             $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                             $html .='<input type="hidden" name="reveiw_id" value="'.$row['id'].'">';
                                             $html .='<button type="submit" name="show_review" class="btn btn-info btn-sm">Show</button>';
                                             $html .='</form>';
                                          }
                                          $html .='</td>';
                                          $html .='<td>';
                                          $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                          $html .='<input type="hidden" name="reveiw_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="del_review" class="btn btn-danger btn-sm">Delete</button>';
                                          $html .='</form>';
                                          $html .='</td>';
                                          $html .='</tr>';
                                       }
                                       echo $html;
                                    }
                                    ?>
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