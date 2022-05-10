<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Near Store | www.nearstore.com</title>

    <!-- === Font Awesome CDN === -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome CDN -->

    <!-- === Bootstrap Icons === -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap Icons -->

    <!-- === Bootstrap 5.1.3 CSS === -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->

    <!-- === CSS === -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->
</head>
<body class="bg-light">

<!-- === Welcome NearStore === -->
<header class="d-flex align-items-center px-4 py-3 home_welcome_ns">
    <div class="text-uppercase home_welcome_ns_heading">
        Welcome to NearStore
    </div>
    <div class="d-flex align-items-center ms-auto">
        <div class="me-4 d-none d-md-block">
            <a href="#" class="home_welcome_ns_link">Contact Us</a>
        </div>
        <div class="me-4 d-none d-md-block">
            <a href="#" class="home_welcome_ns_link">My Account</a>
        </div>
        <div class="d-none d-md-block">
            <i class="fa-solid fa-circle-user pe-1 fa-lg"></i>
            <a href="#" class="home_welcome_ns_link">Sign In</a>
            <span> / </span>
            <a href="#" class="home_welcome_ns_link">Register</a>
        </div>
        <div class="dropdown d-block d-md-none">
            <a class="" href="#" role="button" id="home_welcome_ns_drop" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-circle-user home_welcome_ns_drop_icon"></i>
            </a>
            <ul class="dropdown-menu p-0 home_welcome_ns_drop_box" aria-labelledby="home_welcome_ns_drop">
              <li><a class="dropdown-item" href="#">My Account</a></li>
              <li><a class="dropdown-item" href="#">Sign In</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
              <li><a class="dropdown-item" href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Welcome NearStore -->

<!-- === Search Header === -->

    <!-- for small screen -->
    <header class="px-4 pt-4 d-flex flex-row align-items-center justify-content-between d-block d-lg-none">
        <!-- Logo -->
        <div>
            <div class="home_logo">NEARSTORE</div>
        </div>
        <!-- Call Icon -->
        <div class="ps-2 pe-lg-3 home_search_header_call_box">
            <a href="#" class="text-decoration-none d-flex flex-row align-items-center">
                <div>
                    <img src="assets/img/telephone.png" width="30px" alt="">
                </div>
                <div class="ps-2">
                    <div class="home_search_header_icon_text">
                        Call us at:
                    </div>
                    <div class="home_search_header_call_number">
                        +92 301 0069442
                    </div>
                </div>
            </a>
        </div>
    </header>

<header class="px-4 py-4 d-flex flex-row align-items-center justify-content-between">
    
    <!-- Logo -->
    <div class="d-none d-lg-block">
        <div class="home_logo">NEARSTORE</div>
    </div>

    <!-- Search -->
    <div class="mx-auto">
        <form action="" class="d-flex align-items-center home_search_box">
            <div class="dropdown home_search_box_dropdown">
                <button class="btn dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  All Categories
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div>
                <input type="search" class="home_search_box_input" placeholder="Search" name="" id="">
            </div>
            <div>
                <button type="submit" class="btn shadow-none text-secondary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Icons -->
    <div class="d-flex flex-row align-items-end">

        <div class="ps-2 pe-3 home_search_header_call_box d-none d-lg-block">
            <a href="#" class="text-decoration-none d-flex flex-row align-items-center">
                <div>
                    <img src="assets/img/telephone.png" width="30px" alt="">
                </div>
                <div class="ps-2">
                    <div class="home_search_header_icon_text">
                        Call us at:
                    </div>
                    <div class="home_search_header_call_number">
                        +92 301 0069442
                    </div>
                </div>
            </a>
        </div>

        <div class="ps-3 d-none d-lg-block">
            <a href="#" class="text-center text-decoration-none">
                <div><img src="assets/img/love.png" width="30px" alt=""></div>
                <div class="home_search_header_icon_text">Wishlist</div>
            </a>
        </div>

        <div class="ps-3 d-none d-lg-block">
            <a href="#" class="text-center text-decoration-none">
                <div><img src="assets/img/shopping-cart.png" width="30px" alt=""></div>
                <div class="home_search_header_icon_text">Cart</div>
            </a>
        </div>

    </div>

</header>
<!-- Search Header -->

