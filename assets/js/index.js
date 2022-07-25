// === Products Page ===

// Sub Category Carousel
$('.products_page_subcategory_carousel').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true,
            loop:false
        },
        600:{
            items:4,
            nav:false,
            loop:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

// Price Range Slider in Filter
function getVals(){
    // Get slider values
    let parent = this.parentNode;
    let slides = parent.getElementsByClassName("product_page_filter_price");
      let slide1 = parseFloat( slides[0].value );
      let slide2 = parseFloat( slides[1].value );
    // Neither slider will clip the other, so make sure we determine which is larger
    if( slide1 > slide2 ){ let tmp = slide2; slide2 = slide1; slide1 = tmp; }
    
    let displayElement = parent.getElementsByClassName("product_page_filter_price_value")[0];
        displayElement.innerHTML = "Rs. " + slide1 + " - Rs. " + slide2;
  }
  
  window.onload = function(){
    // Initialize Sliders
    let sliderSections = document.getElementsByClassName("product_page_filter_price_box");
        for( let x = 0; x < sliderSections.length; x++ ){
          let sliders = sliderSections[x].getElementsByClassName("product_page_filter_price");
          for( let y = 0; y < sliders.length; y++ ){
            if( sliders[y].type ==="range" ){
              sliders[y].oninput = getVals;
              // Manually trigger event first time to display values
              sliders[y].oninput();
            }
          }
        }
  }



// === Product Details Page ===

// Product Image Gallery
function productDetailImageGallery(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("product_detail_expanded_image");
    // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;
}

$('.product_detail_image_gallery').owlCarousel({
    loop:true,
    margin:15,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

// Products in Same Category
$('.product_detail_same_category_carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        992:{
            items:3
        },
        1200:{
            items:5
        }
    }
})

// Customers also Bought
$('.product_detail_customer_bought_carousel').owlCarousel({
    loop:true,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        992:{
            items:3
        },
        1200:{
            items:5
        }
    }
})

// === Show / Hide Password ===

// Variables declared & initialized
let loginPassword1 = document.getElementById('loginInputPassword1');
let loginEyePassword1 = document.getElementById('eyeLoginInputPassword1');

let signupPassword1 = document.getElementById('signupInputPassword1');
let signupEyePassword1 = document.getElementById('eyeSignupInputPassword1');

let signupPassword2 = document.getElementById('signupInputPassword2');
let signupEyePassword2 = document.getElementById('eyeSignupInputPassword2');

let resetPassword1 = document.getElementById('resetInputPassword1');
let resetEyePassword1 = document.getElementById('eyeResetInputPassword1');

let resetPassword2 = document.getElementById('resetInputPassword2');
let resetEyePassword2 = document.getElementById('eyeResetInputPassword2');

// Show Hide Function
showHidePassword = (pass, toggle) => {
    if (pass.type == 'password') {
        pass.setAttribute('type', 'text');
        toggle.classList.remove('bi-eye-slash');
        toggle.classList.add('bi-eye');
    } else {
        toggle.classList.remove('bi-eye');
        toggle.classList.add('bi-eye-slash');
        pass.setAttribute('type', 'password');
    }
};

// Login Page Call Function
if(loginEyePassword1){
    loginEyePassword1.addEventListener('click', () => {showHidePassword(loginPassword1, loginEyePassword1)});
}

// Signup Page Call Function
if(signupEyePassword1 && signupEyePassword2){
signupEyePassword1.addEventListener('click', () => {showHidePassword(signupPassword1, signupEyePassword1)});
signupEyePassword2.addEventListener('click', () => {showHidePassword(signupPassword2, signupEyePassword2)});
}

// Reset Page Call Function
if(resetEyePassword1 && resetEyePassword2){
resetEyePassword1.addEventListener('click', () => {showHidePassword(resetPassword1, resetEyePassword1)});
resetEyePassword2.addEventListener('click', () => {showHidePassword(resetPassword2, resetEyePassword2)});
}