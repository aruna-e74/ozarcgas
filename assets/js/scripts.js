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

	$("#year").text(new Date().getFullYear());
});
