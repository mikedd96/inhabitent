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
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
				<div class="contact">
			<h3 class="infohead">contact info</h3>
			<p><i class="fas fa-envelope"></i><a class="email" href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
			<p class="phone"><i class="fas fa-phone fa-flip-horizontal"></i> 778-456-7891 </p>
			<ul class="icons">
				<li><i class="fab fa-facebook-square"></i></li>
				<li><i class="fab fa-twitter-square"></i></li>
				<li><i class="fab fa-google-plus-square"></i></li>
			</ul>
		</div>
		<div class="hours">
			<h3 class="hourshead"> business hours </h3>
			<p> <span>Monday-Friday:</span> 9am to 5pm </p>
			<p> <span>Saturday:</span> 10am to 2pm </p>
			<p> <span>sunday:</span> Closed </p>
		</div>
		<div class="logo-footer">
			<img class="footer-logo" style="width: 280px;padding-top:3rem;"src="<?php echo get_template_directory_uri();?>/logos/inhabitent-logo-text.svg"/>
			
		</div>
		<div class="copyright">
			<p> Copyright © 2019 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		

	</body>
</html>
