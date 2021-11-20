$(function () {
    $(".hamburger").click(function () {
        if ($("#checkbox-hamburger").prop("checked") == false) {
            $(".header-nav").addClass("is_open");
        } else {
            $(".header-nav").removeClass("is_open");
        };
    });
});
