
$(function () {
    setTimeout(function () {
        $("#op").css({
            display: 'none'
        }, 0);
    }, 1800);
});

/*
$(function () {
    setTimeout(function () {
        $("#kv_image").animate({
            opacity: 1
        }, 3000);
    }, 12000);
});
*/


// scrooll時のheader
var startPos = 0,winScrollTop = 0;
var windowHeight = document.documentElement.clientHeight;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if ( winScrollTop <= windowHeight || winScrollTop == 0) {
        $('#header').removeClass('scrolled');
        $('#videoBtn').get(0).play();
        $('#videoBtn_sp').get(0).play();
    } else if( winScrollTop > windowHeight) {
        $('#header').addClass('scrolled');
        $('#videoBtn').get(0).pause();
        $('#videoBtn_sp').get(0).pause();
    }
    startPos = winScrollTop;
//    console.log(winScrollTop);
});