<!-- === Navbar === -->
<nav class="navbar navbar-expand-lg py-0 home_navbar">
    <div class="container-fluid px-4">

    <a class="navbar-brand m-0 home_navbar_brand dropdown-toggle" href="#" id="browseCategoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-bars pe-1"></i>
        Browse Categories
    </a>
    <ul class="dropdown-menu home_navbar_browse_list" aria-labelledby="browseCategoriesDropdown">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>

    <button class="navbar-toggler shadow-none home_navbar_toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="fa-solid fa-bars pe-1 navbar-toggler-icon home_navbar_toggler_icon"></i>
    </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

        <ul class="navbar-nav justify-content-start flex-grow-1">
            <li class="nav-item home_nav_item">
              <a class="nav-link home_nav_link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item home_nav_item dropdown">
              <a class="nav-link home_nav_link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item home_nav_item dropdown">
                <a class="nav-link home_nav_link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Vendor
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            <li class="nav-item home_nav_item">
                <a class="nav-link home_nav_link" href="#">About Us</a>
            </li>
        </ul>

        <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item home_nav_item">
                <a class="nav-link home_nav_link active" aria-current="page" href="#">
                    <i class="bi bi-geo-alt pe-2" style="font-size: 18px;"></i>
                    Track Order
                </a>
            </li>
            <li class="nav-item home_nav_item">
                <a class="nav-link home_nav_link d-flex align-items-center" href="#">
                    <i class="bi bi-bag-heart pe-2" style="font-size: 18px;"></i>
                    Daily Deals
                </a>
            </li>
            <li class="nav-item home_nav_item d-block d-lg-none">
                <a class="nav-link home_nav_link d-flex align-items-center" href="#">
                    <i class="bi bi-heart pe-2" style="font-size: 18px;"></i>
                    Wishlist
                </a>
            </li>
            <li class="nav-item home_nav_item d-block d-lg-none">
                <a class="nav-link home_nav_link d-flex align-items-center" href="#">
                    <i class="bi bi-cart-plus pe-2" style="font-size: 18px;"></i>
                    Cart
                </a>
            </li>
        </ul>

        </div>
      </div>

    </div>
</nav>
<!-- Navbar -->

<!-- === Policy Boxes === -->
<section class="container-fluid px-4 my-5">
<div class="row g-3">

    <!-- Money Back -->
    <div class="col-xl-3 col-sm-6">
        <div class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes">
            <div>
                <img src="assets/img/refund.png" width="50px" alt="">
            </div>
            <div class="ps-2">
                <div class="home_policy_box_heading">Money Back Guarantee</div>
                <div class="home_policy_box_text">Any back within 3 days</div>
            </div>
        </div>
    </div>

    <!--Customer Support -->
    <div class="col-xl-3 col-sm-6">
        <div class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes">
            <div>
                <img src="assets/img/support.png" width="40px" alt="">
            </div>
            <div class="ps-2">
                <div class="home_policy_box_heading">Customer Support</div>
                <div class="home_policy_box_text">Call or email us 24/7</div>
            </div>
        </div>
    </div>

    <!-- Free Shipping -->
    <div class="col-xl-3 col-sm-6">
        <div class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes">
            <div>
                <img src="assets/img/free-shipping.png" width="50px" alt="">
            </div>
            <div class="ps-2">
                <div class="home_policy_box_heading">Free Shipping & Returns</div>
                <div class="home_policy_box_text">For all orders over 99$</div>
            </div>
        </div>
    </div>

    <!-- Secure Payment -->
    <div class="col-xl-3 col-sm-6">
        <div class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes">
            <div>
                <img src="assets/img/credit-card.png" width="40px" alt="">
            </div>
            <div class="ps-2">
                <div class="home_policy_box_heading">Secure Payment</div>
                <div class="home_policy_box_text">We ensure secure payment</div>
            </div>
        </div>
    </div>

</div>
</section>
<!-- Policy Boxes -->

<!-- === Hot Offers === -->
<section class="container-fluid px-4 mb-5">

<!-- See All Items -->
<div class="mb-4 position-relative d-flex align-items-end justify-content-between">
    <div class="home_see_all_items_heading">
        Hot offers for you
    </div>
    <div class="home_see_all_items_link">
        <a href="#">See all Items</a>
    </div>
</div>

<div class="row g-5">

<div class="col-md-6">
    <div class="home_hot_offers_box">
    <a href="home.html" class="text-decoration-none">
        <div class="row g-0">
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div>
                    <div>
                        <img src="assets/img/p-0.jpg" width="100%" alt="">
                    </div>
                    <div class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer">
                        <div>
                            <div class="home_hot_offers_timer_time">02</div>
                            <div class="home_hot_offers_timer_text">Days</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">00</div>
                            <div class="home_hot_offers_timer_text">Hrs</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">05</div>
                            <div class="home_hot_offers_timer_text">Mins</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">35</div>
                            <div class="home_hot_offers_timer_text">Secs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div class="h-100 px-4 d-flex flex-column justify-content-between">
                    <div class="pt-3">
                        <div class="home_hot_offers_title">Lorem ipsum dolor sit amet</div>
                        <div class="pt-2">
                            <span class="home_hot_offers_stars pe-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <span class="home_hot_offers_text">(5 Reviews)</span>
                        </div>
                        <div class="home_hot_offers_price pt-2">1600 Rs</div>
                        <div class="home_hot_offers_text pt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat odio qui quo velit aliquid soluta similique sint ratione perferendis.
                        </div>
                    </div>
                    <div class="py-3">
                        <form action="" class="d-flex justify-content-between home_hot_offers_btns">
                            <button class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2">Add to Cart</button>
                            <button class="btn shadow-none"><img src="assets/img/love.png" width="25px" alt=""></button>
                            <button class="btn shadow-none"><img src="assets/img/compare.png" width="27px" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

