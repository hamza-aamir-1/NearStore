<?php include_once 'header.php';?>
<?php include_once 'aside.php';?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
               <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Download Files</strong></div>
                        <div class="card-body card-block">
                           <form method="post" action="manage_download.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="down_title" class=" form-control-label">Enter File Title</label>
                                    <input type="text" name="file_title" id="down_title" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="down_file" class=" form-control-label">Choose File</label>
                                    <input type="file" name="image[]" id="down_file" class="form-control">
                                </div>
                                <button id="payment-button" type="submit" name="add-download" class="btn btn-lg btn-info btn-block mb-2">
                                <span id="payment-button-amount">Add File</span>
                                </button>
                                 
                                 <!--__Success Message__-->
                                 <?php if(isset($_SESSION['download_success'])): ?>
                                    <div style="color:limegreen;">
                                          <?php echo $_SESSION['download_success']; ?>
                                    </div>
                                 <?php endif;?>
                                 <?php unset($_SESSION['download_success']); ?>
                                 
                                 <!--__Error Message__-->
                                 <?php if(isset($_SESSION['download_error'])): ?>
                                    <div style="color:red;">
                                          <?php echo $_SESSION['download_error']; ?>
                                    </div>
                                 <?php endif;?>
                                 <?php unset($_SESSION['download_error']); ?>

                           </form>
                        </div>
                     </div>
                  </div>


                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Upload PDF Files</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>File Title</th>
                                       <th>file</th>
                                       <th>Added on</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php

                                    // Delete PDF File
                                    if(isset($_POST['deletePDF']))
                                    {
                                       $file_id = filter_var($_POST['file_id'], FILTER_SANITIZE_NUMBER_INT);

                                       $sql = mysqli_query($conn, "SELECT `id` FROM `download` WHERE `id`='$file_id'");

                                       if($sql)
                                       {  
                                          if(mysqli_query($conn, "DELETE FROM `download` WHERE `id`='$file_id'"))
                                          {
                                             unlink("../assets/media/downloads/".$_POST["file_name"]."");
                                          }
                                       }
                                    }
                                    
                                    $sql = "SELECT * FROM `download` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);

                                    $html = '';
                                    while($row = mysqli_fetch_assoc($fire))
                                    {
                                       $html .='<tr>';
                                       $html .='<td class="serial">'.$row['id'].'</td>';
                                       $html .='<td><small>'.$row['file_title'].'</small></td>';
                                       $html .='<td><small>'.$row['file_name'].'</small></td>';
                                       $html .='<td>'.$row['added_on'].'</td>';
                                       $html .='<td>';
                                       $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                       $html .='<input type="hidden" name="file_id" value="'.$row['id'].'">';
                                       $html .='<input type="hidden" name="file_name" value="'.$row['file_name'].'">';
                                       $html .='<button type="submit" name="deletePDF" class="btn btn-danger btn-sm">Delete</button>';
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