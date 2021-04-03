<?php get_header(); ?>

	<!-- your home html -->
	<!-- Banner -->
	<section class="hp-slideshow">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?><?php endif ?>		
	</section>

	<!-- Hp Search -->
	<section class="hp-quick-search container">
		<h2>Quick Search</h2>
		<form class="comp-search-container">
			<select name="cars" id="cars" aria-label="zip code">
				<option value="volvo">City or Zip Code</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			<select name="cars" id="cars" aria-label="property type">
				<option value="volvo">Property Type</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			<select name="cars" id="cars" aria-label="beds">
				<option value="volvo">Beds</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			<select name="cars" id="cars" aria-label="baths">
				<option value="volvo">Baths</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			  <input type="text" aria-label="min price" value="Min. Price">
			  <input type="text" aria-label="max price" value="Max. Price">
			  <a href="" class="serch-btn-primary">search</a>
			  <input class="serch-btn-secondary" type="submit" value="advance" />
		</form>
	</section>

	<!-- Hp Properties -->
	<section class="hp-properties">

		
		<div class="fp-slick-wrapper">
			<div class="container">
				<div class="fp-slick-1">
					<div>
						<div class="fp-content">
							<a href="#"><img alt="dining room" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-1.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Featured</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="dining room" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-1.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Featured</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="dining room" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-1.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Featured</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="arrow-holder">
					<div class="arrow-btn prev">
						<button class="ai-font-arrow-b-p" >Previous</button>
					</div>
					<div class="arrow-btn next">
						<button class="ai-font-arrow-b-n" >Next</button>
					</div>
				</div>
			</div>
		</div>

		<div class="fp-slick-wrapper fp-line-left">
			<div class="container">
				<div class="fp-slick-2">
					<div>
						<div class="fp-content">
							<div class="fp-description">
								<h2 class="primary-text">Coming</h2>
								<h3 class="secondary-text">Soon</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
								<a href="#"><img alt="A sofa and pictures on the wall" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg"></a>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<div class="fp-description">
								<h2 class="primary-text">Coming</h2>
								<h3 class="secondary-text">Soon</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
							<a href="#"><img alt="A sofa and pictures on the wall" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg"></a>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<div class="fp-description">
								<h2 class="primary-text">Coming</h2>
								<h3 class="secondary-text">Soon</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
							<a href="#"><img alt="A sofa and pictures on the wall" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg"></a>
						</div>
					</div>
				</div>
				<div class="arrow-holder arrow-left">
					<div class="arrow-btn prev">
						<button class="ai-font-arrow-b-p" >Previous</button>
					</div>
					<div class="arrow-btn next">
						<button class="ai-font-arrow-b-n" >Next</button>
					</div>
				</div>
			</div>
		</div>

		<div class="fp-slick-wrapper">
			<div class="container">
				<div class="fp-slick-3">
					<div>
						<div class="fp-content">
							<a href="#"><img alt="A Book and living room armchair" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-3.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Pending</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="A Book and living room armchair" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-3.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Pending</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="A Book and living room armchair" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-3.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Pending</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="arrow-holder">
					<div class="arrow-btn prev">
						<button class="ai-font-arrow-b-p" >Previous</button>
					</div>
					<div class="arrow-btn next">
						<button class="ai-font-arrow-b-n" >Next</button>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- Hp Communities -->
	<section class="hp-communities">
		<div class="comp-communitiers-container">
			<div class="content">
				<h2 class="primary-text">Featured</h2>
				<h3 class="secondary-text">Communities</h3>
				<ul>
					<li>lamorinda</li>
					<li>Walnut Creek</li>
					<li>Oakland</li>
					<li>Berkeley</li>
					<li>Concord</li>
					<li>Danville</li>
				</ul>
			</div>
			<div class="map">
			<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/.jpg">
			</div>
		</div>
	</section>

	<!-- Hp About -->
	<section class="hp-about-us">
		<div class="container comp-about-us-container">
			<div class="about-img">
				<img alt="author" class="img-responsive"  src="<?php echo get_stylesheet_directory_uri() ?>/images/about-img.png">
			</div>
			<div class="content">
				<h2 class="primary-text">About</h2>
				<h3 class="secondary-text">Patrice Sandstrom</h3>
				<p class="about-primary-text">It is with great pleasure that agent welcomes you to city, and to her website.</p>
				<p class="about-secondary-text">The search is over. Her website is designed to be your one-stop for real 
					estate in sample city. This is the moment that you should enjoy the most;
					looking at the available properties in simple city; imagining yourself living in
					the home that you have always dreamed about. You don't want just another
					database that gives you rehashed property descriptions. You want to walk
					around the neighborhood from the comfort of your own homne, You want to 
					get a clear picture about life in simple city.</p>
				<div class="global-btn">
					<a href="" class="primary-btn">Read more</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Hp About -->
	<section class="hp-team">
		<h2 class="primary-text">Meet</h2>
		<h3 class="secondary-text">The Team</h3>

		<div class="team-slick">
			<div class="team-slick-item">
				<div class="comp-team-container normal">
					<div class="content">
						<h2 class="team-primary-text">John Doe</h2>
						<h3 class="team-secondary-text">Realtor</h3>
						<p>
							Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
						</p>
					</div>
					<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg">
				</div>
				<div class="comp-team-container reverse">
					<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg">
					<div class="content">
						<h2 class="team-primary-text">John Doe</h2>
						<h3 class="team-secondary-text">Realtor</h3>
						<p>
							Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
						</p>
					</div>
				</div>
			</div>
			<div class="team-slick-item">
				<div class="comp-team-container normal">
					<div class="content">
						<h2 class="team-primary-text">John Doe</h2>
						<h3 class="team-secondary-text">Realtor</h3>
						<p>
							Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
						</p>
					</div>
					<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg">
				</div>
				<div class="comp-team-container reverse">
					<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg">
					<div class="content">
						<h2 class="team-primary-text">John Doe</h2>
						<h3 class="team-secondary-text">Realtor</h3>
						<p>
							Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
						</p>
					</div>
				</div>
			</div>
			<div class="team-slick-item">
				<div class="comp-team-container normal">
					<div class="content">
						<h2 class="team-primary-text">John Doe</h2>
						<h3 class="team-secondary-text">Realtor</h3>
						<p>
							Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
						</p>
					</div>
					<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg">
				</div>
				<div class="comp-team-container reverse">
					<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg">
					<div class="content">
						<h2 class="team-primary-text">John Doe</h2>
						<h3 class="team-secondary-text">Realtor</h3>
						<p>
							Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
						</p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- Hp Vision -->
	<section class="hp-tagline">
		<p>
			At Sandstrom Group we believe successful results & a quality client experience are our responsibility. Our goal is to provide a #happyexperience for our #happysellers & #happybuyers. Give us the opportunity to exceed your expectations!
		</p>
	</section>

	<!-- Hp Vision -->
	<section class="hp-clients">
		<div class="client-flipster">
			<h2 class="primary-text">Our happy clients</h2>
			<h3>Jame Doe</h3>
			<h4>Realitor</h4>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque amet pariatur illum neque doloremque cupiditate? Quas enim facere aut deserunt eaque nostrum! Deleniti dolorem iure numquam corporis necessitatibus fugiat at?
			</p>
		</div>
		<div class="global-btn">
			<a href="" class="primary-btn">View all</a>
		</div>
	</section>

	<!-- Hp Social -->
	<section class="hp-social">
		<h2 class="primary-text">We're Social!</h2>
		<h3 class="secondary-text">Follow us</h3>
		<div class="comp-social-container">
			<div class="social-item"><a href="" class="ai-font-facebook"></a></div>
			<div class="social-item"><a href="" class="ai-font-instagram"></a></div>
			<div class="social-item"><a href="" class="ai-font-linkedin"></a></div>
			<div class="social-item"><a href="" class="ai-font-youtube"></a></div>
			<div class="social-item"><a href="" class="ai-font-yelp"></a></div>
		</div>
	</section>

	<!-- Hp git -->
	<section class="hp-git">
		<h2 class="primary-text">Get in Touch</h2>
		<div class="git-form">
			<div class="form-md pad-right">
				<label for="git-fname">Name</label>
				<input type="text" id="name" placeholder="Name">
			</div>
		
			<div class="form-md pad-right">
				<label for="git-email">Email</label>
				<input type="text" id="git-email" placeholder="Email">
			</div>
			
			<div class="form-lg">
				<label for="git-message">Message</label>
				<textarea  id="git-message" placeholder="Message"></textarea>
			</div>
			<div class="global-btn">
				<input type="submit" value="Send">
			</div>
		</div>

	</section>

	<ul class="comp-social-sidebar">
		<li class="social-item"><a href="#" class="ai-font-facebook"></a></li>
		<li class="social-item"><a href="#" class="ai-font-instagram"></a></li>
		<li class="social-item"><a href="#" class="ai-font-linkedin"></a></li>
		<li class="social-item"><a href="#" class="ai-font-youtube"></a></li>
		<li class="social-item"><a href="#" class="ai-font-yelp"></a></li>
	</ul>


	<!-- your home html -->

<?php get_footer(); ?>
