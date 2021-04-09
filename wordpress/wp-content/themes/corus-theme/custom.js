var slickResponsiveSettings = {
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      speed: 300,
      adaptiveHeight: true
  };

    $(document).ready(function(){
        $(".slider").slick({
    //Desktop
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      speed: 300,
      adaptiveHeight: true,

responsive: [{
    breakpoint: 1024,
    settings: slickResponsiveSettings
  }, {
    breakpoint: 600,
    settings: slickResponsiveSettings
  }, {
    breakpoint: 300,
    settings: "unslick" // destroys slick
  }]
});
    });
