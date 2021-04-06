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
			jQuery('.map-wrap area, .fc-list a').hover(
					function() {
							var currentID = jQuery(this).attr('data-area-id');
							var target = jQuery('.map-hover-item[data-area-id="' + currentID + '"], .map-details > div[data-area-id="'+ currentID +'"], .fc-list > a[data-area-id="'+ currentID +'"]');

							target.addClass('active');
							console.log(target);
							console.log(currentID);
					},
					function() {
							jQuery('.map-hover-item, .map-details > div, .fc-list > a').removeClass('active');
					}
			);

			jQuery(".fire-main-map.alameda").click(function(){
				jQuery('.map-main-frame').detach().appendTo('.ip-container #content').css({'display' : 'none'});
				jQuery('.map-alameda').css({'display' : 'block'});
			  });

			  jQuery(".fire-main-map.costa").click(function(){
				jQuery('.map-main-frame, .map-alameda').detach().appendTo('.ip-container #content').css({'display' : 'none'});
				jQuery('.map-costa').css({'display' : 'block'});
			  });

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
				fade: true,
				slidesToShow: 1,
				speed: 1000,
				autoplay: false,
				autoplaySpeed: 5000,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: '.hp-team .ai-font-arrow-b-p.slick-prev',
				nextArrow: '.hp-team .ai-font-arrow-b-n.slick-next',
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
		},
		initClients: function() {
			var rev = $('.client-slick');
			rev.on('init', function (event, slick, currentSlide) {
				var
					cur = $(slick.$slides[slick.currentSlide]),
					next = cur.next(),
					next2 = cur.next().next(),
					prev = cur.prev(),
					prev2 = cur.prev().prev();
				prev.addClass('slick-sprev');
				next.addClass('slick-snext');
				prev2.addClass('slick-sprev2');
				next2.addClass('slick-snext2');
				cur.removeClass('slick-snext').removeClass('slick-sprev').removeClass('slick-snext2').removeClass('slick-sprev2');
				slick.$prev = prev;
				slick.$next = next;
			}).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
				console.log('beforeChange');
				var
					cur = $(slick.$slides[nextSlide]);
				console.log(slick.$prev, slick.$next);
				slick.$prev.removeClass('slick-sprev');
				slick.$next.removeClass('slick-snext');
				slick.$prev.prev().removeClass('slick-sprev2');
				slick.$next.next().removeClass('slick-snext2');
				next = cur.next(),
					prev = cur.prev();
				//prev2.prev().prev();
				//next2.next().next();
				prev.addClass('slick-sprev');
				next.addClass('slick-snext');
				prev.prev().addClass('slick-sprev2');
				next.next().addClass('slick-snext2');
				slick.$prev = prev;
				slick.$next = next;
				cur.removeClass('slick-next').removeClass('slick-sprev').removeClass('slick-next2').removeClass('slick-sprev2');
			});

			rev.slick({
				speed: 1000,
				arrows: true,
				dots: true,
				focusOnSelect: true,
				infinite: true,
				centerMode: true,
				slidesPerRow: 1,
				slidesToShow: 1,
				slidesToScroll: 1,
				centerPadding: '0',
				swipe: true,
				prevArrow: '<span class="ai-font-arrow-b-p slick-prev"></span>',
				nextArrow: '<span class="ai-font-arrow-b-n slick-next"></span>',
				customPaging: function (slider, i) {
					return '';
				},
				/*infinite: false,*/
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

		/* Initialize Clients */
		app.initClients();
		
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