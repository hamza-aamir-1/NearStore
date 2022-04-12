<?php include_once 'header.php';?>
<?php include_once 'aside.php';?>
        <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Create Product</strong></div>
                        <form method="POST" action="manage_product" enctype="multipart/form-data">
                        <div class="card-body card-block">
                           <!--__Success Message__-->
                           <?php if(isset($_SESSION['prod_success'])): ?>
                              <div class="mb-2" style="color:limegreen;">
                                 <?php echo $_SESSION['prod_success']; ?>
                              </div>
                           <?php endif;?>
                           <?php unset($_SESSION['prod_success']); ?>
                                    
                           <!--__Error Message__-->
                           <?php if(isset($_SESSION['prod_error'])): ?>
                              <div class="mb-2" style="color:red;">
                                 <?php echo $_SESSION['prod_error']; ?>
                              </div>
                           <?php endif;?>
                           <?php unset($_SESSION['prod_error']); ?>

                           <div class="form-group">
                               <label for="prod_title" class=" form-control-label">Product Title</label>
                               <input type="text" id="prod_title" name="prod_title" class="form-control">
                            </div>
                           <div class="form-group">
                               <label for="prod_image" class="form-control-label">Choose Product Image</label>
                               <input type="file" id="prod_image" name="prod_image[]" class="form-control" multiple>
                            </div>
                           <div class="form-group">
                               <label for="prod_disc" class=" form-control-label">Product Details</label>
                               <input type="text" id="prod_disc" name="prod_disc" class="form-control">
                            </div>
                           <div class="form-group">
                               <label for="prod_stock" class=" form-control-label">Product Stock</label>
                               <select name="prod_stock" id="prod_stock" class="form-control">
                                   <option value="Available">Available</option>
                                   <option value="Out_of_Stock">Out of Stock</option>
                               </select>
                            </div>
                            <div class="form-group">
                               <label for="prod_category" class="form-control-label">Product Category</label>
                               <select name="prod_category" id="prod_category" class="form-control" required>
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
                            
                           <div id="prod_attr_box">
                              <div class="row" id="attr_1">
                                    <div class="col-sm-12 col-lg-3">
                                       <div class="form-group">
                                          <label for="prod_weight" class="form-control-label">Product Weight</label>
                                          <select name="prod_weight[]" id="prod_weight" class="form-control" >
                                             <option value="">-- select weight --</option>
                                             <?php
                                             
                                             $sql = "SELECT * FROM `prod_weight` WHERE `status`='Active'";
                                             $fire = mysqli_query($conn, $sql);

                                             while($row = mysqli_fetch_assoc($fire))
                                             {
                                                echo '<option value="'.$row['w_name'].'">'.$row['w_name'].'</option>';
                                             }
                                             
                                             ?>
                                          </select>
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-lg-3">
                                       <div class="form-group">
                                          <label for="prod_qty" class=" form-control-label">Product Qty</label>
                                          <input type="number" name="prod_qty[]" id="prod_qty" min="1" value="1" class="form-control" required>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 col-lg-3">
                                          <div class="form-group">
                                             <label for="prod_price" class=" form-control-label">Product Price</label>
                                             <input type="text" id="prod_price" name="prod_price[]" autocomplete="off" class="form-control" required>
                                          </div>
                                    </div>

                                    <div class="col-sm-12 col-lg-3">
                                          <div class="form-group">
                                             &nbsp;
                                             <button type="button" class="btn btn-info btn-lg btn-block" onclick="add_more_attr()">Add More</button>
                                          </div>
                                    </div>

                              </div>
                           </div>

                           <button id="payment-button" type="submit" name="create_product" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Create</span>
                           </button>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
        </div>
<?php include_once 'footer.php';?>
<script>
   attr_count = 1;
   function add_more_attr()
   {
      var prod_weight = jQuery('#attr_1 #prod_weight').html();
      attr_count++;
      var html = '<div class="row mt-3" id="attr_'+attr_count+'"> <div class="col-sm-12 col-lg-3"> <div class="form-group"> <label for="prod_weight" class="form-control-label">Product Weight</label> <select name="prod_weight[]" id="prod_weight" class="form-control" required>'+prod_weight+'</select> </div> </div> <div class="col-sm-12 col-lg-3"> <div class="form-group"> <label for="prod_qty" class=" form-control-label">Product Qty</label> <input type="number" name="prod_qty[]" id="prod_qty" min="1" value="1" class="form-control" required> </div> </div> <div class="col-sm-12 col-lg-3"> <div class="form-group"> <label for="prod_price" class=" form-control-label">Product Price</label> <input type="text" name="prod_price[]" id="prod_price" autocomplete="off" class="form-control" required> </div> </div> <div class="col-sm-12 col-lg-3"> <div class="form-group">&nbsp;<button type="button" class="btn btn-danger btn-lg btn-block" onclick="remove_attr('+attr_count+')">Remove</button> </div> </div></div>';
      jQuery('#prod_attr_box').append(html);
   }

   function remove_attr(attr_count)
   {
      jQuery("#attr_"+attr_count).remove();
   }
</script>