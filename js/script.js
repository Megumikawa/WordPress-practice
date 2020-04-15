$(function(){
  'use strict';

  $('#slider').bxSlider({
    auto: true,
  });

  $('#pagetop').on('click',function(){
    $('html, body').animate({scrollTop:0},500);
  });
});
