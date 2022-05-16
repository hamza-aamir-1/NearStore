<!-- === Header === -->
<?php include_once 'header.php'; ?>
<!-- Header -->

<main class="container my-4">

    <!-- === Breadcrumb === -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Clothing</li>
        </ol>
    </nav>
    <!-- Breadcrumb -->

    <!-- === Sub Category === -->
    <section class="my-5">
        <div class="products_page_filter_header">
            Subcategories
        </div>
        <div class="owl-carousel products_page_subcategory_carousel mt-4">
            <div class="item">
                <div>
                    <a href="products.php" class="text-decoration-none">
                        <div>
                            <img src="assets/img/p-0.jpg" width="100%" alt="" class="rounded-circle">
                        </div>
                        <div class="products_page_product_title text-decoration-none text-center mt-3">
                            Men Collection
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div>
                    <a href="products.php" class="text-decoration-none">
                        <div>
                            <img src="assets/img/p-1.jpg" width="100%" alt="" class="rounded-circle">
                        </div>
                        <div class="products_page_product_title text-decoration-none text-center mt-3">
                            Women Collection
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div>
                    <a href="products.php" class="text-decoration-none">
                        <div>
                            <img src="assets/img/p-3.jpg" width="100%" alt="" class="rounded-circle">
                        </div>
                        <div class="products_page_product_title text-decoration-none text-center mt-3">
                            Kids Collection
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sub Category -->

    <div class="row navbar-expand-lg">
    <!-- === Filter === -->
    <section class="col-lg-3">
        <form action="" class="offcanvas offcanvas-start overflow-auto" tabindex="-1" id="offcanvasFilter" aria-labelledby="offcanvasFilterLabel">
        <div class="">

            <div class="products_page_gray_box products_page_filter_header p-3">
                Filter By
            </div>

            <!-- === Brand === -->
            <div class="product_page_filter_box_border p-3">
                <div class="product_page_filter_heading">
                    Brand
                </div>
                <div class="mt-2">
                    <div>
                        <input type="checkbox" name="" id="products_brand_1">
                        <label for="products_brand_1" class="ps-1 pb-1 product_page_filter_text">
                            Samsung
                            (<span>2</span>)
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="products_brand_2">
                        <label for="products_brand_2" class="ps-1 pb-1 product_page_filter_text">
                            Infinix
                            (<span>17</span>)
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="products_brand_3">
                        <label for="products_brand_3" class="ps-1 pb-1 product_page_filter_text">
                            Huawei
                            (<span>9</span>)
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="products_brand_4">
                        <label for="products_brand_4" class="ps-1 product_page_filter_text">
                            Apple
                            (<span>0</span>)
                        </label>
                    </div>
                </div>
            </div>
            <!-- Brand -->

            <!-- === Price === -->
            <div class="product_page_filter_box_border p-3">
                <div class="product_page_filter_heading">
                    Price
                </div>
                <div class="mt-3">
                    <div class="product_page_filter_price_box">
                        <input value="100" min="100" max="5000" step="100" type="range" class="w-100 product_page_filter_price">
                        <input value="5000" min="100" max="5000" step="100" type="range" class="w-100 product_page_filter_price">
                        <br>
                        <span class="product_page_filter_price_value"></span>
                    </div>
                </div>
            </div>
            <!-- Price -->

            <!-- === Color === -->
            <div class="product_page_filter_box_border p-3">
                <div class="product_page_filter_heading">
                    Color
                </div>
                <div class="mt-2">
                    <div>
                        <input type="radio" name="products_color" id="products_color_1" style="accent-color: red;">
                        <label for="products_color_1" class="ps-1 pb-1 product_page_filter_text">
                            Red
                            (<span>2</span>)
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="products_color" id="products_color_2" style="accent-color: green;">
                        <label for="products_color_2" class="ps-1 pb-1 product_page_filter_text">
                            Green
                            (<span>17</span>)
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="products_color" id="products_color_3" style="accent-color: blue;">
                        <label for="products_color_3" class="ps-1 pb-1 product_page_filter_text">
                            Blue
                            (<span>9</span>)
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="products_color" id="products_color_4" style="accent-color: black;">
                        <label for="products_color_4" class="ps-1 product_page_filter_text">
                            Black
                            (<span>0</span>)
                        </label>
                    </div>
                </div>
            </div>
            <!-- Color -->

            <!-- === Size === -->
            <div class="product_page_filter_box_border p-3">
                <div class="product_page_filter_heading">
                    Size
                </div>
                <div class="mt-2 product_page_filter_size_btn">
                    <button>XS</button>
                    <button>SM</button>
                    <button>MD</button>
                    <button>LG</button>
                    <button>XL</button>
                </div>
            </div>
            <!-- Size -->

        </div>
        </form>
    </section>
    <!-- Filter -->

    <!-- === Products === -->
    <section class="col-lg-9">
        <div>
            
            <!-- Filter -->
            <div class="products_page_gray_box p-3 d-flex justify-content-between">

                <div class="d-flex align-items-center">
                    <!-- Off Canvas Filter -->
                    <div class="pe-2">
                        <button class="shadow-none d-lg-none d-block products_page_filter_btn_offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter">
                            <i class="fa-solid fa-filter pe-1"></i>
                            Filter
                        </button>
                    </div>
                    <!-- Off Canvas Filter -->
                    <div class="product_page_filter_heading pe-2 d-md-block d-none">
                        Sort by:
                    </div>
                    <div>
                        <select name="" id="" class="product_page_filter_sort_dropdown">
                            <option value="">Relevance</option>
                            <option value="">Best Selling</option>
                            <option value="">Name, A to Z</option>
                            <option value="">Name, Z to A</option>
                            <option value="">Price, High to Low</option>
                            <option value="">Price, Low to High</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="product_page_filter_heading pe-2 d-md-block d-none">
                        Show:
                    </div>
                    <div>
                        <select name="" id="" class="product_page_filter_sort_dropdown">
                            <option value="">10</option>
                            <option value="">20</option>
                            <option value="">30</option>
                        </select>
                    </div>
                </div>

            </div>
            <!-- Filter -->

            <!-- Products -->
            <section class="row g-4 py-4">

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-0.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt Black Belt Black Belt Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-30%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-1.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 4,399</span>
                                <span class="products_page_product_price">Rs. 3,999</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-2.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Blue High Hill</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price">Rs. 499</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-1.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Brown Long Shoes</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price">Rs. 2,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-5%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-3.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt Black Belt Black Belt Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-4.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-0.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt Black Belt Black Belt Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-1.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-2.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt Black Belt Black Belt Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-3.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-4.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt Black Belt Black Belt Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-1.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-0.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt Black Belt Black Belt Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Item -->
                <div class="col-md-4 col-6">
                    <div class="products_page_product_box">
                        <div class="products_page_product_img_box">
                            <div class="products_page_product_img_discount">-15%</div>
                            <a href="product-detail.php" class="">
                                <div class="products_page_product_img_overlay_btns">
                                    <form action="">
                                        <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                        <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                    </form>
                                </div>
                                <img src="assets/img/p-1.jpg" class="products_page_product_img" width="100%" alt="">
                                <div class="products_page_product_img_overlay">QUICKVIEW</div>
                            </a>
                        </div>
                        <div class="p-3">
                            <div class="text-truncate">
                                <a href="product-detail.php" class="products_page_product_title">Black Belt</a>
                            </div>
                            <div class="py-1">
                                <span class="text-warning pe-1">
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star fa-sm"></i>
                                    <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                                </span>
                            </div>
                            <div class="">
                                <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                                <span class="products_page_product_price">Rs. 1,699</span>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Products -->

            <div class="products_page_gray_box p-3 d-flex justify-content-between align-items-center">
                <div class="product_page_filter_text">
                    Showing 1-10 of 12 item(s)
                </div>
                <div class="products_page_pagination_boxes d-flex">
                    <a href="#">
                        <div><i class="fa-solid fa-angles-left"></i></div>
                    </a>
                    <a href="#">
                        <div>1</div>
                    </a>
                    <a href="#">
                        <div>2</div>
                    </a>
                    <a href="#">
                        <div>3</div>
                    </a>
                    <a href="#">
                        <div><i class="fa-solid fa-angles-right"></i></div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Products -->
    </div>

</main>

<!-- === Footer === -->
<?php include_once 'footer.php'; ?>
<!-- Footer -->