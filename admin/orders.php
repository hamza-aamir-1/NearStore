<?php include_once 'header.php';?>
<?php include_once 'aside.php';?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Orders </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">Order id</th>
                                       <th>Date</th>
                                       <th>Name</th>
                                       <th>From</th>
                                       <th>Status</th>
                                       <th></th>
                                       <th>View</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `order_manager` ORDER BY `order_id` DESC";
                                    $fire = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($fire) > 0)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td class="serial">'.$row['order_id'].'</td>';
                                          $html .='<td>'.$row['order_date'].'</td>';
                                          $html .='<td>'.$row['f_name'].'</td>';
                                          $html .='<td>'.$row['city'].'</td>';
                                          $html .='<td>'.$row['order_status'].'</td>';
                                          if($row['seen'] == '1')
                                          {
                                             $html .='<td></td>';
                                          }
                                          else
                                          {
                                             $html .='<td><span class="badge bg-success">New</span></td>';
                                          }
                                          $html .='<td>';
                                          $html .='<a href="view-order?order_id='.$row['order_id'].'" class="btn btn-sm btn-light">View</a>';
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