﻿(function (a) { function b(f, g) { var e = this, c; var d = 0; e.btnClass = ".material-scrolltop"; e.revealClass = "reveal"; e.btnElement = a(e.btnClass); e.initial = { revealElement: "body", revealPosition: "top", padding: 0, duration: 800, easing: "swing", onScrollEnd: false }; e.options = a.extend({}, e.initial, g); e.revealElement = a(e.options.revealElement); c = e.options.revealPosition !== "bottom" ? e.revealElement.offset().top : e.revealElement.offset().top + e.revealElement.height(); d = f.offsetTop + e.options.padding; a(document).scroll(function () { if (c < a(document).scrollTop()) { e.btnElement.addClass(e.revealClass) } else { e.btnElement.removeClass(e.revealClass) } }); e.btnElement.click(function () { var h = true; a("html, body").animate({ scrollTop: d }, e.options.duration, e.options.easing, function () { if (h) { h = false; var i = e.options.onScrollEnd; if (typeof i === "function") { i() } } }); return false }) } a.fn.materialScrollTop = function () { var d = this, f = arguments[0], c = d.length, e = 0; if (typeof f == "object" || typeof f == "undefined") { d[e].materialScrollTop = new b(d[e], f) } return d } }(jQuery)); $(document).ready(function () { $("body").materialScrollTop({ revealElement: "header", revealPosition: "bottom", onScrollEnd: function () { console.log("Scrolling End") } }) });