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

    //MtoB ハンバーガー
    $(".hamburger").click(function () {
        if ($("#checkbox-hamburger").prop("checked") == false) {
            $(".box-nav-header").addClass("is_open");
        } else {
            $(".box-nav-header").removeClass("is_open");
        };
    });

    /* ----- MtoB スライダー ----- */
    var slider_size = $("[class^='slider-item']").length - 1;
    var slider_margin_left = 0;
    var slider_count = 0;

    function displaySliderCount() {
        var text = String(slider_count + 1) + " / " + String(slider_size + 1);
        $(".counter-slider").text(text);
    };
    $(".link-detail-about").click(function () {
        slider_count = 0;
        displaySliderCount();
        if ($(".img-detail-fullscreen").prop("class") != ".is_visible") {
            $(".img-detail-fullscreen").addClass("is_visible");
        };
    });
    $(".close-slider").click(function () {
        $(".img-detail-fullscreen").removeClass("is_visible");
    });
    if (slider_count == 0) {
        $(".arrow-slider-previous").removeClass("is_clickable");
    } else {
        $(".arrow-slider-previous").addClass("is_clickable");
    };
    if (slider_count == slider_size) {
        $(".arrow-slider-next").removeClass("is_clickable");
    } else {
        $(".arrow-slider-next").addClass("is_clickable");
    };
    $(".arrow-slider-previous").click(function () {
        if (slider_count > 0) {
            slider_count = slider_count - 1;
            slider_margin_left = 0 - 100 * slider_count;
            $(".slider-list-fullscreen").css("margin-left", slider_margin_left + "%");
            displaySliderCount();
        };
    });
    $(".arrow-slider-next").click(function () {
        if (slider_size > slider_count) {
            slider_count = slider_count + 1;
            slider_margin_left = 0 - 100 * slider_count;
            $(".slider-list-fullscreen").css("margin-left", slider_margin_left + "%");
            displaySliderCount();
        };
    });

    /* ----- text-dot ----- */
    var num_tags = $(".text-dot").length;
    for (let i = 0; i < num_tags; i++) {
        var tag = $(".text-dot:eq(" + i + ")")
        var content = $(tag).html();
        var text = $.trim(content);
        var newText = "";
        text.split("").forEach(function (w) {
            newText += "<span>" + w + "</span>"
        });
        $(tag).html(newText);
    };

    /* ----- smooth-scroll ----- */
    // #で始まるアンカーをクリックした場合に処理
    $('a[href^="#"]').click(function () {
        $("#checkbox-hamburger").prop("checked", false);
        $(".box-nav-header").removeClass("is_open");
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
});
