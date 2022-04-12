<?php include_once 'header.php'; ?>
<div class="container-fluid px-md-5 my-5">


<section id="products" class="products">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-3 mb-2">
        
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        FILTER PRODUCT
                    </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="list-group my-1">
                            <p>
                                <label><strong>Category :</strong></label>
                            </p>
                            <div style="height:12vh;overflow-x:hidden; overflow-y:auto;">
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="Shirts" value="Shirts">
                                    <label class="form-check-label" for="Shirts">Shirts</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="Jeans" value="Jeans">
                                    <label class="form-check-label" for="Jeans">Jeans</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="Shoes" value="Shoes">
                                    <label class="form-check-label" for="Shoes">Shoes</label>
                                </div>
                            </div>

                            <p>
                                <label><strong>Brand :</strong></label>
                            </p>
                            <div style="height:11vh;overflow-x:hidden; overflow-y:auto;">
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="nike" value="nike">
                                    <label class="form-check-label" for="nike">Nike</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="Addidas" value="Addidas">
                                    <label class="form-check-label" for="Addidas">Addidas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="Guccie" value="Guccie">
                                    <label class="form-check-label" for="Guccie">Guccie</label>
                                </div>
                            </div>

                            <p>
                                <label><strong>Price Range :</strong></label>
                            </p>
                            <div style="height:11vh;overflow-x:hidden; overflow-y:auto;">
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="10,000 - 20,000" value="10,000 - 20,000">
                                    <label class="form-check-label" for="10,000 - 20,000">10,000 - 20,000</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="20,000 - 30,000" value="20,000 - 30,000">
                                    <label class="form-check-label" for="20,000 - 30,000">20,000 - 30,000</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input commen-selector category" type="checkbox" id="30,000 - 50,000" value="30,000 - 50,000">
                                    <label class="form-check-label" for="30,000 - 50,000">30,000 - 50,000</label>
                                </div>
                            </div>

                        </div>

                    </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-lg-9 g-0">
        
            <div class="row product_wrap">
            
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="mb-4">
                    <div class="col-md-12 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                        <img src="assets/media/offers/offer3.jpg" class="img-fluid rounded-start" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <div class="post_count_wrap">
                                                <div class="PCW_box">
                                                    <p>02<br><small class="d-none d-sm-block">Days</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>00<br><small class="d-none d-sm-block">Hrs</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>05<br><small class="d-none d-sm-block">Mins</small></p>
                                                </div>
                                                <div class="PCW_box">
                                                    <p>35<br><small class="d-none d-sm-block">Secs</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong><small>Lorem ipsum dolor sit amet consectetur</small></strong></h6>
                                        <p class="card-text">
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star star_checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <small class="text-muted">(5 Reviews)</small>
                                        </p>
                                        <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
                                        <div class="post_text_bottom">
                                            <div class="PTB_box PTB_box1">
                                                <button>ADD TO CART</button>
                                            </div>
                                            <div class="PTB_box PTB_box2">
                                                <span><i class="fa-regular fa-heart"></i></span>
                                            </div>
                                            <div class="PTB_box PTB_box3">
                                                <span><i class="fa fa-arrow-right-arrow-left"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

        </div>
    </div>
</div>

</section>

</div>
<?php include_once 'footer.php'; ?>