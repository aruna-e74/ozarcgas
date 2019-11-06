var $ = jQuery.noConflict();

jQuery(document).ready(function($){
	/*-- Main Menu --*/
	$(window).on('resize load', function(){
		if ( $(window).width() >= 768 ) {
			$('ul#main-menu > li.menu-item-has-children > ul.sub-menu').addClass('first-sub');
			$('ul#main-menu > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children > ul.sub-menu').addClass('second-sub');

			$('li.menu-item-has-children').hover(function(){
				$(this).find('ul.sub-menu.first-sub').toggleClass('show-sub-menu');
			});

			$('ul.sub-menu.first-sub li.menu-item-has-children').hover(function(){
				$(this).find('ul.sub-menu.second-sub').toggleClass('show-sub-menu');
			});
		}
	});

	/*-- Mobile Menu --*/
	$('.bars-wrapper').click(function(){
    	$(this).toggleClass('change');
		$(this).parents().find('.mobile-menu-wrapper').find('.mobile-nav-wrapper').toggleClass('nav-wrapper-show');
		// $(this).parents().find('.main-menu-wrapper').find('.main-nav-wrapper').find('.nav-wrapper').toggleClass('nav-wrapper-show');
  	});

	$('ul#mobile-menu > .menu-top-menu-container > li.menu-item-has-children > ul.sub-menu').addClass('first-mobile-sub');
	$('ul#mobile-menu > .menu-top-menu-container > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children > ul.sub-menu').addClass('second-mobile-sub');

	$('ul#mobile-menu > .menu-main-menu-container > li.menu-item-has-children > ul.sub-menu').addClass('first-mobile-sub');
	$('ul#mobile-menu > .menu-main-menu-container > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children > ul.sub-menu').addClass('second-mobile-sub')

	$('ul#mobile-menu > .menu-main-menu-container > li.menu-item-has-children').append('<i class="fas fa-plus open-menu-icon open-icon-one"></i>');
	$('ul#mobile-menu > .menu-main-menu-container > li.menu-item-has-children > ul.sub-menu.first-mobile-sub > li.menu-item-has-children').append('<i class="fas fa-plus open-menu-icon open-icon-two"></i>');

	$('i.fas.fa-plus.open-menu-icon.open-icon-one').click(function(){
		$(this).toggleClass('close-menu-icon');
		$(this).parent('li.menu-item-has-children').find('ul.sub-menu.first-mobile-sub').toggleClass('show-mobile-sub-menu');
	});

	$('i.fas.fa-plus.open-menu-icon.open-icon-two').click(function(){
		$(this).toggleClass('close-menu-icon');
		$(this).parent('li.menu-item-has-children').find('ul.sub-menu.second-mobile-sub').toggleClass('show-mobile-sub-menu');
	});

	/*-- Gallery Slider --*/
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots: false,
		adaptiveHeight: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2
			}
		},{
			breakpoint: 576,
			settings: {
				slidesToShow: 1
			}
		}],
	});


	$("#year").text(new Date().getFullYear());
});
