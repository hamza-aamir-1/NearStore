<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(!isLoggedIn())
{
    redirect('login');
}

$page = basename($_SERVER['PHP_SELF']);

switch($page)
{
    case "index.php":
        $page_title = "Dashboard";
        break;
    
    case "orders.php":
        $page_title = "Orders";
        break;
        
    case "add_product.php":
        $page_title = "Add Product";
        break;

    case "products.php":
        $page_title = "Products";
        break;
    
    case "categorys.php":
        $page_title = "Categorys";
        break;
    
    case "prod_weight.php":
        $page_title = "Product Weight";
        break;
        
    case "services.php":
        $page_title = "Services";
        break;

    case "gallery.php":
        $page_title = "Gallery";
        break;
   
    case "downloads.php":
      $page_title = "Downloads";
      break;

   case "users.php":
      $page_title = "Users";
      break;

   case "reviews.php":
      $page_title = "Reviews";
      break;

   case "subscribers.php":
      $page_title = "Subscribers";
      break;

   case "change_email.php":
      $page_title = "Change Email";
      break;
        
    default:
        $page_title = "Dashboard";
        break;
}

?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?= $page_title; ?></title>
      <link rel="icon" href="images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index"><img src="images/logo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index"><img src="images/logo.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>