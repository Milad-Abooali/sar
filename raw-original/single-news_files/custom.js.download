$(function () {
    var a = $(".menuLine").offset().top;
    $(window).scroll(function () {
        if ($(window).scrollTop() > a) {
            $(".menuLine").addClass("menufix");
        } else {
            $(".menuLine").removeClass("menufix");
        }
    })
});

/************************ BTN-DOWN **************************/
$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

});
/************************ Menuresiaze **************************/
$(".links li.have-sub a").click(function (b) {
    var c = $(this).parent("li").hasClass("noSub");
    if (!c) { b.preventDefault() } $(this).parent("li").siblings("li").children("ul").slideUp("fast");
    $(this).parent("li").siblings("li").removeClass("open-li");
    $(this).parent("li").toggleClass("open-li");
    var a = $(this).parent().children("ul:first"); a.slideToggle("down");
});