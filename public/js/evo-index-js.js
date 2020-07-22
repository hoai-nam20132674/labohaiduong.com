$(document).ready(function ($) {
	$('.home-slider').slick({
		lazyLoad: 'ondemand',
		autoplay: true,
		autoplaySpeed: 4000,
		fade: true,
		cssEase: 'linear',
		dots: true,
		arrows: false,
		infinite: true
	});
	$('.evo-owl-blog').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true
				}
			}
		]
	});
	$('.evo-owl-product').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true
				}
			}
		]
	});
});
function learnTab(){
	$("[data-learn-tab]").length > 0 && ($("[data-learn-tab]").on("mouseover click ontouchstart", function() {
		var t = $(this),
			a = t.attr("data-learn-tab"),
			i = $(a),
			e = i.closest(".tab-element-content"),
			o = t.closest(".circle-container");
		e.find(".for-tab").removeClass("active"),
			o.find("[data-learn-tab]").removeClass("active"),
			t.addClass("active"),
			i.addClass("active"),
			e.find(".for-tab.start").hide()
	}))
}
function learTabMB(){
	$("[data-learn-tab]").on("mouseleave click", function() {
		var t = $(this),
			a = t.attr("data-learn-tab"),
			i = $(a),
			e = i.closest(".tab-element-content");
		t.closest(".circle-container");
		t.removeClass("active"), i.removeClass("active"), e.find(".for-tab.start").show()
	})
}
function drawCircleMy() {
	$(".learning-elements-wrap").length > 0 && $(".learning-elements-wrap").each(function() {
		var t = $(this).width();
		$(this).css("height", t), updateLayout(t)
	})
}

function initEvents() {
	$(function() {
		drawCircleMy(),
			learnTab()
	}),
	$(window).on("load", function(){}),
		$(window).on("resize", function(){
		setTimeout(drawCircleMy, 400);
		if ($(window).width() > 1025){
				learTabMB()
		}	
	})
}
var updateLayout = function(t) {
	var a = $(".learning-elements-wrap .learning-item");
	if ($(window).width() > 991)
		for (var i = 0; i < a.length; i++) {
			var e = 360 / a.length,
				o = e * i;
			$(a[i]).css("transform", "rotate(" + o + "deg) translate(0, -" + (t / 2 - 40) + "px) rotate(-" + o + "deg)")
		} else
			for (var i = 0; i < a.length; i++) {
				var e = 360 / a.length,
					o = e * i;
				$(a[i]).css("transform", "rotate(" + o + "deg) translate(0, -" + (t / 2 - 15) + "px) rotate(-" + o + "deg)")
			}
};
initEvents();