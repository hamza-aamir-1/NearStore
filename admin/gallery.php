<?php include_once 'header.php';?>
<?php include_once 'aside.php';?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
               <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Gallery Images</strong></div>
                        <div class="card-body card-block">
                           <form method="post" action="manage_gallery" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="gall_img" class=" form-control-label">Choose Images</label>
                                    <input type="file" name="image[]" id="gall_img" class="form-control" multiple required/>
                                 </div>
                                <button type="submit" name="add-gallery" id="payment-button"  class="btn btn-lg btn-info btn-block mb-2">
                                <span id="payment-button-amount">Add</span>
                                </button>

                                 <!--__Success Message__-->
                                 <?php if(isset($_SESSION['gallery_success'])): ?>
                                    <div style="color:limegreen;">
                                          <?php echo $_SESSION['gallery_success']; ?>
                                    </div>
                                 <?php endif;?>
                                 <?php unset($_SESSION['gallery_success']); ?>
                                 
                                 <!--__Error Message__-->
                                 <?php if(isset($_SESSION['gallery_error'])): ?>
                                    <div style="color:red;">
                                          <?php echo $_SESSION['gallery_error']; ?>
                                    </div>
                                 <?php endif;?>
                                 <?php unset($_SESSION['gallery_error']); ?>

                           </form>
                        </div>
                     </div>
                  </div>


                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Images</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>Name</th>
                                       <th>added on</th>
                                       <th>delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    // Delete Image
                                    if(isset($_POST['deleteImg']))
                                    {
                                          $img_id = filter_var($_POST['img_id'], FILTER_SANITIZE_NUMBER_INT);

                                          if(mysqli_query($conn, "SELECT `id` FROM `gallery` WHERE `id`='$img_id'"))
                                          {
                                             if(mysqli_query($conn, "DELETE FROM `gallery` WHERE `id`='$img_id'"))
                                             {
                                                unlink("../assets/media/gallery/".$_POST["img_name"]."");
                                             }  
                                          }
                                    }

                                    $sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";
                                    $fire = mysqli_query($conn, $sql);

                                    if($fire)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {

                                          $html .='<tr>';
                                          $html .='<td class="serial">'.$row['id'].'</td>';
                                          $html .='<td>';
                                          $html .='<img src="../assets/media/gallery/'.$row['img_name'].'" class="rounded float-start" alt="image">';
                                          $html .='</td>';
                                          $html .='<td>'.$row['added_on'].'</td>';
                                          $html .='<td>';
                                          $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                          $html .='<input type="hidden" name="img_id" value="'.$row['id'].'">';
                                          $html .='<input type="hidden" name="img_name" value="'.$row['img_name'].'">';
                                          $html .='<button type="submit" name="deleteImg" class="btn btn-danger btn-sm">Delete</button>';
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