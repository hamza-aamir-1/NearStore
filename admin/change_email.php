<?php include_once 'header.php';?>
<?php include_once 'aside.php';


$email_error = '';
$email_success = '';

if(isset($_POST['change_email']))
{
   $email_id = isLoggedIn();
   $email_id = filter_var($_POST['email_id'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);

   if(!empty($email))
   {
      $sql = "SELECT `email` FROM `mamber` WHERE `email`='$email'";
      $fire = mysqli_query($conn, $sql);
      if(mysqli_num_rows($fire) > 0)
      {
         $email_error = 'Email already exists. Enter new Email !!';
      }
      else
      {
         if(filter_var($email, FILTER_VALIDATE_EMAIL))
         {
            $update = mysqli_query($conn, "UPDATE `mamber` SET `email`='$email' WHERE `id`='$email_id'");

            if($update)
            {
               $email_success = 'Email changed successfully !!';
            }
            else
            {
               $email_error = 'Error to change email !!';
            }
         }
         else
         {
            $email_error = 'Please enter valid email !!';
         }
      }
   }
   else
   {
      $email_error = 'Please enter your email !!';
   }
}

?>
        <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Change Email Address</strong></div>
                        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                           <div class="card-body card-block">
                              <div class="form-group">
                                 <label for="admin_email" class=" form-control-label">Enter Email Address</label>
                                 <input type="hidden" name="email_id" value="<?= $email_id; ?>">
                                 <input type="email" id="admin_email" name="email" class="form-control">
                              </div>
                              <button id="payment-button" type="submit" name="change_email" class="btn btn-lg btn-info btn-block mb-2">
                              <span id="payment-button-amount">Change</span>
                              </button>
                              <span class="fw-bold " style="color:red;"><?= $email_error; ?></span>
                              <span class="fw-bold " style="color:limegreen;"><?= $email_success; ?></span>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
        </div>
<?php include_once 'footer.php';?>