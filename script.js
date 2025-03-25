{
  $('.slide_image_top').slick({
    autoplay: true,
    arrows: false,
    speed: 800,
    autoplaySpeed: 4000,
    variableWidth: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    centerMode: true,// 前後スライドを部分表示
    slidesToShow: 2,
  });
}

{
  $('.recommend_slide').slick({
    autoplay: false,
    arrows: true,
    variableWidth: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    centerMode: true,
    slidesToShow: 1,
    prevArrow: '<div class="recommend_prev"></div>',
    nextArrow: '<div class="recommend_next"></div>',
  });
}

{
  $('.gallery_slide').slick({
    autoplay: false,
    arrows: true,
    variableWidth: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 5,
    prevArrow: '<div class="gallery_prev"></div>',
    nextArrow: '<div class="gallery_next"></div>',
    centerMode: true,
    slidesToShow: 1,
    dots: true,
  });
}
