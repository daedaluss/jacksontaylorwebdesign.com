<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jpreLoader.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.knob.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slideto.v1.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/superscroll/jquery.superscrollorama.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/superscroll/iscroll.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/superscroll/greensock/TweenMax.min.js"></script>
 <script>
	$(document).ready(function() {
		var controller = $.superscrollorama({
			triggerAtCenter: false,
			playoutAnimations: true
		});
		
		
	
	
	
	});
	
	
	</script>

	<?php wp_footer(); ?>
</body>
</html>