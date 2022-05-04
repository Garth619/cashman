jQuery(document).ready(function ($) {
	$('body').addClass('ilawyer-ready');

	/**
	 * Lazy Loading - some browsers need to use the fallback below as of 2/22/2022
	 * https://web.dev/browser-level-image-lazy-loading/
	 * https://github.com/aFarkas/lazysizes
	 */
	// if ("loading" in HTMLImageElement.prototype) {
	//   //console.log("loading in use");
	//   const images = document.querySelectorAll('img[loading="lazy"]');
	//   images.forEach((img) => {
	//     img.src = img.dataset.src;
	//   });
	// } else {
	//   //console.log("loading NOT in use");
	//   const script = document.createElement("script");
	//   script.src =
	//     "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js";
	//   document.body.appendChild(script);
	// }

	/**
	 * Wistia - loads wistia on click to improve initial page speed fallsback if thumbnails need to be loaded on page load
	 */
	function checkWistia() {
		const self = this;
		const wistiaID = $(this).attr('data-wistia');
		if (typeof Wistia === 'undefined') {
			loadWistia(self, wistiaID);
		} else {
			//console.log("wistia is already defined");
		}
	}
	function loadWistia(self, wistiaID) {
		jQuery.getScript(
			'https://fast.wistia.com/assets/external/E-v1.js',
			function (data, textStatus, jqxhr) {
				// We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
				// a hook we can listen for. So we need to set an interval to check when it's ready
				var interval = setInterval(function () {
					if ($(self).attr('id') && window._wq) {
						_wq.push({
							id: wistiaID,
							onReady: function (video) {
								video.play();
							},
						});
						clearInterval(interval);
					}
				}, 100);
			}
		);
	}
	$('.wistia_embed').on('click', checkWistia);

	/**
	 * Waypoints
	 */
	function createWaypoint(
		triggerElementId,
		animatedElement,
		className,
		offsetVal,
		functionName,
		reverse
	) {
		if (jQuery('#' + triggerElementId).length) {
			var waypoint = new Waypoint({
				element: document.getElementById(triggerElementId),
				handler: function (direction) {
					if (direction === 'down') {
						jQuery(animatedElement).addClass(className);

						if (typeof functionName === 'function') {
							functionName();
							this.destroy();
						}
					} else if (direction === 'up') {
						if (reverse) {
							jQuery(animatedElement).removeClass(className);
						}
					}
				},
				offset: offsetVal,
				// Integer or percent
				// 500 means when element is 500px from the top of the page, the event triggers
				// 50% means when element is 50% from the top of the page, the event triggers
			});
		}
	}

	createWaypoint('section-one', '#body', 'mobile-header-change', 68, null, true);
	createWaypoint('internal-main', '#body', 'mobile-header-change', 68, null, true);

	/**
	 * Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
	 */
	$(function () {
		$('a[href*="#"]:not([href="#"])').click(function () {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate(
						{
							scrollTop: target.offset().top,
						},
						1000
					);
					return false;
				}
			}
		});
	});

	/**
	 * Slick Carousel ( http://kenwheeler.github.io/slick/ )
	 */

	$('.selling-points-slides').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		mobileFirst: true,
		arrows: false,
		adaptiveHeight: true,
		dots: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					fade: false,
					arrows: false,
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 974,
				settings: {
					fade: false,
					arrows: false,
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
		],
	});

	$('.logos-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		mobileFirst: true,
		arrows: false,
		dots: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					fade: false,
					arrows: false,
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 974,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 1100,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				},
			},
			{
				breakpoint: 1800,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5,
				},
			},
		],
	});

	$('#sec-four-testimonials').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		mobileFirst: true,
		adaptiveHeight: true,
		fade: true,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false,
					arrows: true,
					prevArrow: '#sec-four-arrow-left',
					nextArrow: '#sec-four-arrow-right',
				},
			},
		],
	});

	$('#sec-six-case-results').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		mobileFirst: true,
		arrows: false,
		adaptiveHeight: true,
		dots: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					fade: false,
					arrows: false,
					adaptiveHeight: false,
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 974,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 1649,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				},
			},
		],
	});

	/**
	 * Remove "#" from menu anchor items to avoid jump to the top of the page
	 */
	$("ul > li.menu-item-has-children > a[href='#']").removeAttr('href');
	// not found go back button
	function goBack() {
		window.history.back();
	}
	$('span.go-back').on('click', function (e) {
		goBack();
	});

	/**
	 * Sidebar slideToggle
	 */

	$('.widget_nav_menu ul.menu > li.menu-item-has-children a').on('click', function (e) {
		$(this).toggleClass('active');
		$(this).next('ul').toggleClass('open');
	});

	/**
	 * Sidebar Current Class for Blog Sidebars
	 * add active to blog widgets that dont show a built in current class
	 */
	var pgurl = window.location.href;
	$('.widget_block ul li').each(function () {
		if ($(this).find('a').attr('href') == pgurl) $(this).addClass('blog-active');
	});

	/**
	 * Resize Nav Functions
	 * tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page
	 */
	$('#menu-wrap').on('click', function (e) {
		// $(this).toggleClass("open");
		// $("header").toggleClass("open");
		$('nav').slideToggle('slow');
		$('body').toggleClass('ilawyer-menu-open');
		$('html, body').toggleClass('ilawyer-fixed');
	});
	function navDesktop() {
		$('header nav').addClass('nav_desktop');
		$('header nav li.menu-item-has-children > a').next('ul.sub-menu').removeClass('open');
		$('header nav').removeClass('nav_device');
	}
	function navDevice() {
		$('header nav').removeClass('nav_desktop');
		$('header nav').addClass('nav_device');
	}
	function tabletClick() {
		$(this).parent().toggleClass('active');
		$(this).toggleClass('active');
		$(this).next('ul.sub-menu').toggleClass('active');
	}
	// nav
	if ($(window).width() >= 1200) {
		navDesktop();
	}
	if ($(window).width() < 1200) {
		navDevice();
		$('header nav li.menu-item-has-children > a').off().on('click', tabletClick);
	}
	// resize window width and fire functions
	$(window).resize(
		_.debounce(function () {
			if ($(window).width() >= 1200) {
				navDesktop();
				// off
				$('header nav li.menu-item-has-children > a').off('click', tabletClick);
			}
			if ($(window).width() < 1200) {
				navDevice();
				// off
				$('header nav li.menu-item-has-children > a').off().on('click', tabletClick);
			}
		}, 100)
	);
}); // document ready
