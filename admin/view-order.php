<?php include_once 'header.php';?>
<?php include_once 'aside.php';

if(isset($_GET['order_id']))
{
   $order_id = filter_var($_GET['order_id'], FILTER_SANITIZE_NUMBER_INT);
   $sql = "SELECT `order_id` FROM `order_manager` WHERE `order_id`='$order_id'";
   $check = mysqli_query($conn, $sql);

   if(mysqli_num_rows($check) > 0)
   {
      $update = mysqli_query($conn, "UPDATE `order_manager` SET `seen`='1' WHERE `order_id`='$order_id'");

      $sql = "SELECT * FROM `order_manager` WHERE `order_id`='$order_id'";
      $fire = mysqli_query($conn, $sql);
      
      if($fire)
      {
         $row = mysqli_fetch_assoc($fire);
      }
   }
   else
   {
      redirect('orders');
   }
}
else
{
   redirect('orders');
}

?>
         <div class="content pb-0">
            <div class="container-fluid bg-white mb-2 p-4">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <a href="orders"><span class="ti-arrow-left"></span></a>&nbsp;&nbsp;&nbsp;<span><?= $row['f_name'];?> - <?= $row['order_date'];?></span>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <form method="POST" action="delete_order.php">
                              <input type="hidden" name="order_id" value="<?= $order_id; ?>">
                              <button type="submit" name="del_order" class="btn btn-danger btn-sm" style="float:right;">Delete</button>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="container-fluid  mb-3 p-4">
                    <div class="row">
                    
                        <div class="col-sm-12 col-lg-6">
                            <form method="POST" action="manage_status.php">
                                <div class="input-group">
                                <input type="hidden" name="order_id" value="<?= $order_id; ?>">
                                    <select class="form-control" name="status" id="inputGroupSelect04" aria-label="Example select with button addon">
                                        <?php
                                        if($row['order_status'] == 'Pending')
                                        {
                                          echo '<option value="Pending" selected>Pending</option>';
                                          echo '<option value="Process">Process</option>';
                                          echo '<option value="Shipped">Shipped</option>';
                                        }
                                        elseif($row['order_status'] == 'Process')
                                        {
                                          echo '<option value="Process" selected>Process</option>';
                                          echo '<option value="Pending">Pending</option>';
                                          echo '<option value="Shipped">Shipped</option>';
                                        }
                                        elseif($row['order_status'] == 'Shipped')
                                        {
                                          echo '<option value="Shipped" selected>Shipped</option>';
                                          echo '<option value="Pending">Pending</option>';
                                          echo '<option value="Process">Process</option>';
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" name="update_ord_status" class="btn btn-info"><span class="ti-save-alt"></span></button>
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
                           <h4 class="box-title">Clint Information</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>Address</th>
                                       <th>Country</th>
                                       <th>State</th>
                                       <th>Zip</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?= $row['f_name'];?> <?= $row['l_name'];?></td>
                                       <td><?= $row['email'];?></td>
                                       <td><?= $row['phone'];?></td>
                                       <td><small><?= $row['address'];?></small></td>
                                       <td><?= $row['country'];?></td>
                                       <td><?= $row['city'];?></td>
                                       <td><?= $row['postal_code'];?></td>
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
                           <h4 class="box-title">Order Information</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>Order id</th>
                                       <th>Product</th>
                                       <th>Title</th>
                                       <th>Weight</th>
                                       <th>Price</th>
                                       <th>Qty</th>
                                       <th>Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `user_orders` WHERE `order_id`='$order_id'";
                                    $fire = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($fire) > 0)
                                    {
                                       $html = '';
                                       while($row = mysqli_fetch_assoc($fire))
                                       {
                                          $html .='<tr>';
                                          $html .='<td>'.$row['order_id'].'</td>';
                                          $html .='<td>';
                                          $html .='<img src="../assets/media/product/'.$row['item_img'].'" class="rounded float-start" alt="image">';
                                          $html .='</td>';
                                          $html .='<td>'.$row['item_title'].'</td>';
                                          $html .='<td>'.$row['item_weight'].'</td>';
                                          $html .='<td>'.number_format($row['item_price']).'</td>';
                                          $html .='<input type="hidden" class="iprice" value="'.$row['item_price'].'">';
                                          $html .='<td>'.$row['item_qty'].'</td>';
                                          $html .='<input type="hidden" class="iqty" value="'.$row['item_qty'].'">';
                                          $html .='<td class="itotal"></td>';
                                          $html .='</tr>';
                                       }
                                       echo $html;
                                    }

                                    ?>
                                    <tr>
                                        <td colspan="7"><strong>Total :</strong> <span style="color:limegreen;" id="gtotal"></span></td>
                                    </tr>
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
<script>
    var gt = 0;
    var iprice  = document.getElementsByClassName('iprice');
    var iqty    = document.getElementsByClassName('iqty');
    var itotal  = document.getElementsByClassName('itotal');
    var gtotal  = document.getElementById('gtotal');

    function subTotal()
    {
        gt = 0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iqty[i].value);
            gt = gt+(iprice[i].value)*(iqty[i].value);
        }
        gtotal.innerText=gt;
    }

    subTotal();
</script>