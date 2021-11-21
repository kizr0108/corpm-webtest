$(function () {
    /*
    var $win = $(window),
        $topView = $('.area_top_view'),
        $nav = $('header'),
        navHeight = $nav.outerHeight(),
        topViewPos = $win.height(),
        fixedClass = 'is_fixed';

    $win.on('load scroll', function () {
        var value = $(this).scrollTop();
        if (value > topViewPos) {
            $nav.addClass(fixedClass);
        } else {
            $nav.removeClass(fixedClass);
        }
    });
    */
    $(".btn_hamburger").click(function () {
        if ($("#checkbox_hamburger").prop("checked") == false) {
            $(".nav_header").addClass("is_open");
        } else {
            $(".nav_header").removeClass("is_open");
        };
    });
    $(".hamburger").click(function () {
        if ($("#checkbox-hamburger").prop("checked") == false) {
            $(".box-nav-header").addClass("is_open");
        } else {
            $(".box-nav-header").removeClass("is_open");
        };
    });
});
