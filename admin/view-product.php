<?php include_once 'header.php';?>
<?php include_once 'aside.php';


if(isset($_GET['prod_id']))
{
   $prod_id = filter_var($_GET['prod_id'], FILTER_SANITIZE_NUMBER_INT);

   $sql = "SELECT `id` FROM `products` WHERE `id`='$prod_id'";
   $check = mysqli_query($conn, $sql);

   if(mysqli_num_rows($check) > 0)
   {
      $sql = "SELECT `products`.*,`prod_attr`.* FROM `products` LEFT JOIN `prod_attr` ON `products`.id = `prod_attr`.prod_id WHERE `products`.id='$prod_id'";
      $fire = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($fire);
   }
   else
   {
      redirect('products');
   }
}
else
{
   redirect('products');
}
?>
         <div class="content pb-0">
            <div class="container-fluid bg-white mb-2 p-4">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <a href="products"><span class="ti-arrow-left"></span></a>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <form method="POST" action="delete_product.php">
                               <input type="hidden" name="prod_id" value="<?= $prod_id; ?>">
                                <button type="submit" name="del_prod" class="btn btn-danger btn-sm" style="float:right;">Delete</button>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="container-fluid  mb-3 p-4">
                    <div class="row">
                    
                        <div class="col-sm-12 col-lg-6">
                            <form method="POST" action="manage_stock.php">
                                <div class="input-group">
                                   <input type="hidden" name="prod_id" value="<?= $prod_id; ?>">
                                    <select class="form-control" name="stock"  id="inputGroupSelect04" aria-label="Example select with button addon">
                                       <?php
                                       
                                       if($row['prod_stock'] == 'Available')
                                       {
                                          echo '<option value="Available" selected>Available</option>
                                          <option value="Out_of_Stock">Out_of_Stock</option>';
                                       }
                                       elseif($row['prod_stock'] == 'Out_of_Stock')
                                       {
                                          echo '<option value="Available">Available</option>
                                          <option value="Out_of_Stock" selected>Out_of_Stock</option>';
                                       }

                                       ?>
                                    </select>
                                    <button type="submit" name="update_stock" class="btn btn-info"><span class="ti-save-alt"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Product Details</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>id</th>
                                       <th>title</th>
                                       <th>category</th>
                                       <th>price</th>
                                       <th>qty</th>
                                       <th>weight</th>
                                       <th>discription</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?= $row['id'];?></td>
                                       <td><small><?= $row['prod_title'];?></small></td>
                                       <td><?= $row['prod_cate'];?></td>
                                       <td><?= number_format($row['prod_price']);?></td>
                                       <td><?= $row['prod_qty'];?></td>
                                       <td><?= $row['prod_weight'];?></td>
                                       <td><small><?= $row['prod_disc'];?></small></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Product Images</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>Prod id</th>
                                       <th>image</th>
                                       <th>status</th>
                                       <th>featured</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    
                                    $sql = "SELECT * FROM `prod_images` WHERE `prod_id`='".$prod_id."'";
                                    $fire = mysqli_query($conn, $sql);
                                    
                                    if($fire)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td>'.$row['prod_id'].'</td>';
                                          $html .='<td>';
                                          $html .='<img src="../assets/media/product/'.$row['img_name'].'" class="rounded float-start" alt="image">';
                                          $html .='</td>';
                                          $html .='<td>'.$row['status'].'</td>';
                                          $html .='<td>';
                                          if($row['status'] == 'featured')
                                          {
                                             $html .='<form>';
                                             $html .='<button class="btn btn-light btn-sm">Selected</button>';
                                             $html .='</form>';
                                          }
                                          else
                                          {
                                             $html .='<form method="POST" action="manage_featured.php">';
                                             $html .='<input type="hidden" name="img_id" value="'.$row['id'].'">';
                                             $html .='<input type="hidden" name="prod_id" value="'.$prod_id.'">';
                                             $html .='<button type="submit" name="set_featured" class="btn btn-info btn-sm">Select</button>';
                                             $html .='</form>';
                                          }
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