$(document).ready(function() {
  //---------------------------------
  // SP時横スクロール UI
  //---------------------------------

  new ScrollHint('.scroll', {
    i18n: {
      scrollable: '横スクロールできます'
    }
  });


  //---------------------------------
  // Smooth Scrolling
  //---------------------------------

  $(document).ready(function(){
    $('a[href^="#"]').click(function(){
      var the_id = $(this).attr("href");
      var offset_value;
      // 画面幅が1000px以下の場合
      if ($(window).width() <= 1000) {
        offset_value = $(the_id).offset().top - 50;
      } else {
        offset_value = $(the_id).offset().top - 110;
      }
      $('html, body').animate({
        scrollTop: offset_value
      }, 'slow');
      return false;
    });
  });


});


//--------------------------------------
//　header　演出
//--------------------------------------

$(function(){
  var pos = 0;
  var header = $('header');

  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos || $(this).scrollTop() < 400){
      header.removeClass('hide');
    }else{
      header.addClass('hide');
    }
    pos = $(this).scrollTop();
  });
});


//--------------------------------------
//　アコーディオンメニュー
//--------------------------------------

(function ($) {
  $(function () {
    $('#nav-toggle').on('click', function () {
      $('header').toggleClass('open');
      $('#gloval-nav').slideToggle();
    });
  });
})(jQuery);


//--------------------------------------
//　アニメーション　ふわっと演出
//--------------------------------------
// window.onload = function() {
//   scroll_effect();

//   $(window).scroll(function(){
//    scroll_effect();
//   });

//   function scroll_effect(){
//    $('.js-fadein').each(function(){
//     var elemPos = $(this).offset().top;
//     var scroll = $(window).scrollTop();
//     var windowHeight = $(window).height();
//     if (scroll > elemPos - windowHeight ){
//      $(this).addClass('scrollin');
//     }
//    });
// }};


//--------------------------------------
//　loop-slick
//--------------------------------------
$(document).ready(function() {
  $('#loop-slick').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1,
      cssEase: 'linear',
      speed: 5000,
      slidesToShow: 7,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 769, // 768px以下のサイズに適用
          settings: {
          slidesToShow: 4,
          },
        },
        {
          breakpoint: 400, // 399px以下のサイズに適用
          settings: {
          slidesToShow: 2,
          },
        },
      ],
  });
});


//--------------------------------------
//　wp-slick
//--------------------------------------

$(document).ready(function() {
  $('#wp-slick').slick({
    arrows: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});



//--------------------------------------
//　faq　プルダウン
//--------------------------------------

$(document).ready(function(){
  $(".question").on("click", function() {
    $(this).toggleClass('open');
    $(this).next().slideToggle(400);
  });
});


//--------------------------------------
//　バナー　追従
//--------------------------------------

$(function(){
  var scrollStart = $('.show').offset().top;
  var scrollEnd = $('.hide').offset().top;
  var distance = 0;

  $(document).scroll(function(){
    distance = $(this).scrollTop();

    if (scrollStart <= distance) {
      $('.floating').addClass('fixed');
    } else if (scrollStart >= distance) {
      $('.floating').removeClass('fixed');
    }

    if (scrollEnd <= distance) {
      $('.floating').fadeOut();
    } else{
      $('.floating').fadeIn();
    }
  });
});


$(window).on('load', function() {
  //---------------------------------
  // AOS
  //---------------------------------
  AOS.init({
    offset: 120,　//初期値
    delay: 0,　//初期値
    anchor: 'top-bottom', //初期値
    duration: 800,　//初期値　400
    easing: 'ease',　//初期値
    once: true,　//初期値　false
  });
});


//--------------------------------------
// タブ切り替え
//--------------------------------------
// タブメニュー
$(function () {
  if ($('.js-tab-menu').length) {
    $(".js-tab").on("click", function () {
      $(".current").removeClass("current");
      $(this).addClass("current");
    });
  }
});


//--------------------------------------
// ハンバーガーメニュー
//--------------------------------------
let toggleElements = function(flag) {
  $('.js-drawer, .js-overlay, .js-hamburger-btn').toggleClass('open', flag);
};

$('.js-hamburger-btn').click(function(){
  let isOpen = $(this).toggleClass('open').hasClass('open');
  toggleElements(isOpen);
});

$('.js-overlay').click(function(){
  if($(this).hasClass('open')){
    toggleElements(false);
  }
});

$(window).on('load resize', function(){
  if($(window).width() >= 640){
    $('.js-drawer').css('display','block');
  } else {
    toggleElements(false);
  }
});

//--------------------------------------
// カウントアップ
//--------------------------------------
$(function () {
  $(".js-count").on('inview',   function() {
    if ($(".js-num", this).attr("data-num").indexOf(".") > -1) {
      var rounding = 1;
    } else {
      var rounding = 0;
    }
    $(".js-num", this).numerator({
      easing: "linear", // カウントアップの動き
      duration: 1000, // カウントアップの時間
      toValue: $(".js-num", this).attr("data-num"), // カウントアップする数値
      rounding: rounding, // 小数点以下の桁数（初期値：0）
    });
    });
});


//--------------------------------------
// スクロールイベント
//--------------------------------------
window.addEventListener('scroll', () => {

  // ヘッダー追従
  const header = document.getElementById('header-sub');
  const scrollY = 700;
  if (window.scrollY > scrollY) {
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }

  // 2つ目の処理: アニメーション処理
  checkAnimation();

  // 3つ目の処理: .js-marker要素のスクロール処理
  const height = window.innerHeight;
  const scroll = document.documentElement.scrollTop;
  const markers = document.querySelectorAll('.js-marker');
  const value = scroll - height + 80;

  markers.forEach(marker => {
      if (scroll > marker.getBoundingClientRect().top + value) {
          marker.classList.add('on');
      }
  });
});

// ABOUTページのテキストふわっと表示
function checkAnimation() {
  const scrollTop = $(window).scrollTop();
  const winH = $(window).height();
  // 画面幅が769px以上の場合のアニメーション
  if ($(window).width() >= 769) {
      const elementTop = $('.js-fadein-box').offset().top;
      const elementHeight = $('.js-fadein-box').outerHeight();
      if (elementTop < scrollTop + winH && elementTop + elementHeight > scrollTop) {
          $('.js-fadein-box').find('.js-fadein').each(function(index){
              $(this).delay(index * 300).queue(function(){
                  $(this).addClass('active');
              });
          });
      }
  }
  // 画面幅が768px以下の場合のアニメーション
  else {
      $('.js-fadein').each(function () {
          const targetPosition = $(this).offset().top;
          if (scrollTop > targetPosition - winH + 100) {
              $(this).addClass('active');
          }
      });
  }
}

// 画面ロード時にもアニメーションのチェックを行う
$(document).ready(function() {
  setTimeout(function() {
    checkAnimation();
  }, 500);  // 0.5秒後にアニメーションチェック関数を呼び出す
});

//--------------------------------------
// アコーディオン
//--------------------------------------
$(function(){
  if ($('.js-accordion-btn').length) { // この条件を追加します
    $('.js-accordion-btn').on('click', function(){
      $(this).next('.js-accordion-content').slideToggle(300);
      $(this).toggleClass('open');
    });
  }
});
