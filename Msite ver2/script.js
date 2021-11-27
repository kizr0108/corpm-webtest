$(function () {
    $(".hamburger").click(function () {
        if ($("#checkbox-hamburger").prop("checked") == false) {
            $(".header-nav").addClass("is_open");
        } else {
            $(".header-nav").removeClass("is_open");
        };
    });


    /* ----- smooth-scroll ----- */
    // #で始まるアンカーをクリックした場合に処理
    $('a[href^="#"]').click(function () {
        // スクロールの速度
        var speed = 400; // ミリ秒
        // アンカーの値取得
        var href = $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top - 100;
        // スムーススクロール
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });

    var $win = $(window),
    $scrollTopLink = $('.scrolltop'),
    WinHeight = $win.height(),
    Class = 'is_visible';

    $win.on('load scroll', function () {
        var value = $(this).scrollTop();
        if (value > WinHeight) {
            $scrollTopLink.fadeIn(400);
            //$scrollTopLink.addClass(Class);
        } else {
            $scrollTopLink.fadeOut(400);
            //$scrollTopLink.removeClass(Class);
        }
    });

    $scrollTopLink.click(function(){
        $('body,html').animate({
            scrollTop: 0
        }, 400, 'swing');
        return false;
    });
});