<div class="col-md-6">
    <div class="home_hot_offers_box">
    <a href="home.html" class="text-decoration-none">
        <div class="row g-0">
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div>
                    <div>
                        <img src="assets/img/p-1.jpg" width="100%" alt="">
                    </div>
                    <div class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer">
                        <div>
                            <div class="home_hot_offers_timer_time">02</div>
                            <div class="home_hot_offers_timer_text">Days</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">00</div>
                            <div class="home_hot_offers_timer_text">Hrs</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">05</div>
                            <div class="home_hot_offers_timer_text">Mins</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">35</div>
                            <div class="home_hot_offers_timer_text">Secs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div class="h-100 px-4 d-flex flex-column justify-content-between">
                    <div class="pt-3">
                        <div class="home_hot_offers_title">Lorem ipsum dolor sit amet</div>
                        <div class="pt-2">
                            <span class="home_hot_offers_stars pe-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <span class="home_hot_offers_text">(5 Reviews)</span>
                        </div>
                        <div class="home_hot_offers_price pt-2">1600 Rs</div>
                        <div class="home_hot_offers_text pt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat odio qui quo velit aliquid soluta similique sint ratione perferendis.
                        </div>
                    </div>
                    <div class="py-3">
                        <form action="" class="d-flex justify-content-between home_hot_offers_btns">
                            <button class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2">Add to Cart</button>
                            <button class="btn shadow-none"><img src="assets/img/love.png" width="25px" alt=""></button>
                            <button class="btn shadow-none"><img src="assets/img/compare.png" width="27px" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

<div class="col-md-6">
    <div class="home_hot_offers_box">
    <a href="home.html" class="text-decoration-none">
        <div class="row g-0">
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div>
                    <div>
                        <img src="assets/img/p-2.jpg" width="100%" alt="">
                    </div>
                    <div class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer">
                        <div>
                            <div class="home_hot_offers_timer_time">02</div>
                            <div class="home_hot_offers_timer_text">Days</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">00</div>
                            <div class="home_hot_offers_timer_text">Hrs</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">05</div>
                            <div class="home_hot_offers_timer_text">Mins</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">35</div>
                            <div class="home_hot_offers_timer_text">Secs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div class="h-100 px-4 d-flex flex-column justify-content-between">
                    <div class="pt-3">
                        <div class="home_hot_offers_title">Lorem ipsum dolor sit amet</div>
                        <div class="pt-2">
                            <span class="home_hot_offers_stars pe-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <span class="home_hot_offers_text">(5 Reviews)</span>
                        </div>
                        <div class="home_hot_offers_price pt-2">1600 Rs</div>
                        <div class="home_hot_offers_text pt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat odio qui quo velit aliquid soluta similique sint ratione perferendis.
                        </div>
                    </div>
                    <div class="py-3">
                        <form action="" class="d-flex justify-content-between home_hot_offers_btns">
                            <button class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2">Add to Cart</button>
                            <button class="btn shadow-none"><img src="assets/img/love.png" width="25px" alt=""></button>
                            <button class="btn shadow-none"><img src="assets/img/compare.png" width="27px" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

<div class="col-md-6">
    <div class="home_hot_offers_box">
    <a href="home.html" class="text-decoration-none">
        <div class="row g-0">
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div>
                    <div>
                        <img src="assets/img/p-3.jpg" width="100%" alt="">
                    </div>
                    <div class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer">
                        <div>
                            <div class="home_hot_offers_timer_time">02</div>
                            <div class="home_hot_offers_timer_text">Days</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">00</div>
                            <div class="home_hot_offers_timer_text">Hrs</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">05</div>
                            <div class="home_hot_offers_timer_text">Mins</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">35</div>
                            <div class="home_hot_offers_timer_text">Secs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div class="h-100 px-4 d-flex flex-column justify-content-between">
                    <div class="pt-3">
                        <div class="home_hot_offers_title">Lorem ipsum dolor sit amet</div>
                        <div class="pt-2">
                            <span class="home_hot_offers_stars pe-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <span class="home_hot_offers_text">(5 Reviews)</span>
                        </div>
                        <div class="home_hot_offers_price pt-2">1600 Rs</div>
                        <div class="home_hot_offers_text pt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat odio qui quo velit aliquid soluta similique sint ratione perferendis.
                        </div>
                    </div>
                    <div class="py-3">
                        <form action="" class="d-flex justify-content-between home_hot_offers_btns">
                            <button class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2">Add to Cart</button>
                            <button class="btn shadow-none"><img src="assets/img/love.png" width="25px" alt=""></button>
                            <button class="btn shadow-none"><img src="assets/img/compare.png" width="27px" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

