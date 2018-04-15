$(window).load(function(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	$('body').removeClass('loaded'); 
});
/* viewport width */
function viewport(){
	var e = window, 
		a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
/* viewport width */
$(document).ready(function(){
	/* placeholder*/	   
	$('input, textarea').each(function(){
 		var placeholder = $(this).attr('placeholder');
 		$(this).focus(function(){ $(this).attr('placeholder', '');});
 		$(this).focusout(function(){			 
 			$(this).attr('placeholder', placeholder);  			
 		});
 	});
	/* placeholder*/

	$('.button-nav').click(function(){
		$(this).toggleClass('active'), 
		$('.main-nav-list').slideToggle(); 
		return false;
	});
	
	/* components */
	
	if($('.js-main-slider').length) {
		$('.js-main-slider').slick({
			dots: true,
			arrows: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
				  	arrows: false,
				  },
				}				
			]
		}).resize();
	};

	if($('.js-benefits-slider').length) {
		$('.js-benefits-slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			fade: false,
			cssEase: 'linear',
			responsive: [
				{
				  breakpoint: 992,
				  settings: {
				  	slidesToShow: 4,
				  }
				},
				{
				  breakpoint: 768,
				  settings: {
				  	slidesToShow: 2,
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
				  	slidesToShow: 1,
				  }
				}				
			]
		}).resize();
	};

	if($('.js-lastNews-slider').length) {
		$('.js-lastNews-slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			fade: false,
			cssEase: 'linear',
			responsive: [
				{
				  breakpoint: 992,
				  settings: {
				  	slidesToShow: 2,
				  }
				},
				{
				  breakpoint: 768,
				  settings: {
				  	slidesToShow: 1,
				  }
				}				
			]
		}).resize();
	};

	if($('.js-brands-slider').length) {
		$('.js-brands-slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			fade: false,
			cssEase: 'linear',
			responsive: [
				{
				  breakpoint: 992,
				  settings: {
				  	slidesToShow: 3,
				  }
				},
				{
				  breakpoint: 768,
				  settings: {
				  	slidesToShow: 2,
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
				  	slidesToShow: 1,
				  }
				}				
			]
		}).resize();
	};

	if($('.js-product-sliderMain').length){
		$('.js-product-sliderMain').slick({
			dots: false,
			arrows: false,
			//adaptiveHeight: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			asNavFor: '.js-product-sliderNav',
			fade: true,
			cssEase: 'linear',
		}).resize();
	}

	if($('.js-product-sliderNav').length){		
		$('.js-product-sliderNav').slick({
			dots: false,
			arrows: true,
			focusOnSelect: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			vertical: true,
			asNavFor: '.js-product-sliderMain',
			fade: false,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						vertical: false,
					},
				}
			]
		}).resize();
	}

	if($('.js-catalog-list').length) {
		$('.js-catalog-list li').find('ul').parent().addClass('chevron');
		$('.js-catalog-list li.chevron').find('span').siblings('a').addClass('addBorder');
		$('.js-catalog-list li span').click(function(){
			$(this).parent().toggleClass('active');
			if($(this).parent().hasClass('active')){
				$(this).css({'transform' : 'rotate(90deg)'});
			} else {
				$(this).css({'transform' : 'rotate(0deg)'});
			}
			$(this).siblings('ul').slideToggle();
		});
		//$('.js-catalog-list li').find('ul').addClass('chevron');
	};

	if($('.js-styled').length) {
		$('.js-styled').styler();
	};

	if($('.filter').length){
		$('.filter-title').click(function(){
			$(this).toggleClass('active');
			$(this).next('.list-checkbox').slideToggle();
		});
	}

	if($('.product').length){
		$(".product .tab").click(function(){
			$(".product .tab").removeClass("active").eq($(this).index()).addClass("active");
			$(".product .tab-item").hide().eq($(this).index()).fadeIn()
		}).eq(0).addClass("active");
	}

	if($('.about').length){
		$(".about .tab").click(function(){
			$(".about .tab").removeClass("active").eq($(this).index()).addClass("active");
			$(".about .tab-item").hide().eq($(this).index()).fadeIn()
		}).eq(0).addClass("active");
	}

	if($('.js-popup').length){
		$('.js-popup').magnificPopup({
			fixedBgPos: true,
			fixedContentPos: true,
			showCloseBtn: true,
			removalDelay: 0,
			preloader: true,
			type:"inline",
			mainClass: 'mfp-fade mfp-s-loading',
			galery: {enabled: true},
		});
	}

	if($('.mobileNav-btn').length){
		$('.mobileNav-btn').click(function(){
			$(this).toggleClass('active');
			$('.header-bottom').toggleClass('active');
		});
	}

	if($('.mobileSearch-btn').length){
		$('.mobileSearch-btn').click(function(){
			$('.header-search').slideToggle();
		});
	}

	if($('form input[type="tel"]').length){
		$('form input[type="tel"]').mask('+7 (9999) 999-99-99')
	}


	/* components */
	
	

});

var handler = function(){
	
	var height_footer = $('footer').height();	
	var height_header = $('header').height();		
	//$('.content').css({'padding-bottom':height_footer+40, 'padding-top':height_header+40});
	
	
	// var btn = document.querySelector('.footer-fullversion button');
	// var viewport = document.querySelector("meta[name=viewport]");

	// btn.addEventListener('click', function() {
	// 	if ($(this).hasClass('getBack') == true) {
	// 		viewport.setAttribute('content', 'width=device-width');
	// 		$(this).parent().css({'display' : 'flex'});
	// 		$(this).html("Полная версия").removeClass('getBack');
	// 	}
	// 	viewport.setAttribute('content', 'width=1200');
	// 	$(this).parent().css({'display' : 'flex'});
	// 	$(this).html("Мобильная версия").addClass('getBack');
	// });



	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;
	
}
$(window).bind('load', handler);
$(window).bind('resize', handler);

function initMap() {
    var mapOptions = {
		// How zoomed in you want the map to start at (always required)
		zoom: 14,

		// The latitude and longitude to center the map (always required)
		center: new google.maps.LatLng(59.8825844,30.3329941),

		// How you would like to style the map. 
		// This is where you would paste any style found on Snazzy Maps.
		styles: [
		    {
		        "featureType": "administrative",
		        "elementType": "labels.text.fill",
		        "stylers": [
		            {
		                "color": "#444444"
		            }
		        ]
		    },
		    {
		        "featureType": "landscape",
		        "elementType": "all",
		        "stylers": [
		            {
		                "color": "#f2f2f2"
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "elementType": "all",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "road",
		        "elementType": "all",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 20
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "all",
		        "stylers": [
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "elementType": "labels.icon",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "transit",
		        "elementType": "all",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "all",
		        "stylers": [
		            {
		                "color": "#46bcec"
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    }
		]	
	};

	// Get the HTML DOM element that will contain your map 
	// We are using a div with id="map" seen below in the <body>
	var mapElement = document.getElementById('map');

	if(mapElement == null){
		return;
	}

	// Create the Google Map using our element and options defined above
	var map = new google.maps.Map(mapElement, mapOptions);

	// This is marker image
	var markerImage = new google.maps.MarkerImage(
	    'img/icon-marker.png',
	    new google.maps.Size(80,74),
	    new google.maps.Point(0, 0),
	    new google.maps.Point(40,37)
	);

	// Let's also add a marker while we're at it
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(59.8825844,30.3329941),
		map: map,
		icon: markerImage,
		title: 'Nordline'
	});
}




