<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- .content-wrapper -->
</div><!-- #wrap -->

<div id="footer-home" class="footer">
	
	
	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>
	<div class="container">
		
			
	<!--		<p id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
				</a> 

				<span class="pull-right" id="site-generator">
					<?php do_action( 'twentyten_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://brianmcdonald.me/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Digital Branding, Design & Development', 'twentyten' ); ?>"><?php printf( __( 'Designed by %s', 'twentyten' ), 'Brian Mc Donald' ); ?></a>
				</span> --><!-- #site-generator -->
			</p> <!-- #site-info -->
			
			<!--bottom links-->
			<div class="row">
			<div class="ender-text">
  <div class="col-md-6"><small>© 2013 Project Monma | <a href="/wp-admin">Login</a> | <a href="/termsandconditions">Terms & Conditions</a> | <a href="/privacy">Privacy</a> | <a href="/contact-us">Contact Us</a></small></div>
  <div class="col-md-3 col-md-offset-3"><small><a href="http://brianmcdonald.me">Designed by Brian Mc Donald</a></small></div>
</div>
</div>
		
	</div><!-- .container -->

</div><!-- .footer -->

	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.0.3.min.js"></script>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
