<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Welcome Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/login.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-white">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form id="loginForm">
                     <div class="text-center">
                        <img src="images/login_logo.png" class="img-fluid" alt="Loading">
                     </div>
                     <div class="form-group">
                        <!-- <label>Email address</label> -->
                        <input type="email" name="email" class="form-control" placeholder="Email address">
                     </div>
                     <div class="form-group">
                        <!-- <label>Password</label> -->
                        <input type="password" name="password" class="form-control" placeholder="Password">
                     </div>
                     <button type="submit" id="login" class="btn btn-success btn-flat btn-block m-b-30 m-t-30 login_btn">Sign in</button>
                     <div id="err_wrap"></div>
					   </form>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script src="assets/js/inspectBlock.js"></script>
      <script>
         jQuery("#login").on('click', function(e){

            e.preventDefault();
            jQuery("#login").attr('disabled', true);
            jQuery("#login").html('Please wait ...');

            jQuery.ajax({
               url: 'assets/classes/login_action.php',
               method: 'POST',
               data: jQuery("#loginForm").serialize(),
               success: function(result) {

                  if(result == "empty_fields")
                  {
                     jQuery("#err_wrap").html('<div class="alert alert-danger mt-3" role="alert">Both Fields are required !!</div>');
                  }
                  if(result == "invalid_user")
                  {
                     jQuery("#err_wrap").html('<div class="alert alert-danger mt-3" role="alert">Account not exists !!</div>');
                  }
                  if(result == "Invalid_info")
                  {
                     jQuery("#err_wrap").html('<div class="alert alert-danger mt-3" role="alert">Please enter valid details !!</div>');
                  }
                  if(result == "blocked")
                  {
                     jQuery("#err_wrap").html('<div class="alert alert-danger mt-3" role="alert">Your account has been blocked !!</div>');
                  }
                  if(result == 'success')
                  {
                     jQuery("#loginForm")[0].reset();
                     jQuery("#err_wrap").html('');
                     window.location.href = "index";
                  }
                  jQuery("#login").attr('disabled', false);
                  jQuery("#login").html('Sign in');
               
               }
            });
            
         });

      </script>
   </body>
</html>