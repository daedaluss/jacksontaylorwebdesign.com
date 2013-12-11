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
		
		$(window).on('resize', function(){
                var vpheight = $(window).height();
                var vpwidth = $(window).width();

        if(vpwidth>vpheight) {
          // Landscape
            var height = $(window).height() * 0.00148;
            var width = height / 2 * -958;
            $('.scales').css('transform', 'scale(' + height + ')');
            $('.scales').css('-ms-transform', 'scale(' + height + ')');
            $('.scales').css('-webkit-transform', 'scale(' + height + ')');
            $('.scales').css('-o-transform', 'scale(' + height + ')');
            $('.scales').css('-moz-transform', 'scale(' + height + ')');
            $('#ChangableElements').css({'left': width  + 'px'});
        } else if(vpwidth <=720 && vpheight > 569 ) {
            var height = $(window).height() * 0.000675;
            var width = height / 2 * -958;
            $('.scales').css('transform', 'scale(' + height + ')');
            $('.scales').css('-ms-transform', 'scale(' + height + ')');
            $('.scales').css('-webkit-transform', 'scale(' + height + ')');
            $('.scales').css('-o-transform', 'scale(' + height + ')');
            $('.scales').css('-moz-transform', 'scale(' + height + ')');
            $('#ChangableElements').css({'left': width  + 'px'});
        } else {
          // Portrait
            var height = $(window).height() * 0.000895;
            var width = height / 2 * -958;
            $('.scales').css('transform', 'scale(' + height + ')');
            $('.scales').css('-ms-transform', 'scale(' + height + ')');
            $('.scales').css('-webkit-transform', 'scale(' + height + ')');
            $('.scales').css('-o-transform', 'scale(' + height + ')');
            $('.scales').css('-moz-transform', 'scale(' + height + ')');
            $('#ChangableElements').css({'left': width  + 'px'});
        }
        }).resize()
	
	jQuery( "#centered-home" ).css( 'top', parseInt( ( jQuery( window ).outerHeight() / 2 ) + jQuery( document ).scrollTop() - jQuery( "#centered-home" ).height() ) );
jQuery( "#centered-home" ).css( 'left', parseInt( ( jQuery( document ).outerWidth() / 2 ) + jQuery( document ).scrollLeft() - jQuery( "#centered-home" ).width() ) );
	});
	
	
	</script><script type="text/javascript" src="//use.typekit.net/xtd8eug.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<?php wp_footer(); ?>
</body>
</html>