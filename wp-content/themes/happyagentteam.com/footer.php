			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	
		<footer class="footer">
			<div class="container">
				<div class="upper-footer">
				<img alt="logo" class="img-responsive pad-right" src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo-ps.png">
				<img alt="logo" class="img-responsive pad-left" src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo-luxury.png">
				</div>
				<div class="middle-footer">
					<div class="footer-phone">
						<span class="ai-font-phone"></span>
						<?php echo do_shortcode('[ai_phone href="+1.206.595.1521"]206.595.1521[/ai_phone]')?>
					</div>
					<div class="footer-email">
						<span class="ai-font-envelope-f"></span>
						<?php echo do_shortcode('[mail_to email="brian@snoqualmievalleyre.com"]brian@snoqualmievalleyre.com[/mail_to]')?>
					</div>

					<div class="footer-smi">
						<a href="<?php echo do_shortcode('[ai_client_facebook]')?>" aria-label="facebook" target="_blank">
							<span class="ai-font-facebook"></span>
						</a>
						<a href="<?php echo do_shortcode('[ai_client_instagram]')?>" aria-label="instagram" target="_blank">
							<span class="ai-font-instagram"></span>
						</a>
						<a href="<?php echo do_shortcode('[ai_client_youtube]')?>" aria-label="youtube" target="_blank">
							<span class="ai-font-youtube"></span>
						</a>
						<a href="<?php echo do_shortcode('[ai_client_yelp]')?>" aria-label="yelp" target="_blank">
							<span class="ai-font-yelp"></span>
						</a>
					</div>

				</div>

				<div class="lower-footer">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
					<p class="copyright">Copyright © <?php echo do_shortcode('[currentYear]')?> <span class="sitename"> Patrice Sandstrom </span>All rights reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap |</a> <?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
					</p>
					<div class="mls">
						<em class="ai-font-eho" title="MLS"></em>
						<em class="ai-font-mls" title="MLS"></em>
						<em class="ai-font-realtor" title="MLS"></em>
					</div>
				</div>
			</div>	
			<hr>	
		</footer>
		
		<?php do_action('aios_neighborhoods_footer')?>
		<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
