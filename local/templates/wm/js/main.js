function is_mobile() {
	return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
}
$(window).on('load', function() {
	 if (!is_mobile()) {
			$('.wrapper-loader').addClass('is-fade');
			 setTimeout(function() {
			 	$('.wrapper-loader').fadeOut(200);
			 }, 1000);
			 new WOW().init();
		}
		if (!is_mobile()) {
			if ($('.about-us_advantages').length) {
				var show = true;
					if (!show) return false;
					var w_top = $(window).scrollTop();
					var e_top = $('.about-us_advantages').offset().top;
					if (w_top + $(window).height() > e_top) {
						 setTimeout(function() {
							$('.advatage-mod_item').each(function(index) {
								var jthis = $(this);
								setInterval(function() {
									jthis.removeClass('is-fade');
								}, 400 * index);
							});
							$('.advatage-digit').each(function(index) {
								var jthis = $(this);
								jthis.spincrement({
									from: 0,
									decimalPlaces: 0,
									decimalPoint: '.',
									thousandSeparator: ' ',
									duration: 4000,
									leeway: 50,
									easing: 'spincrementEasing',
								});
							});
						 }, 1000);
						show = false;
					}
			
			}
		}
	var heightHead = $('.ui-header').outerHeight();
	jQuery(window).on("resize", function() {
		heightHead = +parseInt($('.ui-header').outerHeight());
	});
	var tMenu = 0
	if($('.wrapper-project_tab-names').length) {
		 tMenu= +parseInt($('.wrapper-project_tab-names').offset().top);
	}
	var hMenu = $('.wrapper-project_tab-names').outerHeight();
	jQuery(window).on("scroll load", function() {
		if ($(window).scrollTop() > heightHead) {
			 $('.ui-header').addClass('fixed-menu');
			 if($('.ui-header').hasClass('is-main')){
			 } else{
			 	$('.global-wrapper').css('paddingTop', heightHead);
			 }
			 setTimeout(function() {
			 	$('.ui-header').addClass('scroll-transform');
			 }, 100);
		} else {
			$('.ui-header').removeClass('fixed-menu');
			$('.ui-header').removeClass('scroll-transform');
			 if($('.ui-header').hasClass('is-main')){
			 } else{
			 	$('.global-wrapper').css('paddingTop', 0);
			 }
		}

		if ($(window).scrollTop() > $(window).height()) {
			$('.scroll-to-top').addClass('scroll-to-top-visible');
		} else {
			$('.scroll-to-top').removeClass('scroll-to-top-visible');
		}
		if($(window).width()< 575 && $('.project_tab-names').length ){
			if ($(window).scrollTop() +heightHead> tMenu) {
				 $('.project_tab-names').addClass('fixed-menu2');
				 $('.project_tab-names').css('top', heightHead);
				 $('.global-wrapper').css('paddingTop', heightHead + hMenu);
			} else {
				$('.project_tab-names').removeClass('fixed-menu2');
				('.global-wrapper').css('paddingTop', heightHead);
				$('.project_tab-names').css('top', 0);
			}
		}
	});
	jQuery(window).on("scroll resize", function() {
		var $sections = $('.white-section'); 
		var hHead = $('.ui-header').outerHeight();
		$sections.each(function(i, el) {
			var top = $(el).offset().top;
			var bottom = top + $(el).outerHeight();
			var scroll = $(window).scrollTop();
			if (scroll> top && scroll < bottom) {
				$('.ui-header').addClass('is-black');
			} 
			if (scroll > bottom) {
				$('.ui-header').removeClass('is-black');
			} 
			var m_section = $('.main-section').outerHeight();
			if (scroll < m_section) {
				$('.ui-header').removeClass('is-black');
			}
		});
	});
});
jQuery(document).ready(function($) {
	if (is_mobile()) {
	 $('.wrapper-loader').addClass('is-fade');
	  	setTimeout(function() {
	  		$('.wrapper-loader').fadeOut(150);
	  	}, 500);
	  }
	lazyLoad($('body'));
	if($('.main-section').length){
		$('.ui-header').addClass('is-main');
		$('.main-content').addClass('is-main');
	}
	
 		$('.arrow-next_btn').on("click", function() {
			var top = $(this).closest('.section').next().offset().top;
			$('body,html').animate({
				scrollTop: top
			}, 1000);
		});
	if (is_mobile()) {
		$('.dropdown-menu>li>a').on("click", function() {
			if($(this).siblings('.dropdown-submenu').length){
				$(this).closest('li').siblings('li').removeClass('is-active');
				$(this).closest('li').toggleClass('is-active');
				return false;
			}
		});
 	}
	$(".hamburger").on("click", function() {
		$(this).toggleClass('is-active');
		$('.dropdown-box').toggleClass('is-open');
		$('.dropdown-box_footer').toggleClass('is-active');
		$('.head_second-img').toggleClass('is-white');
		$('.callback-content_fixed').removeClass('is-open');
		$('html').toggleClass('is-hidden');
	});
	
	$('.js_discuss-project_2').on("click", function() {
		event.preventDefault();
		$('.callback-content_fixed').toggleClass('is-open');
	});
	$('.js_discuss-project').on("click", function() {
		event.preventDefault();
		$('.ui-header').toggleClass('is-pointer');
		$('.callback-content_fixed').toggleClass('is-open');
		$('.main_section-inner').toggleClass('is-active');
		$('html').toggleClass('is-hidden');
	});
	$('.callback-content_close-btn').on("click", function() {
		$('.callback-content_fixed').removeClass('is-open');
		$('.main_section-inner').removeClass('is-active');
		$('.ui-header').removeClass('is-pointer');
		if($('.dropdown-box').hasClass('is-open')){
		} else{
			$('html').removeClass('is-hidden');
		}
	});
	$('.main-section').on("touchend, click", function(e) {
		 	if( $(e.target).closest(".callback-content").length|| $(e.target).closest(".js_discuss-project").length) return;
		 	$('.callback-content_fixed').removeClass('is-open');
			$('.main_section-inner').removeClass('is-active');
			$('html').removeClass('is-hidden');
			$('.ui-header').removeClass('is-pointer');
	});

		$('.service-menu_title').on("click", function() {
			$(this).closest('.service-item').siblings().removeClass('is-active');
			$(this).closest('.service-item').toggleClass('is-active');
			$(this).closest('.service-item').siblings().find('.service_sub-menu').slideUp()
			$(this).closest('.service-item').find('.service_sub-menu').slideToggle();
		});

	$('.project-filter_item-title').on("click", function() {
		$(this).closest('.project-filter_item').siblings('.project-filter_item').removeClass('is-active');
		$(this).closest('.project-filter_item').siblings('.project-filter_item').find('.wrapper_projects-filter_menu').slideUp(300);
		$(this).closest('.project-filter_item').toggleClass('is-active');
		$(this).closest('.project-filter_item').find('.wrapper_projects-filter_menu').slideToggle(300);
	});
	 

	if (is_mobile()) {
		$('.advatage-mod_item').removeClass('is-fade');
	}
	$('.form-mod_control').focus(function() {
		$(this).closest('.form-mod_group').addClass('focus');
	});
	$('.form-mod_control').blur(function() {
		if ($(this).val().length == 0) {
			$(this).closest('.form-mod_group').removeClass('focus');
		}
	});
	$('form').find('.form-mod_control').each(function() {
		if ($(this).val().length > 1) {
			$(this).closest('.form-group').addClass('focus');
		}
	})
	$(".upload-file").change(function(){
      var filename = $(this).val().replace(/.*\\/, "");
      $(".upload-message_text").html(filename);
      $(".upload-message_box").addClass("active");
      $('.input-file-text').val('Другой файл');
      $('.contact-form_file').addClass('active');
  });
  $('.js_brief-list_2 .text').on("click", function() {
  	$(this).closest('li').siblings().find('.text').removeClass('is-active');
  	$(this).toggleClass('is-active');
  });
  $('.js_brief-list .text').on("click", function() {
  	$(this).toggleClass('is-active');
  });
 	if($('.case-item_bg-content').length){
		var controller = new ScrollMagic.Controller();
		var wipeAnimation = new TimelineMax()
			// animate to second panel
			.to(".case-item_bg-content", 0, {z: -150})		// move back in 3D space
			.to(".case-item_bg-content", 1,   {x: "-20%"})	// move in to first panel
			.to(".case-item_bg-content", 0, {z: 0})				// move back to origin in 3D space
			// animate to third panel
			.to(".case-item_bg-content", 0, {z: -150, delay: .1})
			.to(".case-item_bg-content", 1,   {x: "-40%"})
			.to(".case-item_bg-content", 0, {z: 0})
			// animate to forth panel
			.to(".case-item_bg-content", 0, {z: -150, delay: .1})
			.to(".case-item_bg-content", 1,   {x: "-60%"})
			.to(".case-item_bg-content", 0, {z: 0})
			// animate to five panel
			.to(".case-item_bg-content", 0, {z: -150, delay: .1})
			.to(".case-item_bg-content", 1,   {x: "-80%"})
			.to(".case-item_bg-content", 0, {z: 0});
		// create scene to pin and link animation
		new ScrollMagic.Scene({
				triggerElement: ".сase-item_bg",
				triggerHook: "onLeave",
				duration: "400%"
			})
			.setPin(".сase-item_bg")
			.setTween(wipeAnimation)
			.addTo(controller);
	}
	$(".fancybox").fancybox({
		afterLoad: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').addClass('is-overflow');
				$('.scroll-to-top').addClass('is-hidden');
			}
		},
		afterClose: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').removeClass('is-overflow');
				$('.scroll-to-top').removeClass('is-hidden');
			}
		}
	});

	$('.tab-container').on('click', '.tab:not(.active)', function() {
			$(this).addClass('active').siblings().removeClass('active')
			$(this).closest('.tab-container').find('.tab-item').removeClass('is-visible').eq($(this).index()).addClass('is-visible');
		});

	if (!is_mobile() && $('.main-section_bg').length) {
			var m_title = document.querySelector('.main-section_bg');
			var parallaxInstance = new Parallax(m_title,{
				 hoverOnly: true,
			});
		}
	

	$('.scroll-to-top').on('click', function() {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	$('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
		"clearIncomplete": true,
		showMaskOnHover: false,
	});
});
function lazyLoad($content) {
		$content.find('img[data-src], source[data-src], audio[data-src], iframe[data-src]').each(function() {
			$(this).attr('src', $(this).data('src'));
			$(this).removeAttr('data-src');
			if ($(this).is('source')) {
				$(this).closest('video').get(0).load();
			}
		});
	}

$(document).ready(function (){

    if ($('.map-container').length) {
        YaMapsShown = false;
        $(window).on("scroll load resize", function() {
            if (!YaMapsShown) {
                if ($(window).scrollTop() + $(window).height() > $('.map-container').offset().top - 500) {
                    showYaMaps();
                    YaMapsShown = true;
                }
            }
        });
        function showYaMaps() {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
            document.getElementById("map").appendChild(script);
            script.onload = function() {
                ymaps.ready(init);
                var myMap,
                    myPlacemark;

                function init() {
                    myMap = new ymaps.Map("map", {
                        center: [55.74396806900603, 37.561625499999984],
                        zoom: 16,
                        behaviors: ['default', 'scrollZoom'],
                    });
                    myMap.behaviors.disable('scrollZoom');
                    myMap.geoObjects.add(new ymaps.Placemark([55.74396806900603, 37.561625499999984], {
                        balloonContent: 'г.Калининград, Парковый <br />переулок,7, корпус 1, офис 2',
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/local/templates/wm/img/icons/marker.svg',
                        iconImageSize: [49, 49],
                    }));
                }
            }
        }
    }

})
