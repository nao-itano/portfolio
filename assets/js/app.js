$(function () {
  // pageTopスクロール
  $('.js-topButton').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 500);
  });

  // ページ内リンクスクロール
  $('a[href^="#"]').click(function () {
    var pageLink = $(this).attr('href');
    var target = $(pageLink).offset();
    $('html, body').animate({
      scrollTop: target.top
    }, 500);
    return false;
  });

  // スキルを順番に出す
  //// 二回目以降表示される順番がバラバラになります・・・ ////
  $(function () {
    $('.js-skill li').css("opacity", 0);
    $(window).scroll(function () {
      $('.js-skill li').each(function () {
        var target = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();

        if (scroll > target - windowHeight + windowHeight / 5) {
          $(function () {
            $('.js-skill li')
              .each(function (i) {
                $(this).delay(500 * i).animate({
                  opacity: 1
                }, 500);
              });
          });
        } else {
          $('.js-skill li').css("opacity", 0);
        }
      });
    });
  });

  //// 全部同時にフェードインのパターン ////
  // $(window).scroll(function () {
  //   var windowHeight = $(window).height();
  //   var target = $('.js-skill').offset().top;
  //   if ($(window).scrollTop() >= target - windowHeight + windowHeight / 5) {
  //     $('.js-skill').css('opacity', 1);
  //   } else {
  //     $('.js-skill').css("opacity", 0);
  //   }
  // });

  // work詳細表示/非表示
  $('.js-cardText').hide();
  $('.js-moreButton').click(function () {
    $(this).next().slideToggle();
  });

});
