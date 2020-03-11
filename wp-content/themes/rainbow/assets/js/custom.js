$(function() {    


    var slider = $('#testimonial-slider').lightSlider({
        item:2,
        loop:false,
        slideMove:2,
        slideMargin:20,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        pager: true,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:20,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });  



  });


