<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Custom Style Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Media File Link -->
    <link rel="stylesheet" href="assets/css/media.css">
    <!-- Font Awesome Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div id="header">
        <div class="container-fluid px-5 py-2 border-bottom d-none d-sm-block top_nav">
            <div class="row">

                <div class="col-5">
                    <small>WELCOME TO NEARSTORE</small>
                </div>

                <div class="col-7 text-end">
                    <select name="country">
                        <option value="USD">USD</option>
                        <option value="UK">UK</option>
                    </select>
                    <select name="lang">
                        <option value="ENG">ENG</option>
                        <option value="link1">Link 1</option>
                        <option value="link2">Link 2</option>
                        <option value="link3">Link 3</option>
                    </select>
                    <a href="#" class="ms-3 border-start ps-4"><small>Blog</small></a>
                    <a href="contact_us.php" class="ms-3"><small>Contact Us</small></a>
                    <a href="account.php" class="ms-3"><small><i class="fa-regular fa-circle-user"></i> Sign in / Register</small></a>
                </div>

            </div>
        </div>

        <div class="container-fluid border-bottom  px-5 py-2 HC_WRAP">
            <div class="row">
                <div class="col-2">
                <span class="d-block d-sm-none fs-4" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"><i class="fa fa-bars"></i></span>
                    <img src="assets/media/logo.png" class="img-fluid d-none d-sm-block" alt="LOGO">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="d-none d-sm-block w-100">
                        <div class="search_box">
                            <button type="button"><i class="fa fa-search"></i></button>
                            <input type="text" placeholder="Search anything ...">
                        </div>
                    </div>
                </div>
                <div class="col-4 H-menu_wrap">
                    <div class="HMW_box">
                        <p class="d-none d-sm-block"><i class="fa fa-phone"></i> &nbsp;03001234567</p>
                    </div>
                    <div class="HMW_box">
                        <a href="wishlist.php">
                            <p><i class="fa-regular fa-heart"></i><br><small class="d-none d-sm-block">Wishlist</small></p>
                        </a>
                    </div>
                    <div class="HMW_box">
                        <a href="#">
                            <p><i class="fa fa-code-compare"></i><br><small class="d-none d-sm-block">Compare</small></p>
                        </a>
                    </div>
                    <div class="HMW_box">
                        <a href="cart.php">
                            <p><i class="fa fa-cart-shopping"></i><br><small class="d-none d-sm-block">Cart</small></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark px-5 py-2 HB_navbar d-none d-sm-block">
            <ul>
                <li>
                    <small><i class="fa fa-bars"></i> Browse Categories <i class="fa fa-angle-down"></i></small>
                    <ul>
                        <li><a href="#"><i class="fa fa-shirt"></i>&nbsp;&nbsp; Fashion</a></li>
                        <li><a href="#"><i class="fa fa-house"></i>&nbsp;&nbsp; Home & Garden</a></li>
                        <li><a href="#"><i class="fa fa-plug-circle-bolt"></i>&nbsp;&nbsp; Electronics</a></li>
                        <li><a href="#"><i class="fa fa-tv"></i>&nbsp;&nbsp; Furniture</a></li>
                        <li><a href="#"><i class="fa fa-heart-pulse"></i>&nbsp;&nbsp; Health & Beauty</a></li>
                        <li><a href="#"><i class="fa fa-gift"></i>&nbsp;&nbsp; Gifts</a></li>
                        <li><a href="#"><i class="fa fa-gamepad"></i>&nbsp;&nbsp; Games & Toys</a></li>
                        <li><a href="#"><i class="fa fa-burger"></i>&nbsp;&nbsp; Cooking & Foods</a></li>
                        <li><a href="#"><i class="fa fa-mobile-screen"></i>&nbsp;&nbsp; Smart Phones</a></li>
                        <li><a href="#"><i class="fa fa-camera"></i>&nbsp;&nbsp; Cameras</a></li>
                        <li><a href="#"><i class="fa fa-gem"></i>&nbsp;&nbsp; Accessories</a></li>
                        <li><a href="#"><strong class="fw-bold">View All Categories</strong></a></li>
                    </ul>
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#">Vendor</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="#">Track Order</a></li>
                <li><a href="#">Daily Deals</a></li>
            </ul>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">MENU</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            
                <div class="input-group mb-4 mt-2">
                    <input type="text" class="form-control" placeholder="Search Anything ..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tabs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Cate-tab" data-bs-toggle="tab" data-bs-target="#Cate" type="button" role="tab" aria-controls="Cate" aria-selected="false">Categories</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <ul class="sidebar_ul mt-3">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Vendor</a></li>
                            <li><a href="#">Track Order</a></li>
                            <li><a href="#">Daily Deals</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>

                    </div>
                    <div class="tab-pane fade" id="Cate" role="tabpanel" aria-labelledby="Cate-tab">
                        <ul class="sidebar_ul mt-3">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Home & Garden</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Health & Beauty</a></li>
                            <li><a href="#">Gifts</a></li>
                            <li><a href="#">Games & Toys</a></li>
                            <li><a href="#">Cooking & Food</a></li>
                            <li><a href="#">Smart Phones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#"><strong>View all Categories</strong></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>