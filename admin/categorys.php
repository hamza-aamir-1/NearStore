<?php include_once 'header.php';?>
<?php include_once 'aside.php';?>
<?php
$cate_error = '';
$cate_success = '';
if(isset($_POST['create_cate']))
{
   $cate_name = mysqli_real_escape_string($conn, $_POST['cate_name']);
   $cate_name = filter_var($cate_name, FILTER_SANITIZE_STRING);
   $added_one = date('y-m-d');
   $status    = "Block";
   
   if(!empty($cate_name))
   {
      $sql = "SELECT `cate_name` FROM `categorys` WHERE `cate_name`='$cate_name'";
      $fire = mysqli_query($conn, $sql);
      
      if(mysqli_num_rows($fire) > 0)
      {
         $cate_error = 'Category already exists. Try another !!';
      }
      else
      {
         $sql = "INSERT INTO `categorys`(`cate_name`, `added_on`, `status`) VALUES ('$cate_name', '$added_one', '$status')";
         $fire = mysqli_query($conn, $sql);

         if($fire)
         {
            $cate_success = 'Category created successfully !!';
         }
         else
         {
            $cate_error = 'Error to create category !!';
         }
      }
   }
   else
   {
      $cate_error = 'Please enter category name !!';
   }

}


// Active Category 
if(isset($_POST['active_cate']))
{
   $cate_id = filter_var($_POST['cate_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `categorys` SET `status`='Active' WHERE `id`='$cate_id'");
}

// Block Category 
if(isset($_POST['block_cate']))
{
   $cate_id = filter_var($_POST['cate_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `categorys` SET `status`='Block' WHERE `id`='$cate_id'");
}

// Delete Category 
if(isset($_POST['del_cate']))
{
   $cate_id = filter_var($_POST['cate_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "DELETE FROM `categorys` WHERE `id`='$cate_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
               <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Create Category</strong></div>
                        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                           <div class="card-body card-block">
                              <div class="form-group">
                                 <label for="cate_name" class=" form-control-label">Category Name</label>
                                 <input type="text" name="cate_name" id="cate_name" class="form-control" autocomplete="off">
                              </div>
                              <button id="payment-button" name="create_cate" type="submit" class="btn btn-lg btn-info btn-block mb-2">
                              <span id="payment-button-amount">Create</span>
                              </button>
                              <span class="fw-bold " style="color:red;"><?= $cate_error; ?></span>
                              <span class="fw-bold " style="color:limegreen;"><?= $cate_success; ?></span>
                           </div>
                        </form>
                     </div>
                  </div>


                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Categorys</h4>
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
                                    
                                    $sql = "SELECT * FROM `categorys` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);
                                    
                                    $html = '';
                                    while($row = mysqli_fetch_assoc($fire))
                                    {
                                       $html .='<tr>';
                                       $html .='<td class="serial">'.$row['id'].'</td>';
                                       $html .='<td>'.$row['cate_name'].'</td>';
                                       $html .='<td>'.$row['added_on'].'</td>';
                                       $html .='<td>';
                                       if($row['status'] === 'Block')
                                       {
                                          $html .='<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';
                                          $html .='<input type="hidden" name="cate_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="active_cate" class="btn btn-info btn-sm">Active</button>';
                                          $html .='</form>';
                                       }
                                       else
                                       {
                                          $html .='<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';
                                          $html .='<input type="hidden" name="cate_id" value="'.$row['id'].'">';
                                          $html .='<button type="submit" name="block_cate" class="btn btn-warning btn-sm">Block</button>';
                                          $html .='</form>';
                                       }
                                       
                                       $html .='</td>';
                                       $html .='<td>';
                                       $html .='<form method="POST" action="'.$_SERVER['PHP_SELF'].'">';
                                       $html .='<input type="hidden" name="cate_id" value="'.$row['id'].'">';
                                       $html .='<button type="submit" name="del_cate" class="btn btn-danger btn-sm">Delete</button>';
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