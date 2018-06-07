// JavaScript Document
$(document).ready(function ($) {
  //nav固定//
  var tab = $('.navmenu'),
    offset = tab.offset();
  $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
      tab.addClass('fixed');
    } else {
      tab.removeClass('fixed');
    }
  });
  //slider_pro1//
  $('#my-slider').sliderPro({
    width: 300,
    height: 200,
    arrows: true,
    buttons: true,
    slideDistance: 5,
    visibleSize: '100%',
  });

  //slider_pro2//
  $('#my-slider2').sliderPro({
    width: 300,
    height: 200,
    arrows: true,
    buttons: true,
    slideDistance: 5,
    visibleSize: '100%',
  });

  //slider_pro3//
  $('#my-slider3').sliderPro({
    width: 300,
    height: 200,
    arrows: true,
    buttons: true,
    slideDistance: 5,
    visibleSize: '100%',
  });

  //slider_pro4//
  $('#my-slider4').sliderPro({
    width: 300,
    height: 200,
    arrows: true,
    buttons: true,
    slideDistance: 5,
    visibleSize: '100%',
  });

  //light_box2//
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  });

  //page_top//
  var topBtn = $('#page-top0');
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
  //end//
});


//スマホ用 ハンバーガーメニュー//
$(document).ready(function() {
            $("nav").naver({
                labels: {
                    closed: "MENU",
                    open: "CLOSE"
                },
                maxWidth: "767px"
            });
        });
