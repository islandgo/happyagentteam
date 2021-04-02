( function() {

	var app = {
		
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
		
		/* Initialize navigation */
		app.initNavigation();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();

		/* Initialize teams */
		app.initTeams();
		
	});
	
	jQuery(window).on('load', function(){


	})


})();