<div class="col-md-6">
    <div class="home_hot_offers_box">
    <a href="home.html" class="text-decoration-none">
        <div class="row g-0">
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div>
                    <div>
                        <img src="assets/img/p-4.jpg" width="100%" alt="">
                    </div>
                    <div class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer">
                        <div>
                            <div class="home_hot_offers_timer_time">02</div>
                            <div class="home_hot_offers_timer_text">Days</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">00</div>
                            <div class="home_hot_offers_timer_text">Hrs</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">05</div>
                            <div class="home_hot_offers_timer_text">Mins</div>
                        </div>
                        <div>
                            <div class="home_hot_offers_timer_time">35</div>
                            <div class="home_hot_offers_timer_text">Secs</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-6">
                <div class="h-100 px-4 d-flex flex-column justify-content-between">
                    <div class="pt-3">
                        <div class="home_hot_offers_title">Lorem ipsum dolor sit amet</div>
                        <div class="pt-2">
                            <span class="home_hot_offers_stars pe-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <span class="home_hot_offers_text">(5 Reviews)</span>
                        </div>
                        <div class="home_hot_offers_price pt-2">1600 Rs</div>
                        <div class="home_hot_offers_text pt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat odio qui quo velit aliquid soluta similique sint ratione perferendis.
                        </div>
                    </div>
                    <div class="py-3">
                        <form action="" class="d-flex justify-content-between home_hot_offers_btns">
                            <button class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2">Add to Cart</button>
                            <button class="btn shadow-none"><img src="assets/img/love.png" width="25px" alt=""></button>
                            <button class="btn shadow-none"><img src="assets/img/compare.png" width="27px" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>

</div>
</section>
<!-- Hot Offers -->

<!-- === Best Selling === -->
<section class="container-fluid px-4 mb-5">

<!-- See All Items -->
<div class="mb-4 position-relative d-flex align-items-end justify-content-between">
    <div class="home_see_all_items_heading">
        Best Selling
    </div>
    <div class="home_see_all_items_link">
        <a href="#">See all Items</a>
    </div>
</div>

<div class="row g-5">

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-0.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-1.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-2.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-3.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-4.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-0.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-1.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-2.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-3.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="home_best_selling_box">
            <div class="home_best_selling_img">
                <img src="assets/img/p-4.jpg" width="100%" alt="">
            </div>
            <div class="py-3 px-3">
                <div class="home_best_selling_heading">
                    <a href="#" class="">Lorem ipsum</a>
                </div>
                <div class="home_best_selling_price">1500 Rs</div>
            </div>
        </div>
    </div>

</div>
</section>
<!-- Best Selling -->

<!-- === Footer === -->
<footer class="footer py-5">
<div class="container-fluid">
<div class="row">

    <section class="col-lg-5 col-12 px-lg-5 px-4 pb-5 pb-lg-0 text-center text-lg-start">
        <div>
            <div class="footer_heading pb-3">
                About NearStore
            </div>
            <div class="footer_about pt-1">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, ab. Provident eum accusantium dolorum nulla, fuga autem rerum commodi beatae amet similique et repellendus dignissimos tempora delectus saepe quo iure.
            </div>
        </div>
    </section>

    <section class="col-lg-3 col-6 px-lg-5 px-4 text-center text-lg-start">
        <div>
            <div class="footer_heading pb-3">
                My Account
            </div>
            <div class="d-flex flex-column pt-1 footer_list">
                <a href="#" class="pb-2">Product Support</a>
                <a href="#" class="pb-2">Checkout</a>
                <a href="#" class="pb-2">Shopping Cart</a>
                <a href="#" class="pb-2">Wishlist</a>
                <a href="#" class="pb-2">Redeem Voucher</a>
            </div>
        </div>
    </section>

    <section class="col-lg-3 col-6 px-lg-5 px-4 text-center text-lg-start">
        <div>
            <div class="footer_heading pb-3">
                Quick Links
            </div>
            <div class="d-flex flex-column pt-1 footer_list">
                <a href="#" class="pb-2">Store Location</a>
                <a href="#" class="pb-2">My Account</a>
                <a href="#" class="pb-2">Orders Tracking</a>
                <a href="#" class="pb-2">FAQs</a>
            </div>
        </div>
    </section>

</div>
</div>
</footer>
<!-- Footer -->

<!-- === Bootstrap 5.1.3 JS === -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS -->

<!-- === JS === -->
<script src="assets/js/index.js"></script>
<!-- JS -->

</body>
</html>