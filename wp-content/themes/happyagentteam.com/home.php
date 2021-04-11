<?php get_header(); ?>

	<!-- your home html -->
	<!-- intro popup -->
    <div class="intro-popup">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Popup") ) : ?><?php endif ?>
    </div>
	<!-- End popup -->
	<!-- Banner -->
	<section class="hp-slideshow">
		<h2 class="hidden">hidden h2</h2>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?><?php endif ?>		
	</section>

	<!-- Hp Search -->
	<section class="hp-quick-search container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Quick Search") ) : ?><?php endif ?>
	</section>

	<!-- Hp Properties -->
	<section class="hp-properties">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Properties") ) : ?><?php endif ?>
	</section>

	<!-- Hp Communities -->
	<section class="hp-communities">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Communities") ) : ?><?php endif ?>
	</section>

	<!-- Hp About -->
	<section class="hp-about-us">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp About") ) : ?><?php endif ?>
	</section>

	<!-- Hp Team -->
	<section class="hp-team">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Team") ) : ?><?php endif ?>

	</section>

	<!-- Hp Tagline -->
	<section class="hp-tagline">
		<h2 class="hidden">hidden h2</h2>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Tagline") ) : ?><?php endif ?>
	</section>

	<!-- Hp Clients -->
	<section class="hp-clients">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Clients") ) : ?><?php endif ?>
	</section>

	<!-- Hp Social -->
	<section class="hp-social">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Social") ) : ?><?php endif ?>
	</section>

	<!-- Hp git -->
	<section class="hp-git">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Get In Touch") ) : ?><?php endif ?>
	</section>

	<!-- side smi -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Sidebar") ) : ?><?php endif ?>



	<!-- your home html -->


<?php get_footer(); ?>
