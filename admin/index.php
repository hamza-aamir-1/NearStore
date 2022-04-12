<?php include_once 'header.php';?>
<?php include_once 'aside.php';

// Delete Mails
if(isset($_POST['del_mail']))
{
   $mail_id = filter_var($_POST['mail_id'], FILTER_SANITIZE_NUMBER_INT);
   mysqli_query($conn, "DELETE FROM `contact_us` WHERE `id`='$mail_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <!-- stat -->
                  <div class="col-xl-12">
                     <div class="container-fluid mb-5">
                        <div class="row">
                           <div class="col stat_box bg-twitter text-center p-3">
                              <?php 
                              
                              $sql = "SELECT * FROM `uni_visitors`";
                              $fire = mysqli_query($conn, $sql);

                              if($fire)
                              {
                                 $uni_visitors = mysqli_num_rows($fire);
                              }
                              ?>
                              <h3><span class="ti-flag-alt color-white"></span></h3>
                              <p class="color-white"><strong>Uni-Visiters : </strong><?= number_format($uni_visitors);?></p>
                           </div>
                           <div class="col stat_box bg-flat-color-4 mx-2 text-center p-3">
                              <?php          
                                 $sql = "SELECT `visitor_counter` FROM `visitors`";
                                 $fire = mysqli_query($conn, $sql);
                                 while($row = mysqli_fetch_assoc($fire))
                                 {
                                    $visitor =  $row['visitor_counter'];
                                 }
                              ?>
                              <h3><span class="ti-stats-up color-white"></span></h3>
                              <p class="color-white"><strong>Visiters : </strong><?= number_format($visitor);?></p>
                           </div>
                           <div class="col stat_box bg-flat-color-5 mr-2 text-center p-3">
                              <?php
                              $sql = "SELECT * FROM `order_manager`";
                              $fire = mysqli_query($conn, $sql);
                              if($fire)
                              {
                                 $order_count = mysqli_num_rows($fire);
                              }
                              ?>
                              <h3><span class="ti-bag color-white"></span></h3>
                              <p class="color-white"><strong>Orders : </strong><?= number_format($order_count); ?></p>
                           </div>
                           <div class="col stat_box bg-flat-color-6 text-center p-3">
                              <?php
                              $sql = "SELECT * FROM `products`";
                              $fire = mysqli_query($conn, $sql);
                              if($fire)
                              {
                                 $prod_count = mysqli_num_rows($fire);
                              }
                              ?>
                              <h3><span class="ti-files color-white"></span></h3>
                              <p class="color-white"><strong>Products : </strong><?= number_format($prod_count); ?></p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Email's</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Message</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    
                                    $sql = "SELECT * FROM `contact_us` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($fire))
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html.='<tr>';
                                          $html.='<td class="serial"><small>'.$row['id'].'</small></td>';
                                          $html.='<td><small>'.$row['name'].'</small></td>';
                                          $html.='<td><small>'.$row['email'].'</small></td>';
                                          $html.='<td><span><small>'.$row['message'].'</small></span></td>';
                                          $html.='<td>';
                                          $html.='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                          $html.='<input type="hidden" name="mail_id" value="'.$row['id'].'">';
                                          $html.='<button type="submit" name="del_mail" class="btn btn-danger btn-sm">Delete</button>';
                                          $html.='</form>';
                                          $html.='</td>';
                                          $html.='</tr>';
                                       }
                                       echo $html;
                                    }
                                    else
                                    {
                                       echo "<td>You don't have any mail yet</td>";
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