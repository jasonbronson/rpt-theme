<?php if ( is_active_sidebar( 'footer_widget' ) ) : ?>
	<div id="footer" class="footer" role="complementary">
		<?php dynamic_sidebar( 'footer_widget' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>


<?php 
wp_footer(); ?>

<!-- Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?ver=<?php echo rand(1,99999); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js?ver=<?php echo rand(1,99999); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/gmap3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.minOLD.js?ver=<?php echo rand(1,99999); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-outside-events.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jqueryui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/transition.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
