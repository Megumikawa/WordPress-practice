$(function(){
  'use strict';

  // let menuSpeed = 1000;
  const MENUSPEED = 300;

  $('#top_slider').bxSlider({
  });

//　カテゴリーアイコンの表示
  $('.js-category-icon').on('mouseover', function(){
    $('.megamenu').stop().show();
  });
  $('.js-category-icon').on('mouseout', function(){
    $('.megamenu').stop().hide();
  });
//
//ページトップへのスクロール
  $(window).on("scroll", function(){
    // console.log($(this).scrollTop());
    if ($(this).scrollTop() >100){
      $("#pagetop").fadeIn();
    } else {
      $("#pagetop").fadeOut();
    }
    });
    $("#pagetop").on("click", function(){
      $("html, body").animate({scrollTop: 0},1000);
    });
    $(window).on("scroll",function(){
      let
        documentHeight = $(document).height(),  //サイト全体の高さ//
        scrollTop = $(this).height() + $(this).scrollTop(),  //画面に出ている大きさ//
        footerHeight = $("footer").innerHeight();  //footerの高さ//
      if (documentHeight - scrollTop <=footerHeight) {
        $(".pagetop").css({
          position: "absolute",  //必ずCSSのbodyに対してposition:relativeを入れる//
          bottom: footerHeight + 30
        });
      }else {  //ここが無いと上にスクロールした時にアイコンが戻らず出てこなくなる//
        $(".pagetop").css({
          position: "fixed",
          bottom: 30
        });
      }
    });

  let menuContents = $('#js_menu_contents');

  // if(menuContents.length > 0) {
  $('#js_btn_menu').on('click',function(){
    //$('#js-container').addClass('class名');
    if (menuContents.is(':animated') === false) {
      // $('html').toggleClass('open');
      // menuContents.fadeToggle(MENUSPEED);
      if ($(this).hasClass('open') ===true) {
        $(this).removeClass('open');
        $('html').css('overflow','');
        menuContents.fadeOut(MENUSPEED);
      } else {
        $(this).addClass('open');
        $('html').css('overflow','hidden');
        menuContents.fadeIn(MENUSPEED);
      }
    }
  });

  $('.js-btn-close').on('click',function(){
    $('#js_btn_menu').removeClass('open');
    $('html').css('overflow','');
    menuContents.fadeOut(MENUSPEED);
  });

  $('#js_hamburger_search_category').on('click',function(){
    if ($('.hamburger-category-child').is(':animated') ===false){
      if ($(this).hasClass('category-open') ===false) {
        $(this).addClass('category-open');
      } else {
        $(this).removeClass('category-open');
      }
      $('.hamburger-category-child').fadeToggle(MENUSPEED);
    }
  });


//pagerの部分
  let param = location.search;
  param = param.replace("?page=",""); //置換//
  if(param === "") {
    param = 1;
  }
  $("#pager li").eq(param - 1).addClass("current-pager");

  // 詳細のスライダー
  $('#js_detail_photo').bxSlider({
    pagerCustom: '.detail-bxSlider-thumb'
  });

  // recommendのスライダー
  $('#js_recommend_slider').bxSlider({
    minSlides: 2,
    maxSlides: 5,
    slideWidth: 180,
    slideMargin: 10,
  });

  // checked itemのスライダー
  $('#bottom_slider').bxSlider({
    minSlides: 3,
    maxSlides: 9,
    slideWidth: 96,
    slideMargin: 10,
  });

// ハートの色の切り替え
  $('.detail-favorite').on('click',function(){
    if ($(this).hasClass('favorite-active') ===false) {
      $(this).addClass('favorite-active');
      $(this).find('img').eq(0).attr('src', 'images/icon-favorite-01.svg');
    } else {
      $(this).removeClass('favorite-active');
      $(this).find('img').eq(0).attr('src', 'images/favorite-icon.svg');
    }
  });

});
