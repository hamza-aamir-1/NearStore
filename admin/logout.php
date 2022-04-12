<?php 
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

$conn = connect_db();

if(!isLoggedIn())
{
    redirect('index');
}

if(isset($_POST['confirm']))
{
    $conn = connect_db();
    if(isset($_POST['alldevices']))
    {
        mysqli_query($conn, "DELETE FROM `login_tokens` WHERE `user_id`=".isLoggedIn()."");
        redirect('index');
    }
    else
    {
        if(isset($_COOKIE['ADID']))
        {
            mysqli_query($conn, "DELETE FROM `login_tokens` WHERE `token`='".sha1($_COOKIE['ADID'])."'");
        }
        setcookie("ADID", '1', time()-3600);
        setcookie("ADID_", '1', time()-3600);
        redirect('index');
    }
    mysqli_close($conn);
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Logout</title>
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
         
            <section class="wrapper">
                <div class="container pt-5">
                    <div class="col-sm-8 offset-sm-2 col-lg-7 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                        <form id="forget_pass" class="rounded bg-white mt-5" method="POST" action="logout">
                            <h3 class="text-dark fw-bolder fs-5 mb-2">Logout of your account?</h3>
                            <p>Are you sure you'd like to logout?</p>
                            <div class="mb-3">
                                <input type="checkbox" name="alldevices" value="alldevices"> Logout of all devices?
                            </div>
                            <button type="submit" name="confirm" class="btn btn-primary submit_btn w-100 my-4">Logout</button>
                        </form>
                    </div>
                </div>
            </section>

         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script src="assets/js/inspectBlock.js"></script>
   </body>
</html>