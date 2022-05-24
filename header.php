<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Near Store | www.nearstore.com</title>

    <!-- === Font Awesome CDN === -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Font Awesome CDN -->

    <!-- === Bootstrap Icons === -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap Icons -->

    <!-- === Bootstrap 5.1.3 CSS === -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Bootstrap CSS -->

    <!-- === Owl Carousel CSS === -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Carousel CSS -->

    <!-- === CSS === -->
    <link rel="stylesheet" href="assets/css/style.css" />
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
          <a
            class=""
            href="#"
            role="button"
            id="home_welcome_ns_drop"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fa-solid fa-circle-user home_welcome_ns_drop_icon"></i>
          </a>
          <ul
            class="dropdown-menu p-0 home_welcome_ns_drop_box"
            aria-labelledby="home_welcome_ns_drop"
          >
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
    <header
      class="px-4 pt-4 d-flex flex-row align-items-center justify-content-between d-block d-lg-none"
    >
      <!-- Logo -->
      <div>
        <div class="home_logo">NEARSTORE</div>
      </div>
      <!-- Call Icon -->
      <div class="ps-2 pe-lg-3 home_search_header_call_box">
        <a
          href="#"
          class="text-decoration-none d-flex flex-row align-items-center"
        >
          <div>
            <img src="assets/img/telephone.png" width="30px" alt="" />
          </div>
          <div class="ps-2">
            <div class="home_search_header_icon_text">Call us at:</div>
            <div class="home_search_header_call_number">+92 301 0069442</div>
          </div>
        </a>
      </div>
    </header>

    <header
      class="px-4 py-4 d-flex flex-row align-items-center justify-content-between"
    >
      <!-- Logo -->
      <div class="d-none d-lg-block flex-grow-0">
        <div class="home_logo">NEARSTORE</div>
      </div>

      <!-- Search -->
      <div class="mx-auto flex-grow-1 px-xl-5 px-md-4 px-2">
        <form action="" class="d-flex align-items-center home_search_box">
          <div class="dropdown home_search_box_dropdown">
            <button
              class="btn dropdown-toggle shadow-none"
              type="button"
              id="dropdownMenuButton1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              All Categories
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
          <div class="w-100">
            <input
              type="search"
              class="home_search_box_input"
              placeholder="Search"
              name=""
              id="homeSearch"
              onkeyup="homeSearchFun()"
            />
          </div>
          <div>
            <button type="submit" class="btn shadow-none text-secondary">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Icons -->
      <div class="d-flex flex-row align-items-end flex-grow-0">
        <div class="ps-2 pe-3 home_search_header_call_box d-none d-lg-block">
          <a
            href="#"
            class="text-decoration-none d-flex flex-row align-items-center"
          >
            <div>
              <img src="assets/img/telephone.png" width="30px" alt="" />
            </div>
            <div class="ps-2">
              <div class="home_search_header_icon_text">Call us at:</div>
              <div class="home_search_header_call_number">+92 301 0069442</div>
            </div>
          </a>
        </div>

        <div class="ps-3 d-none d-lg-block">
          <a href="#" class="text-center text-decoration-none">
            <div><img src="assets/img/love.png" width="30px" alt="" /></div>
            <div class="home_search_header_icon_text">Wishlist</div>
          </a>
        </div>

        <div class="ps-3 d-none d-lg-block">
          <a href="#" class="text-center text-decoration-none">
            <div class="position-relative">
              <img src="assets/img/shopping-cart.png" width="30px" alt="" />
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill home_search_header_cart_badge">
                9
                <span class="visually-hidden">unread messages</span>
              </span>
            </div>
            <div class="home_search_header_icon_text">
              Cart
            </div>
          </a>
        </div>
      </div>
    </header>
    <!-- Search Header -->

    <!-- === Navbar === -->
    <nav class="navbar navbar-expand-lg py-0 home_navbar">
      <div class="container-fluid px-4">

        <!-- Browse Categories Dropdown -->
        <div class="btn-group">
          <button
            class="p-0 home_navbar_brand"
            type="button"
            id="dropdownMenuClickable"
            data-bs-toggle="dropdown"
            data-bs-auto-close="false"
            aria-expanded="false"
          >
          <i class="fa-solid fa-bars fa-lg pe-1"></i>
            Browse Categories
          </button>
          <ul class="dropdown-menu home_navbar_browse_list p-0" aria-labelledby="dropdownMenuClickable">
            <li><a class="dropdown-item" href="products.php">Arts, Crafts & Sewing</a></li>
            <li><a class="dropdown-item" href="products.php">Home & Kitchen</a></li>
            <li><a class="dropdown-item" href="products.php">Office supplies</a></li>
            <li><a class="dropdown-item" href="products.php">Pet supplies</a></li>
            <li><a class="dropdown-item" href="products.php">Books, Magazines & Newspapers</a></li>
            <li>
                    <div class="dropdown dropend" id="dropendRemove">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="" id="browseCategoriesSubDropdownShirts" role="button"  data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            Shirts
                            <i class="fa-solid fa-angle-right ps-1"></i>
                        </a>
                        <ul class="dropdown-menu home_navbar_browse_list p-0 home_navbar_browse_list_responsive" aria-labelledby="browseCategoriesSubDropdownShirts">
                            <li>
                                <div class="dropdown dropend" id="dropendRemove">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" id="browseCategoriesSubDropdownShirts" role="button"  data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                        Shirts
                                        <i class="fa-solid fa-angle-right ps-1"></i>
                                    </a>
                                    <ul class="dropdown-menu home_navbar_browse_list p-0 home_navbar_browse_list_responsive" aria-labelledby="browseCategoriesSubDropdownShirts">
                                        <li><a class="dropdown-item" href="products.php">Women Collection</a></li>
                                        <li><a class="dropdown-item" href="products.php">Kids Collection</a></li>
                                        <li>
                                            <div class="dropdown dropend" id="dropendRemove">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" id="browseCategoriesSubDropdownShirts" role="button"  data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Shirts
                                                    <i class="fa-solid fa-angle-right ps-1"></i>
                                                </a>
                                                <ul class="dropdown-menu home_navbar_browse_list p-0 home_navbar_browse_list_responsive" aria-labelledby="browseCategoriesSubDropdownShirts">
                                                    <li><a class="dropdown-item" href="products.php">Men Collection</a></li>
                                                    <li><a class="dropdown-item" href="products.php">Women Collection</a></li>
                                                    <li><a class="dropdown-item" href="products.php">Kids Collection</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="dropdown-item" href="products.php">Pants</a></li>
                            <li><a class="dropdown-item" href="products.php">Shoes</a></li>
                        </ul>
                    </div>
        </li>
        <li><a class="dropdown-item" href="products.php">Beauty & Personal Care</a></li>
        <li><a class="dropdown-item" href="products.php">Toys & Games</a></li>
        <li><a class="dropdown-item" href="products.php">Garden & Outdoor</a></li>
        <li><a class="dropdown-item" href="products.php">Exercise/Fitness supplies</a></li>
          </ul>
        </div>

        <button
          class="navbar-toggler shadow-none home_navbar_toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
        >
          <i
            class="fa-solid fa-bars pe-1 navbar-toggler-icon home_navbar_toggler_icon"
          ></i>
        </button>

        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NearStore</h5>
            <button
              type="button"
              class="btn-close text-reset shadow-none"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1">
              <li class="nav-item home_nav_item">
                <a
                  class="nav-link home_nav_link active"
                  aria-current="page"
                  href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item home_nav_item dropdown">
                <a
                  class="nav-link home_nav_link dropdown-toggle"
                  href="#"
                  id="offcanvasNavbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Shop
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="offcanvasNavbarDropdown"
                >
                  <li><a class="dropdown-item" href="products.php">Action</a></li>
                  <li><a class="dropdown-item" href="products.php">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="products.php">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item home_nav_item dropdown">
                <a
                  class="nav-link home_nav_link dropdown-toggle"
                  href="#"
                  id="offcanvasNavbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Vendor
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="offcanvasNavbarDropdown"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item home_nav_item">
                <a class="nav-link home_nav_link" href="#">About Us</a>
              </li>
            </ul>

            <ul class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item home_nav_item">
                <a
                  class="nav-link home_nav_link active"
                  aria-current="page"
                  href="track-order.php"
                >
                  <i class="bi bi-geo-alt pe-2" style="font-size: 18px"></i>
                  Track Order
                </a>
              </li>
              <li class="nav-item home_nav_item">
                <a
                  class="nav-link home_nav_link d-flex align-items-center"
                  href="products.php"
                >
                  <i class="bi bi-bag-heart pe-2" style="font-size: 18px"></i>
                  Daily Deals
                </a>
              </li>
              <li class="nav-item home_nav_item d-block d-lg-none">
                <a
                  class="nav-link home_nav_link d-flex align-items-center"
                  href="#"
                >
                  <i class="bi bi-heart pe-2" style="font-size: 18px"></i>
                  Wishlist
                </a>
              </li>
              <li class="nav-item home_nav_item d-block d-lg-none">
                <a
                  class="nav-link home_nav_link d-flex align-items-center"
                  href="#"
                >
                  <i class="bi bi-cart-plus pe-2" style="font-size: 18px"></i>
                  Cart
                  <span class="badge ms-2 home_navbar_offcanvas_cart_badge">9</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar -->