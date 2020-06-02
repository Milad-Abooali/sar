
$(function () { var d = $(".animateblock"); var b = $(window).height(); var c = $(document).height(); $(window).scroll(function () { a() }); function a() { wintop = $(window).scrollTop(); d.each(function () { $elm = $(this); if ($elm.hasClass("animated")) { return true } topcoords = $elm.offset().top; if (wintop > (topcoords - (b * 0.75))) { $elm.addClass("animated") } }) } });
