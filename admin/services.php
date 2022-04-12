<?php include_once 'header.php';?>
<?php include_once 'aside.php';

$ser_error = '';
$ser_success = '';
if(isset($_POST['add_serv']))
{
    $serv_name = mysqli_real_escape_string($conn, $_POST['serv_name']);
    $serv_name = filter_var($serv_name, FILTER_SANITIZE_STRING);
    $serv_cate = mysqli_real_escape_string($conn, $_POST['serv_cate']);
    $serv_cate = filter_var($serv_cate, FILTER_SANITIZE_STRING);
    $serv_intro = mysqli_real_escape_string($conn, $_POST['serv_intro']);
    $serv_intro = filter_var($serv_intro, FILTER_SANITIZE_STRING);
    $serv_icon = mysqli_real_escape_string($conn, $_POST['serv_icon']);
    $serv_icon = filter_var($serv_icon, FILTER_SANITIZE_STRING);
    $date = date('y-m-d');

    if($serv_name == '')
    {
        $ser_error = 'Please enter service name !!';
    }
    else
    {
        if($serv_cate == '')
        {
            $ser_error = 'Please choose category !!';
        }
        else
        {
            if($serv_intro == '')
            {

            }
            else
            {
               $sql = "SELECT `serv_name` FROM `services` WHERE `serv_name`='$serv_name'";
               $check = mysqli_query($conn, $sql);

               if(mysqli_num_rows($check) > 0)
               {
                  $ser_error = 'Service already exists. Try another !!';
               }
               else
               {
                  $sql = "INSERT INTO `services`(`serv_name`, `serv_intro`, `serv_cate`, `serv_icon`, `added_on`) VALUES ('$serv_name', '$serv_intro', '$serv_cate', '$serv_icon', '$date')";
                  $fire = mysqli_query($conn, $sql);

                  if($fire)
                  {
                     $ser_success = 'Service Created successfully !!';
                  }
                  else
                  {
                     $ser_error = 'Error to create service !!';
                  }
               }
            }
        }   
    }
}


// Active service 
if(isset($_POST['active_serv']))
{
   $serv_id = filter_var($_POST['serv_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `services` SET `status`='1' WHERE `id`='$serv_id'");
}

// Block service 
if(isset($_POST['block_serv']))
{
   $serv_id = filter_var($_POST['serv_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `services` SET `status`='0' WHERE `id`='$serv_id'");
}

// Delete service 
if(isset($_POST['del_serv']))
{
   $serv_id = filter_var($_POST['serv_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "DELETE FROM `services` WHERE `id`='$serv_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
               <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Create New Service</strong></div>
                        <div class="card-body card-block">
                           <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                <div class="form-group">
                                    <label for="serv_name" class=" form-control-label">Enter Service Name</label>
                                    <input type="text" name="serv_name" id="serv_name" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="serv_icon" class=" form-control-label">Enter Service Icon</label>
                                    <input type="text" name="serv_icon" id="serv_icon" class="form-control" autocomplete="off" required>
                                    <small>choose icon from > https://themify.me/themify-icons</small>
                                </div>
                                <div class="form-group">
                                    <label for="select_cate" class=" form-control-label">Choose Category</label>
                                    <select name="serv_cate" id="select_cate" class="form-control">
                                    <option value="">-- select category --</option>
                                        <?php 
                                        
                                        $sql = "SELECT * FROM `categorys` WHERE `status`='Active'";
                                        $fire = mysqli_query($conn, $sql);

                                        while($row = mysqli_fetch_assoc($fire))
                                        {
                                            echo '<option value="'.$row['cate_name'].'">'.$row['cate_name'].'</option>';
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="serv_intro" class=" form-control-label">Enter Service Intro</label>
                                    <textarea name="serv_intro" id="serv_intro" class="form-control" autocomplete="off" required></textarea>
                                </div>
                                <button id="payment-button" type="submit" name="add_serv" class="btn btn-lg btn-info btn-block mb-2">
                                <span id="payment-button-amount">Create Service</span>
                                </button>
                                <span class="fw-bold " style="color:red;"><?= $ser_error; ?></span>
                                <span class="fw-bold " style="color:limegreen;"><?= $ser_success; ?></span>
                           </form>
                        </div>
                     </div>
                  </div>


                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Services</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>Name</th>
                                       <th>Intro</th>
                                       <th>category</th>
                                       <th>Added on</th>
                                       <th>Status</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    
                                    $sql = "SELECT * FROM `services` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);

                                    $html = '';
                                    while($row = mysqli_fetch_assoc($fire))
                                    {
                                       $html .='<tr>';
                                       $html .='<td class="serial">'.$row['id'].'</td>';
                                       $html .='<td><small>'.$row['serv_name'].'</small></td>';
                                       $html .='<td><small>'.substr($row['serv_intro'], 0, 35).'</small></td>';
                                       $html .='<td><small>'.$row['serv_cate'].'</small></td>';
                                       $html .='<td>'.$row['added_on'].'</td>';
                                       if($row['status'] == '1')
                                       {
                                            $html .='<td>';
                                            $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                            $html .='<input type="hidden" name="serv_id" value="'.$row['id'].'">';
                                            $html .='<button type="submit" name="block_serv" class="btn btn-light btn-sm">Block</button>';
                                            $html .='</form>';
                                            $html .='</td>';
                                       }
                                       else
                                       {
                                            $html .='<td>';
                                            $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                            $html .='<input type="hidden" name="serv_id" value="'.$row['id'].'">';
                                            $html .='<button type="submit" name="active_serv" class="btn btn-info btn-sm">Active</button>';
                                            $html .='</form>';
                                            $html .='</td>';
                                       }
                                       $html .='<td>';
                                       $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                       $html .='<input type="hidden" name="serv_id" value="'.$row['id'].'">';
                                       $html .='<button type="submit" name="del_serv" class="btn btn-danger btn-sm">Delete</button>';
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