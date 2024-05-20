//右クリック禁止
//document.oncontextmenu = function () {return false;}

// page top
jQuery(function ($) {
    var topBtn = $('#ptop');
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
        }, 300);
        return false;
    });
});


//subnavi dupe
jQuery(function () {
    var menu01 = jQuery('#gnavi .drawer-nav').html();
    jQuery("#pcnav nav.pc-nav").html(menu01);
});

//SP hover停止
var ua = navigator.userAgent;
if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 || ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0 ) {
  var touch = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
  if(touch) {
    try {
      for (var si in document.styleSheets) {
        var styleSheet = document.styleSheets[si];
        if (!styleSheet.rules) continue;
        for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
          if (!styleSheet.rules[ri].selectorText) continue;
          if (styleSheet.rules[ri].selectorText.match(':hover')) {
            styleSheet.deleteRule(ri);
          }
        }
      }
    } catch (ex) {}
  }
}



//FAQ
$(".open-contents a,.open-contents span").on("click", function () {
  $(this).toggleClass("open");
  $(this).parent().parent().toggleClass("open");
});


//search
$("#archive_search>h2").on("click", function () {
  $(this).toggleClass("open");
  $("#search_body").toggleClass("open");
});
