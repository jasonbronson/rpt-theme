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
                    <?php
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts($args);
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                    }
                    wp_reset_query();
                    ?>

                        
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
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
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
                    <p>Copyright <?php echo date("Y");?> © RockyPointTravel.com. All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-Copyrights -->

</footer>
<!-- End Footer -->

</div>
<!-- End Main-Wrapper -->

<?php wp_footer(); ?>

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



