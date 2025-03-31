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

{
  if($('#scroll_1').length) {
    var position1 = $('#scroll_1').offset().top;

    $('.clinic_link .link1').click(function() {
      $("html").animate(
        {scrollTop : position1},
        {duration: 600, queue : false}
    );
    });  
  }
}

{
  if($('#scroll_2').length) {
    var position2 = $('#scroll_2').offset().top;
  
    $('.clinic_link .link2').click(function() {
      $("html").animate(
        {scrollTop : position2},
        {duration: 600, queue : false}
    );
    });
  }
  
}

{
  $('.faq_content .question').click(function(){
    $(this).next('.answer_wrapper').toggleClass('open');
    $(this).find('.toggle_button').toggleClass('open'); 
  });
}

{
  $(document).click(function(event){
    if (!$('.birth_option_flex').is(event.target) && $('.birth_option_flex').has(event.target).length === 0) {
      $('.birth_option_flex').removeClass('click');
    }
  });
}

{
  $('.birth_option_flex').click(function(event){
    $(this).toggleClass('click');
    event.stopPropagation();
  });
}

{
  $('#datepicker').datepicker();
}

{
  $('#datepicker2').datepicker();
}

{
  $('.laser_link > a').each(function() {
    var targetId = $(this).data('target'); // data-target属性を取得
    var targetElement = $('.' + targetId);

    if (targetElement.length) {
      var position = targetElement.offset().top;

      $(this).click(function() {
        $("html, body").animate(
          { scrollTop: position },
          { duration: 600, queue: false }
        );
      });
    }
  });
}

{
  $('.botox_link > a').each(function() {
    var targetId = $(this).data('target'); // data-target属性を取得
    var targetElement = $('#' + targetId);

    if (targetElement.length) {
      var position = targetElement.offset().top;

      $(this).click(function() {
        $("html, body").animate(
          { scrollTop: position },
          { duration: 600, queue: false }
        );
      });
    }
  });
}