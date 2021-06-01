"use strict";
	
// Window Load
$(window).on('load', function(){
	/*======== Banner Height ========*/
	if ($("#banner").length) {
		var winWidth=$(window).width();
		var winHeight=$(window).height();
		$('#wrapper').css('min-height',winHeight +'px');
		$(".banner-thumb").css('height',winHeight +'px');
	}
	if ($(".banner-slider.home2").length) {
		var header_height= $("#header").height();
		var header_height = $(window).height() - header_height;
		$(".banner-thumb").css('height',header_height +'px');
	}
	headerHeight(); //Sticky Header
});

// Window Ready
$(function($) {
	/*======== Banner Slider ========*/
	if ($("#banner").length) {
		$('.banner-img-slider').slick({
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			arrows:false,
		});
		/*======== Banner Height ========*/
		var winWidth=$(window).width();
		var winHeight=$(window).height();
		$('#wrapper').css('min-height',winHeight +'px');
		$(".banner-thumb").css('height',winHeight +'px');
	}
	
	/*======== What Client Say Slider ========*/
	if ($("#client-say").length) {
		$('.slider-for').slick({
			centerMode: true,
			slidesToShow: 5,
			slidesToScroll: 1,
			arrows: true,
			asNavFor: '.slider-nav',
			centerPadding: '0',
			responsive: [
				{
					breakpoint:767,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1
					}
				},
				{
					breakpoint:640,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1
					}
				},
				{
					breakpoint:479,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				
			}],
			
		});
		$('.slider-nav').slick({
			slidesToShow:1,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			focusOnSelect: true,
			arrows: false,
		});
	}
	
	searchBox(); //SearchBox
	headerHeight(); //Sticky Header
	HeaderSearch(); // header search toggle
	SubmenuToggle(); // Mobile Menu
	
	// Checkbox/Radio Js
	$('.label_check, .label_radio').on("click", function() {
		setupLabel();
	});
	setupLabel(); 
	
	// Counter JS
	if ($(".counter").length) {
		$('.counter').counterUp({
			delay: 10,
			time:1000
		}); 
	}
	
	//Copyright Year
	var currentYear = (new Date).getFullYear();
	$("#footer .copyright .year").text(currentYear);
});

// Window Resize
$(window).on('resize', function(){
	/*======== Banner Height ========*/
	if ($("#banner").length) {
		var winWidth=$(window).width();
		var winHeight=$(window).height();
		$('#wrapper').css('min-height',winHeight +'px');
		$(".banner-thumb").css('height',winHeight +'px');
	}
	if ($(".banner-slider.home2").length) {
		var header_height= $("#header").height();
		var header_height = $(window).height() - header_height;
		$(".banner-thumb").css('height',header_height +'px');
	}
	searchBox(); //SearchBox
	headerHeight(); //Sticky Header
	HeaderSearch(); // header search toggle
});


//Fixed nav bar on top
$(window).scroll(function() {
	var HeadTopHeight = $(".header-top").outerHeight();
	var header_height = $("#header").outerHeight();
	var Wrapper = $("#wrapper");
	var new_header_height =  header_height - HeadTopHeight;
	var fixednav = $(".navbar-fixed-top");
    if ($(".navbar").offset().top > 40) {
        fixednav.addClass("sticky-header").css('top','-'+ HeadTopHeight + 'px');
		Wrapper.css("padding-top", new_header_height + "px");
    } else {
        fixednav.removeClass("sticky-header").css('top',0);
		Wrapper.css("padding-top", header_height + "px");
    }
});

// Checkbox/Radio Js
function setupLabel() {
	if ($('.label_check input').length) {
		$('.label_check').each(function(){ 
			$(this).removeClass('c_on');
		});
		$('.label_check input:checked').each(function(){ 
			$(this).parent('label').addClass('c_on');
		});                
	};
	if ($('.label_radio input').length) {
		$('.label_radio').each(function(){ 
			$(this).removeClass('r_on');
		});
		$('.label_radio input:checked').each(function(){ 
			$(this).parent('label').addClass('r_on');
		});
	};
};
// Set Sticky Header
function headerHeight(){
	var header_height = $("#header").outerHeight();
	
	var Wrapper = $("#wrapper");
	Wrapper.css("padding-top", header_height + "px");
}

//SearchBox Spacing
function searchBox(){
	var winWidth=$(window).width();
	var left_offset = 0;
	var left_offset = $(".container").offset().left + 15; // 15=padding of container 
	var searchbox = $(".navbar .search-box");
	searchbox.css("padding-right",  left_offset +"px");
	searchbox.css("margin-right",'-' + left_offset +"px");
	if(winWidth < 992 ){
		searchbox.css("padding-left",  left_offset +"px");
		searchbox.css("margin-left",'-' + left_offset +"px");
	}
	else
	{
		searchbox.css("padding-left","0px");
		searchbox.css("margin-left",30+"px");
	}
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