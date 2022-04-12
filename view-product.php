<?php include_once 'header.php';?>

    <section id="products" class="products">
        <div class="container mt-5">
            <div class="row">
                
                <div class="col-sm-6 col-lg-6 mb-4 big_img_wrap">
                    <ul id="zoom_prod">
                        <li>
                            <img src="assets/media/offers/offer2.jpg" class="small_img" alt="small-img">
                        </li>
                        <li>
                            <img src="assets/media/offers/offer1.jpg" class="small_img" alt="small-img">
                        </li>
                        <li>
                            <img src="assets/media/offers/offer3.jpg" class="small_img" alt="small-img">
                        </li>
                    </ul>
                    <img src="assets/media/offers/offer1.jpg" class="big_img" alt="big_img">
                </div>

                <div class="col-sm-6 col-lg-6 mb-4">
                    <p class="text-danger">Clothes</p>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus cumque minima reiciendis?</h4>
                    <p>Avaiable</p>
                        <h4 class="p_price">$33.40</h4>
                        <p class="mt-2">Quantity :</p>
                        <input type="number" min="1" max="10" value="1" class="form-control" style="width:30%;text-align:center;">
                        <button type="button" class="btn btn-primary mt-4">ADD TO CART</button>
                </div>

            </div>

            <div class="row mt-4">

                <div class="col-sm-12 col-lg-12 mb-4">
                
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Detalis</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Review</button>
                    </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class="pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti eaque ducimus porro ipsam perferendis tempore sunt consequatur laudantium? Rem sequi id velit placeat aliquam consectetur nam dolore, maiores culpa iure beatae perferendis voluptas neque.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                <div class="container review-wrap mt-4 p-3">
                                <p><strong class="text-danger">Good</strong>&nbsp; <small>(User)</small></p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti tempore assumenda vel, soluta quisquam provident?</p>
                                </div>
                          

                            <div class="container review-wrap mt-4 p-3">
                                
                                <form id="review_form">
                                   <span>Add Review</span>
                                   <br>
                                   <select class="form-control" id="rating" style="width:35%;" required>
                                       <option value="">Select Rating</option>
                                       <option value="Excellent">Excellent</option>
                                       <option value="Good">Good</option>
                                       <option value="Nice">Nice</option>
                                       <option value="Bad">Bad</option>
                                       <option value="Worst">Worst</option>
                                       <option value="Good">Good</option>
                                       <option value="Nice">Nice</option>
                                   </select>
                                   <textarea class="form-control mt-2" id="review" style="width:100%;height:10vh;" placeholder="Enter your review" autocomplete="off"></textarea>
                                   <button type="button" id="add_review" class="btn btn-primary mt-2">Add Review</button>
                                   <br><br>
                                   <span class="mt-2" id="review_error" style="color:red;"></span>
                                   <span class="mt-2" id="review_success" style="color:limegreen;"></span>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>


            </div>


            <div class="row mt-5">
                <div class="col-12">
                    <h4>Recommanded for you</h4>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-12">
                                            <img src="assets/media/offers/offer1.jpg" class="img-fluid rounded-start" alt="image">
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
                                    <div class="col-md-7">
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

                <div class="col-md-6 col-sm-12">
                    <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-12">
                                            <img src="assets/media/offers/offer1.jpg" class="img-fluid rounded-start" alt="image">
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
                                    <div class="col-md-7">
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


                <div class="col-md-6 col-sm-12">
                    <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-12">
                                            <img src="assets/media/offers/offer1.jpg" class="img-fluid rounded-start" alt="image">
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
                                    <div class="col-md-7">
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


                <div class="col-md-6 col-sm-12">
                    <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-12">
                                            <img src="assets/media/offers/offer1.jpg" class="img-fluid rounded-start" alt="image">
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
                                    <div class="col-md-7">
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


                <div class="col-md-6 col-sm-12">
                    <div class="card mb-3" style="max-width: 600px;border:1px solid red;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-12">
                                            <img src="assets/media/offers/offer1.jpg" class="img-fluid rounded-start" alt="image">
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
                                    <div class="col-md-7">
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

            </div>

        </div>
    </section>

<?php include_once 'footer.php';?>