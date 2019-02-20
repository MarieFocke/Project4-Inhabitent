<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<h3>Contact Info</h3>
					<span>info@inhabitent.com</span>
					<br>
					<span>778-456-7891</span>
				</div>
				<div class="site-hours">
					<h3>Business Hours</h3>
					<span>Monday- Friday: 9am to 5pm</span>
					<br>
					<span>Saterday: 10am to 2pm</span>
					<br>
					<span>Sunday: Closed</span>
				</div>
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" />
				</div>
				<div class="copyright">
					<p class="done-by">
						copyright &copy; 2019 Inhabitent
					</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
