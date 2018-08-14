<footer id="footer">

<!-- Start Footer-Top -->
<div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 logo-footer">
                    <!--img src="img/logo-footer.png" alt="" class="img-responsive"-->
                </div>
                <div class="col-md-4 widget widget-about">
                    <h5 class="title">
                        About Us
                    </h5>
                    <p>This is footer text</p>
                </div>
                <div class="col-md-4 widget widget-news">
                    <h5 class="title">
                        Latest News
                    </h5>
                    <ul class="custom-list">
                    
                        
                    </ul>
                </div>
                <div class="col-md-4 widget widget-newsletter">
                    <!--h5 class="title">
                        Newsletter
                    </h5>
                    <form-- action="#" class="default-form">
                        <input type="text" placeholder="Your email">
                        <button class="btn btn-transparent pull-right">Sign Up</button>
                    </form-->
                    <div class="social">
                        <h5 class="title pull-left">
                            Stay in touch
                        </h5>
                        <ul class="custom-list list-inline pull-right">
                           <li><a href="<?php echo get_field('social_facebook', 'options'); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="<?php echo get_field('social_twitter', 'options'); ?>"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="<?php echo get_field('social_linkedin', 'options'); ?>"><i class="fa fa-linkedin-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- End Footer-Top -->
    
    <!-- Start Footer-Copyrights -->
    <div class="footer-copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_field('copyright_notice', 'options'); ?> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-Copyrights -->

</footer>

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
