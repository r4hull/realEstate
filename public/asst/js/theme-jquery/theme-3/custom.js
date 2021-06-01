"use strict";

// Window Load
$(window).on('load', function(){
	headerHeight(); //Sticky Header
});

// Window Ready
$(function($) {
	/*======== What Client Say Slider ========*/
	if ($("#client-say").length) {
		$('.client-say-slider').slick({
			dots: true,
			slidesToShow: 3, 
			slidesToScroll: 1,
			arrows:false,
			responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 2,
						slidesToScroll:2
					}
				},
				{
				breakpoint:639,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}],
		});
	}
	
	/*======== Our Clients Slider ========*/
	if ($("#our-clients").length) {
		$('.clients-slider').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1199,
					settings: {
						slidesToShow: 5,
						slidesToScroll:1,
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 639,
					settings: {
						slidesToShow: 3,
						slidesToScroll:3
					}
				},
				{
				breakpoint: 479,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}],
		});
	}
	
	headerHeight(); //Sticky Header
	HeaderSearch(); // header search toggle
	SubmenuToggle(); // Mobile Menu
	
	
	//Copyright Year
	var currentYear = (new Date).getFullYear();
	$("#footer .copyright .year").text(currentYear);
});

// Window Resize
$(window).on('resize', function(){
	headerHeight(); //Sticky Header
	HeaderSearch(); // header search toggle
});

//Fixed nav bar on top
$(window).on('scroll', function(){
	var HeadTopHeight = $(".header-top").outerHeight();
	var fixednav = $(".navbar-fixed-top");
    if ($(".navbar").offset().top > 40) {
        fixednav.addClass("sticky-header").css('top','-'+ HeadTopHeight + 'px');
    } else {
        fixednav.removeClass("sticky-header").css('top',0);;
    }
});

// Set Sticky Header
function headerHeight(){
	var header_height = $("#header").outerHeight();
	var Wrapper = $("#wrapper");
	Wrapper.css("padding-top", header_height + "px");
}

// header search toggle
function HeaderSearch(){
	$(".search-button").on("click", function() {
		$(this).parent(".header-search").toggleClass("header-search-open");
	});
}

// For Mobile Menu
function SubmenuToggle(){
	$(".navbar-nav li > .menu-arrow").on("click", function() {
        $(".active").not(jQuery(this).closest('li')).removeClass('active');
        $(this).closest('li').toggleClass('active').children(".dropdown-menu").stop("true", "true").slideToggle(500);
        $(this).closest('li').siblings().find(".dropdown-menu").stop("true", "true").slideUp();
    });
}

// Placeholder for IE
$(function () {
	if(!$.support.placeholder) { 

		var active = document.activeElement;
		$(':text, textarea').focus(function () {
			if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
				$(this).val('').removeClass('hasPlaceholder');
			}
		}).blur(function () {
			if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
				$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
			}
		});
		$(':text, textarea').blur();
		$(active).focus();
		$('form').submit(function () {
			$(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
		});
	}  
});