( function() {

	var app = {


		initDetectScroll: function() {
			if( jQuery(window).width() > 991 && jQuery(window).scrollTop()  > 56 ) {
				jQuery('header.header').addClass('show-fixed');
			} else {
				jQuery('header.header').removeClass('show-fixed');
			}
		},

		initNavSlide: function(){
			jQuery('#nav2 li .sub-menu').css('display','none');
                
            jQuery("#nav2 li").hover(
                function() {
                    jQuery(this).find("ul.sub-menu").eq(0).animate({"height": "show", "opacity": "show"}, 600, "swing");
                },
                function() {
                    jQuery(this).find("ul.sub-menu").eq(0).hide();
                },
			);
		},

		initMainNav: function() {
            /* Split Nav */
            jQuery(".header-inner #nav2").splitNav({
                logo: '.logo-holder',
                navClasses : 'col-md-4',
                roundoff : false
            });
            
            jQuery('.logo-holder').addClass('col-md-4 no-padding');
        },
		
		initNavigation: function() {
			var $nav = jQuery( '#nav' );
			if ( $nav.length > 0 ) $nav.navTabDoubleTap();
		},
		initFeaturedProperties: function() {
			var slickItems = ["1", "2", "3"];
			slickItems.forEach(slickAction);

			function slickAction(item, index) {
				jQuery('.fp-slick-' + item).slick({
					dots: false,
					infinite: true,
					slidesToShow: 1,
					speed: 1000,
					autoplay: false,
					autoplaySpeed: 5000,
					slidesToScroll: 1,
					arrows: false,
					responsive: [
						{
							breakpoint: 992,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
							}
						},
						{
							breakpoint: 768,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 481,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
						// You can unslick at a given breakpoint now by adding:
						// settings: "unslick"
						// instead of a settings object
					]
				});

				$(".fp-slick-"+item+" + div .next").on("click", function () {
					console.log("asd");
					jQuery(".fp-slick-"+item+"").slick('slickNext');
					
				});

				$(".fp-slick-"+item+" + div .prev").on("click", function () {
					jQuery(".fp-slick-"+item+"").slick('slickPrev');
				});
			}

		},
		initFeaturedCommunities: function() {
			/* Put featured communities code here */
			var map = jQuery(".map-inner");
			var mapOrigWidth = 1600;
			var mapOrigHeight = 1187;
			var container = jQuery(".map-wrap");
			var containerWidth = container.width();
			var scale = containerWidth / mapOrigWidth;
			scale = scale > 1 ? scale : scale;
			map.css({
					transform: 'scale(' + scale + ')',
					transformOrigin: '0 0'
			});
			container.css({
					height: (mapOrigHeight * scale)
			});

			console.log('reszed');
		},

		fcMapHover: function() {
			jQuery('.map-inner area').hover(
					function() {
							var currentID = jQuery(this).attr('data-area-id');
							var target = jQuery('.map-hover-item[data-area-id="' + currentID + '"], .map-details > div[data-area-id="'+ currentID +'"]');

							target.addClass('active');
							console.log(target);
							console.log(currentID);
					},
					function() {
							jQuery('.map-hover-item, .map-details > div').removeClass('active');
					}
			);
		},
		initTestimonials: function() {
			/* Put testimonials code here */
		},
		initQuickSearch: function() {
			/* Put quick search code here */
		},
		initCustomFunction: function() {
			/* See the pattern? Create more functions like this if needed. */
		},
		initTeams: function() {
			jQuery('.team-slick').slick({
				dots: false,
				infinite: true,
				slidesToShow: 1,
				speed: 1000,
				autoplay: false,
				autoplaySpeed: 5000,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: '.hp-properties .arrow-btn.prev',
				nextArrow: '.hp-properties .arrow-btn.next',
				responsive: [
				{
					breakpoint: 992,
					settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					}
				},
				{
					breakpoint: 768,
					settings: {
					slidesToShow: 1,
					slidesToScroll: 1
					}
				},
				{
					breakpoint: 481,
					settings: {
					slidesToShow: 1,
					slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
			});
		}
		
	}

	
	jQuery(document).ready( function() {

		app.initNavSlide();

		app.initMainNav();
		
		/* Initialize navigation */
		app.initNavigation();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize featured communities */
		app.initFeaturedCommunities();

		app.fcMapHover();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();

		/* Initialize teams */
		app.initTeams();
		
	});
	
	jQuery(window).on('load', function(){
        jQuery('.logo-holder').prev().addClass('nav-left');
        jQuery('.logo-holder').next().addClass('nav-right');
        jQuery('header.header').css({'opacity' : 1});

	})

	jQuery(window).on('scroll', function(){
		app.initDetectScroll();

	})

	jQuery(window).on('resize', function(){
		app.initFeaturedCommunities();
	});


})();