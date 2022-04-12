<?php include_once 'header.php';?>
<?php include_once 'aside.php';

// Show Product
if(isset($_POST['show_prod']))
{
   $prod_id = filter_var($_POST['prod_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `products` SET `status`='1' WHERE `id`='$prod_id'");
}

// Hide Product
if(isset($_POST['hide_prod']))
{
   $prod_id = filter_var($_POST['prod_id'], FILTER_SANITIZE_NUMBER_INT);
   $update = mysqli_query($conn, "UPDATE `products` SET `status`='0' WHERE `id`='$prod_id'");
}

?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">All Products</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">id</th>
                                       <th>Product</th>
                                       <th>title</th>
                                       <th>category</th>
                                       <th>View</th>
                                       <th>Active</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php

                                    $sql = "SELECT `products`.*,`prod_images`.img_name FROM `products` LEFT JOIN `prod_images` ON `products`.id = `prod_images`.prod_id AND `prod_images`.status='featured' ORDER BY `products`.id DESC";
                                    $fire = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($fire) > 0)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td class="serial">'.$row['id'].'</td>';
                                          $html .='<td>';
                                          $html .='<img src="../assets/media/product/'.$row['img_name'].'" class="rounded float-start" alt="image">';
                                          $html .='</td>';
                                          $html .='<td>'.substr($row['prod_title'], 0, 30).'</small></td>';
                                          $html .='<td>'.$row['prod_cate'].'</td>';
                                          $html .='<td>';
                                          $html .='<a href="view-product?prod_id='.$row['id'].'" class="btn btn-sm btn-light">View</a>';
                                          $html .='</td>';
                                          $html .='<td>';
                                          if($row['status'] == '1')
                                          {
                                             $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                             $html .='<input type="hidden" name="prod_id" value="'.$row['id'].'">';
                                             $html .='<button type="submit" name="hide_prod" class="btn btn-warning btn-sm">Hide</button>';
                                             $html .='</form>';
                                          }
                                          else
                                          {
                                             $html .='<form method="POST" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'">';
                                             $html .='<input type="hidden" name="prod_id" value="'.$row['id'].'">';
                                             $html .='<button type="submit" name="show_prod" class="btn btn-info btn-sm">Show</button>';
                                             $html .='</form>';
                                          }
                                          $html .='</td>';
                                          $html .='</tr>';
                                       }
                                       echo $html;
                                    }
                                    else
                                    {
                                       echo "Don't have products yet";
                                    }

                                    ?>
                                    <!-- <tr>
                                       <td class="serial">1</td>
                                       <td>
                                            <img src="../assets/media/product/p2.jpg" class="rounded float-start" alt="image">
                                       </td>
                                       <td><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></td>
                                       <td>Bulding</td>
                                       <td>Hide</td>
                                       <td>
                                          <a href="view-product" class="btn btn-sm btn-link">View</a>
                                       </td>
                                       <td>
                                          <form>
                                             <button class="btn btn-light btn-sm">Selected</button>
                                          </form>
                                       </td>
                                       <td>
                                          <form>
                                              <button class="btn btn-info btn-sm">Show</button>
                                          </form>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="serial">1</td>
                                       <td>
                                            <img src="../assets/media/product/p1.jpg" class="rounded float-start" alt="image">
                                       </td>
                                       <td><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></td>
                                       <td>445533</td>
                                       <td>Hide</td>
                                       <td>
                                          <a href="view-product" class="btn btn-sm btn-link">View</a>
                                       </td>
                                       <td>
                                          <form>
                                             <button class="btn btn-secondary btn-sm">Select</button>
                                          </form>
                                       </td>
                                       <td>
                                          <form>
                                              <button class="btn btn-warning btn-sm">Hide</button>
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