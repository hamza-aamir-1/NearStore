<?php include_once 'header.php';?>
<?php include_once 'aside.php';?>
<?php

$w_error = '';
$w_success = '';

if(isset($_POST['add_weight']))
{
   $w_name = mysqli_real_escape_string($conn, $_POST['prod_weigth']);
   $w_name = filter_var($w_name, FILTER_SANITIZE_STRING);
   $added_on = date('y-m-d');
   $status = "Block";

   if(!empty($w_name))
   {
      $sql = "SELECT `w_name` FROM `prod_weight` WHERE `w_name`='$w_name'";
      $fire = mysqli_query($conn, $sql);

      if(mysqli_num_rows($fire) > 0)
      {
         $w_error = 'Weight value already exists. Try another !!';
      }
      else
      {
         $sql = "INSERT INTO `prod_weight`(`w_name`, `added_on`, `status`) VALUES ('$w_name', '$added_on', '$status')";
         $fire = mysqli_query($conn, $sql);

         if($fire)
         {
            $w_success = 'Weight value created successfully !!';
         }
         else
         {
            $w_error = 'Error to create weight value !!';
         }
      }
   }
   else
   {
      $w_error = 'Please enter weight value !!';
   }
}


// Active weight 
if(isset($_POST['active_w']))
{
   $w_id = filter_var($_POST['w_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `prod_weight` SET `status`='Active' WHERE `id`='$w_id'");
}

// Block weight 
if(isset($_POST['block_w']))
{
   $w_id = filter_var($_POST['w_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `prod_weight` SET `status`='Block' WHERE `id`='$w_id'");
}

// Delete weight 
if(isset($_POST['del_w']))
{
   $w_id = filter_var($_POST['w_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "DELETE FROM `prod_weight` WHERE `id`='$w_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
               <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Product Weight</strong></div>
                        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                           <div class="card-body card-block">
                              <div class="form-group">
                                 <label for="prod_weigth" class=" form-control-label">Product Weight Name</label>
                                 <input type="text" name="prod_weigth" id="prod_weigth" class="form-control" autocomplete="off">
                              </div>
                              <button id="payment-button" type="submit" name="add_weight" class="btn btn-lg btn-info btn-block mb-2">
                              <span id="payment-button-amount">Add</span>
                              </button>
                              <span class="fw-bold " style="color:red;"><?= $w_error; ?></span>
                              <span class="fw-bold " style="color:limegreen;"><?= $w_success; ?></span>
                           </div>
                        </form>
                     </div>
                  </div>


                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Weights</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>Name</th>
                                       <th>added on</th>
                                       <th>Active</th>
                                       <th>delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    
                                    $sql = "SELECT * FROM `prod_weight` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);
                                    
                                    $html = '';
                                    while($row = mysqli_fetch_assoc($fire))
                                    {
                                       $html .='<tr>';
                                       $html .='<td class="serial">'.$row['id'].'</td>';
                                       $html .='<td>'.$row['w_name'].'</td>';
                                       $html .='<td>'.$row['added_on'].'</td>';
                                       $html .='<td>';
                                       if($row['status'] === 'Block')
                                       {
                                          $html .='<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';
                                          $html .='<input type="hidden" name="w_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="active_w" class="btn btn-info btn-sm">Active</button>';
                                          $html .='</form>';
                                       }
                                       else
                                       {
                                          $html .='<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';
                                          $html .='<input type="hidden" name="w_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="block_w" class="btn btn-warning btn-sm">Block</button>';
                                          $html .='</form>';
                                       }
                                       
                                       $html .='</td>';
                                       $html .='<td>';
                                       $html .='<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';
                                       $html .='<input type="hidden" name="w_id" value="'.$row['id'].'">';
                                       $html .='<button type="submit" name="del_w" class="btn btn-danger btn-sm">Delete</button>';
                                       $html .='</form>';
                                       $html .='</td>';
                                       $html .='</tr>';
                                    }
                                    echo $html;
                                    
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