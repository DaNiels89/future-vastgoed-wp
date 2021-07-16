jQuery(document).ready(function ($) {
	$(".waypoint-animation").each(function () {
		$(this).waypoint(
			function (direction) {
				if (direction == "down") {
					$(this.element).addClass("animation-finished");
				} else {
					$(this.element).removeClass("animation-finished");
				}
			},
			{ offset: "90%" }
		);
	});

	$(".mobile-center-slider").slick({
		arrows: false,
		dots: true,
		autoplay: true,
		centerMode: true,
		centerPadding: "calc(3.333em - 0.5em)",
		slidesToShow: 3,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: "calc(2.333em - 0.5em)",
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: "calc(2.333em - 0.5em)",
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: "calc(2.333em - 0.5em)",
					slidesToShow: 1,
				},
			},
		],
	});
});
