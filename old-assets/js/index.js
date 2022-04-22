// === Products Page ===

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

// Products in Same Category
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:1
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