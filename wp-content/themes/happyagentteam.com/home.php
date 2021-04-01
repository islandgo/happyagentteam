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
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			<select name="cars" id="cars" aria-label="property type">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			<select name="cars" id="cars" aria-label="beds">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			<select name="cars" id="cars" aria-label="baths">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			  </select>
			  <input type="text" aria-label="min price">
			  <input type="text" aria-label="max price">
			  <a href="" class="serch-btn-primary">search</a>
			  <input class="serch-btn-secondary" type="submit" value="advance" />
		</form>
	</section>

	<!-- Hp Properties -->
	<section class="hp-properties">

		<div class="fp-slick-wrapper">
			<div class="fp-slick-1">
				<div class="fp-content">
				<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
				<div class="fp-content">
					<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
				<div class="fp-content">
					<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
			</div>
			<button>Previous</button>
			<button>Next</button>
		</div>

		<div class="fp-slick-wrapper">
			<div class="fp-slick-2">
				<div class="fp-content">
				<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
				<div class="fp-content">
					<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
				<div class="fp-content">
					<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
			</div>
			<button>Previous</button>
			<button>Next</button>
		</div>

		<div class="fp-slick-wrapper">
			<div class="fp-slick-3">
				<div class="fp-content">
				<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
				<div class="fp-content">
					<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
				<div class="fp-content">
					<img alt="logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg">
					<div class="fp-description">
						<h2 class="primary-text">Featured</h2>
						<h3 class="secondary-text">Properties</h3>
						<p class="fp-primary-style">1700 East Walnut Avenue Suite 400 El Segundo CA 90245</p>
						<h3 class="fp-secondary-style">$4,555,000</h3>
						<a href="#">View more details</a>
					</div>
				</div>
			</div>
			<button>Previous</button>
			<button>Next</button>
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
				<img src="https://placeimg.com/640/480/any" alt="">
			</div>
		</div>
	</section>

	<!-- Hp About -->
	<section class="hp-about-us">
		<div class="comp-about-us-container">
			<img src="https://placeimg.com/640/480/any" alt="">
			<div class="content">
				<h2 class="primary-text">About</h2>
				<h3 class="secondary-text">Patrice Sandstrom</h3>
				<p class="about-primary-text">It is with great pleasure that agent welcomes you to city, and to her website.</p>
				<p class="about-secondary-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum optio sequi, in veritatis cumque cupiditate veniam ullam temporibus maxime eveniet perspiciatis ratione recusandae fuga alias rerum facere culpa commodi iste.</p>
				<a href="" class="primary-btn">Read more</a>
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
					<img src="https://placeimg.com/640/480/any" alt="">
				</div>
				<div class="comp-team-container reverse">
					<img src="https://placeimg.com/640/480/any" alt="">
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
					<img src="https://placeimg.com/640/480/any" alt="">
				</div>
				<div class="comp-team-container reverse">
					<img src="https://placeimg.com/640/480/any" alt="">
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
					<img src="https://placeimg.com/640/480/any" alt="">
				</div>
				<div class="comp-team-container reverse">
					<img src="https://placeimg.com/640/480/any" alt="">
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
		<a href="" class="primary-btn" class="primary-btn">View all</a>
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
			<div class="form-btn">
				<input type="submit" value="submit">
			</div>
		</div>

	</section>

	<ul class="comp-social-sidebar">
		<li class="social-item"><a href="" class="ai-font-facebook"></a></li>
		<li class="social-item"><a href="" class="ai-font-instagram"></a></li>
		<li class="social-item"><a href="" class="ai-font-linkedin"></a></li>
		<li class="social-item"><a href="" class="ai-font-youtube"></a></li>
		<li class="social-item"><a href="" class="ai-font-yelp"></a></li>
	</ul>


	<!-- your home html -->

<?php get_footer(); ?>
