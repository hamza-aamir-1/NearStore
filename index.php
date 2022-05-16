<!-- === Header === -->
<?php include_once 'header.php'; ?>
<!-- Header -->

<!-- === Carousel === -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators hero_carousel_indicator_btns">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active hero_carousel_indicator_btn_1"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          class="hero_carousel_indicator_btn_2"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          class="hero_carousel_indicator_btn_3"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="hero_carousel_text_box">
            <div class="hero_carousel_text_1">From Online Store</div>
            <div class="hero_carousel_text_2 pt-2">Nike Shoes</div>
            <div class="hero_carousel_text_3 pt-1">Recommended</div>
            <div class="hero_carousel_text_4 pt-2">
              Free Shipping on all orders over Rs. 1000
            </div>
            <div class="hero_carousel_btn pt-3">
              <a class="btn" href="product-detail.php">
                Shop Now
                <i class="fa-solid fa-arrow-right-long ps-2 fa-lg"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="hero_carousel_text_box">
            <div class="hero_carousel_text_1">From Online Store</div>
            <div class="hero_carousel_text_2 pt-2">Nike Shoes</div>
            <div class="hero_carousel_text_3 pt-1">Recommended</div>
            <div class="hero_carousel_text_4 pt-2">
              Free Shipping on all orders over Rs. 1000
            </div>
            <div class="hero_carousel_btn">
              <a class="btn" href="product-detail.php">
                Shop Now
                <i class="fa-solid fa-arrow-right-long ps-2 fa-lg"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="hero_carousel_text_box">
            <div class="hero_carousel_text_1">From Online Store</div>
            <div class="hero_carousel_text_2 pt-2">Nike Shoes</div>
            <div class="hero_carousel_text_3 pt-1">Recommended</div>
            <div class="hero_carousel_text_4 pt-2">
              Free Shipping on all orders over Rs. 1000
            </div>
            <div class="hero_carousel_btn pt-3">
              <a class="btn" href="product-detail.php">
                Shop Now
                <i class="fa-solid fa-arrow-right-long ps-2 fa-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev hero_carousel_prev_next_icon"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="visually-hidden">Previous</span>
        <i class="fa-solid fa-chevron-left fa-lg"></i>
      </button>
      <button
        class="carousel-control-next hero_carousel_prev_next_icon"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span class="visually-hidden">Next</span>
        <i class="fa-solid fa-chevron-right fa-lg"></i>
      </button>
    </div>
    <!-- Carousel -->

    <!-- === Policy Boxes === -->
    <section class="container-fluid px-4 my-5">
      <div class="row g-3">
        <!-- Money Back -->
        <div class="col-xl-3 col-sm-6">
          <div
            class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes"
          >
            <div>
              <img src="assets/img/refund.png" width="50px" alt="" />
            </div>
            <div class="ps-2">
              <div class="home_policy_box_heading">Money Back Guarantee</div>
              <div class="home_policy_box_text">Any back within 3 days</div>
            </div>
          </div>
        </div>

        <!--Customer Support -->
        <div class="col-xl-3 col-sm-6">
          <div
            class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes"
          >
            <div>
              <img src="assets/img/support.png" width="40px" alt="" />
            </div>
            <div class="ps-2">
              <div class="home_policy_box_heading">Customer Support</div>
              <div class="home_policy_box_text">Call or email us 24/7</div>
            </div>
          </div>
        </div>

        <!-- Free Shipping -->
        <div class="col-xl-3 col-sm-6">
          <div
            class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes"
          >
            <div>
              <img src="assets/img/free-shipping.png" width="50px" alt="" />
            </div>
            <div class="ps-2">
              <div class="home_policy_box_heading">Free Shipping & Returns</div>
              <div class="home_policy_box_text">For all orders over 99$</div>
            </div>
          </div>
        </div>

        <!-- Secure Payment -->
        <div class="col-xl-3 col-sm-6">
          <div
            class="d-flex align-items-center justify-content-center px-2 py-3 home_policy_boxes"
          >
            <div>
              <img src="assets/img/credit-card.png" width="40px" alt="" />
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
      <div
        class="mb-4 position-relative d-flex align-items-end justify-content-between"
      >
        <div class="home_see_all_items_heading">Hot offers for you</div>
      </div>

      <div class="row g-5">
        <div class="col-md-6">
          <div class="home_hot_offers_box">
            <a href="product-detail.php" class="text-decoration-none">
              <div class="row g-0">
                <div class="col-xl-6 col-md-12 col-sm-6">
                  <div>
                    <div>
                      <img src="assets/img/p-0.jpg" width="100%" alt="" />
                    </div>
                    <div
                      class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer"
                    >
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
                  <div
                    class="h-100 px-4 d-flex flex-column justify-content-between"
                  >
                    <div class="pt-3">
                      <div class="home_hot_offers_title">
                        Lorem ipsum dolor sit amet
                      </div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptate quaerat odio qui quo velit aliquid soluta
                        similique sint ratione perferendis.
                      </div>
                    </div>
                    <div class="py-3">
                      <form
                        action=""
                        class="d-flex justify-content-between home_hot_offers_btns"
                      >
                        <button
                          class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2"
                        >
                          Buy Now
                        </button>
                        <button class="btn shadow-none">
                          <img src="assets/img/love.png" width="25px" alt="" />
                        </button>
                        <button class="btn shadow-none">
                          <img
                            src="assets/img/shopping-cart.png"
                            width="27px"
                            alt=""
                          />
                        </button>
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
            <a href="product-detail.php" class="text-decoration-none">
              <div class="row g-0">
                <div class="col-xl-6 col-md-12 col-sm-6">
                  <div>
                    <div>
                      <img src="assets/img/p-1.jpg" width="100%" alt="" />
                    </div>
                    <div
                      class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer"
                    >
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
                  <div
                    class="h-100 px-4 d-flex flex-column justify-content-between"
                  >
                    <div class="pt-3">
                      <div class="home_hot_offers_title">
                        Lorem ipsum dolor sit amet
                      </div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptate quaerat odio qui quo velit aliquid soluta
                        similique sint ratione perferendis.
                      </div>
                    </div>
                    <div class="py-3">
                      <form
                        action=""
                        class="d-flex justify-content-between home_hot_offers_btns"
                      >
                        <button
                          class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2"
                        >
                          Buy Now
                        </button>
                        <button class="btn shadow-none">
                          <img src="assets/img/love.png" width="25px" alt="" />
                        </button>
                        <button class="btn shadow-none">
                          <img
                            src="assets/img/shopping-cart.png"
                            width="27px"
                            alt=""
                          />
                        </button>
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
            <a href="product-detail.php" class="text-decoration-none">
              <div class="row g-0">
                <div class="col-xl-6 col-md-12 col-sm-6">
                  <div>
                    <div>
                      <img src="assets/img/p-2.jpg" width="100%" alt="" />
                    </div>
                    <div
                      class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer"
                    >
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
                  <div
                    class="h-100 px-4 d-flex flex-column justify-content-between"
                  >
                    <div class="pt-3">
                      <div class="home_hot_offers_title">
                        Lorem ipsum dolor sit amet
                      </div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptate quaerat odio qui quo velit aliquid soluta
                        similique sint ratione perferendis.
                      </div>
                    </div>
                    <div class="py-3">
                      <form
                        action=""
                        class="d-flex justify-content-between home_hot_offers_btns"
                      >
                        <button
                          class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2"
                        >
                          Buy Now
                        </button>
                        <button class="btn shadow-none">
                          <img src="assets/img/love.png" width="25px" alt="" />
                        </button>
                        <button class="btn shadow-none">
                          <img
                            src="assets/img/shopping-cart.png"
                            width="27px"
                            alt=""
                          />
                        </button>
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
            <a href="product-detail.php" class="text-decoration-none">
              <div class="row g-0">
                <div class="col-xl-6 col-md-12 col-sm-6">
                  <div>
                    <div>
                      <img src="assets/img/p-3.jpg" width="100%" alt="" />
                    </div>
                    <div
                      class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer"
                    >
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
                  <div
                    class="h-100 px-4 d-flex flex-column justify-content-between"
                  >
                    <div class="pt-3">
                      <div class="home_hot_offers_title">
                        Lorem ipsum dolor sit amet
                      </div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptate quaerat odio qui quo velit aliquid soluta
                        similique sint ratione perferendis.
                      </div>
                    </div>
                    <div class="py-3">
                      <form
                        action=""
                        class="d-flex justify-content-between home_hot_offers_btns"
                      >
                        <button
                          class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2"
                        >
                          Buy Now
                        </button>
                        <button class="btn shadow-none">
                          <img src="assets/img/love.png" width="25px" alt="" />
                        </button>
                        <button class="btn shadow-none">
                          <img
                            src="assets/img/shopping-cart.png"
                            width="27px"
                            alt=""
                          />
                        </button>
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
            <a href="product-detail.php" class="text-decoration-none">
              <div class="row g-0">
                <div class="col-xl-6 col-md-12 col-sm-6">
                  <div>
                    <div>
                      <img src="assets/img/p-4.jpg" width="100%" alt="" />
                    </div>
                    <div
                      class="d-flex justify-content-evenly py-3 text-center home_hot_offers_timer"
                    >
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
                  <div
                    class="h-100 px-4 d-flex flex-column justify-content-between"
                  >
                    <div class="pt-3">
                      <div class="home_hot_offers_title">
                        Lorem ipsum dolor sit amet
                      </div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptate quaerat odio qui quo velit aliquid soluta
                        similique sint ratione perferendis.
                      </div>
                    </div>
                    <div class="py-3">
                      <form
                        action=""
                        class="d-flex justify-content-between home_hot_offers_btns"
                      >
                        <button
                          class="text-uppercase home_hot_offers_cart_btn shadow-none btn rounded-0 px-3 py-2"
                        >
                          Buy Now
                        </button>
                        <button class="btn shadow-none">
                          <img src="assets/img/love.png" width="25px" alt="" />
                        </button>
                        <button class="btn shadow-none">
                          <img
                            src="assets/img/shopping-cart.png"
                            width="27px"
                            alt=""
                          />
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-12">
          <div class="home_see_all_items_link text-center">
            <a href="products.php">See all Items</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Hot Offers -->

    <!-- === Best Selling === -->
    <section class="container-fluid px-4 mb-5">
      <!-- See All Items -->
      <div
        class="mb-4 position-relative d-flex align-items-end justify-content-between"
      >
        <div class="home_see_all_items_heading">Best Selling</div>
      </div>

      <div class="row g-3 g-md-5">
        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <div class="products_page_product_img_discount">-15%</div>
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-0.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
              <div class="text-truncate">
                <a href="product-detail.php" class="products_page_product_title"
                  >Black Belt Black Belt Black Belt Black Belt</a
                >
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span
                  class="products_page_product_price_del text-secondary pe-md-2 pe-0"
                  >Rs. 1,999</span
                >
                <span class="products_page_product_price">Rs. 1,699</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <div class="products_page_product_img_discount">-30%</div>
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-1.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span
                  class="products_page_product_price_del text-secondary pe-md-2 pe-0"
                  >Rs. 4,399</span
                >
                <span class="products_page_product_price">Rs. 3,999</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-2.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
              <div class="text-truncate">
                <a href="product-detail.php" class="products_page_product_title"
                  >Blue High Hill</a
                >
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span class="products_page_product_price">Rs. 499</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-1.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
              <div class="text-truncate">
                <a href="product-detail.php" class="products_page_product_title"
                  >Brown Long Shoes</a
                >
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span class="products_page_product_price">Rs. 2,699</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <div class="products_page_product_img_discount">-5%</div>
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-3.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
              <div class="text-truncate">
                <a href="product-detail.php" class="products_page_product_title"
                  >Black Belt Black Belt Black Belt Black Belt</a
                >
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span
                  class="products_page_product_price_del text-secondary pe-md-2 pe-0"
                  >Rs. 1,999</span
                >
                <span class="products_page_product_price">Rs. 1,699</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <div class="products_page_product_img_discount">-15%</div>
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-4.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span
                  class="products_page_product_price_del text-secondary pe-md-2 pe-0"
                  >Rs. 1,999</span
                >
                <span class="products_page_product_price">Rs. 1,699</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <div class="products_page_product_img_discount">-15%</div>
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-0.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
              <div class="text-truncate">
                <a href="product-detail.php" class="products_page_product_title"
                  >Black Belt Black Belt Black Belt Black Belt</a
                >
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span
                  class="products_page_product_price_del text-secondary pe-md-2 pe-0"
                  >Rs. 1,999</span
                >
                <span class="products_page_product_price">Rs. 1,699</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Item -->
        <div class="col-lg-3 col-md-4 col-6">
          <div class="products_page_product_box h-100">
            <div class="products_page_product_img_box">
              <div class="products_page_product_img_discount">-15%</div>
              <a href="product-detail.php" class="">
                <div class="products_page_product_img_overlay_btns">
                  <form action="">
                    <button class="me-1">
                      <i class="fa-solid fa-cart-plus"></i>
                    </button>
                    <button class="ms-1">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </form>
                </div>
                <img
                  src="assets/img/p-1.jpg"
                  class="products_page_product_img"
                  width="100%"
                  alt=""
                />
                <div class="products_page_product_img_overlay">
                  View Product
                </div>
              </a>
            </div>
            <div class="p-3 text-center text-md-start">
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
              <div class="d-flex flex-column flex-md-row align-items-center">
                <span
                  class="products_page_product_price_del text-secondary pe-md-2 pe-0"
                  >Rs. 1,999</span
                >
                <span class="products_page_product_price">Rs. 1,699</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="home_see_all_items_link text-center mt-4">
            <a href="products.php">See all Items</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Best Selling -->

<!-- === Footer === -->
<?php include_once 'footer.php'; ?>
<!-- Footer -->