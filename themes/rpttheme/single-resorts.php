<?php get_header(); ?>

<!-- Start Main-Wrapper -->
<div id="main-wrapper">
    <!-- End Header-Toggle -->

    <!-- Start Header-Section -->
    <section class="header-section room" style="background:url('<?php $img = get_field('headerimage'); echo $img['url']; ?>') no-repeat center;">
        <div id="gradient"></div>
        <!--div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-section pull-left">

                    </h3>
                    <ul class="breadcrumbs custom-list list-inline pull-right">
                        <li><a href="#">Resorts</a></li>
                        <li><a href="#">{{ $resortname }}</a></li>
                    </ul>
                </div>
            </div>
        </div-->
    </section>
    <!-- End Header-Section -->

    <!-- Start Room -->
    <section id="room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="room-wrapper negative-margin">
                        <div class="sidebar col-md-3">

                            <?php get_template_part('layouts/resorts-left-rail');?>
                            
                        </div>
                        <div class="room-content col-md-9">
                            <div class="room-general">
                                <img src="" alt="" class="img-responsive">
                                <header>
                                    <div class="pull-left">
                                        <h4 class="title-section"><?php echo get_field( 'h1' ); ?></h4>
                                    </div>
                                    <div class="pull-right">
                                        <span class="price">
                                          from <?php echo get_field( "startpricepernight" ); ?>/night
                                        </span>
                                    </div>
                                </header>
                            </div>

                            <div class="room-tabs">
                                <ul class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#about">About</a></li>
                                    <li><a data-toggle="tab" href="#amenities">Amenities</a></li>
                                    <li class="active"><a data-toggle="tab" href="#images">Images</a></li>
                                    <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="about" class="tab-pane fade">
                                        <div class="listing-facitilities">
                                            <div class="row">
                                            <?php echo get_field( "about_resort" ); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="amenities" class="tab-pane fade">
                                        <div class="listing-facitilities">
                                            <div class="row">
                                            <?php echo get_field( "amenities" ); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="images" class="tab-pane fade in active">
                                        <script>
                                            $(document).ready(function(){
                                                $("#lightSlider").lightSlider({
                                                    gallery:true,
                                                    item:1,
                                                    loop:true,
                                                    thumbItem:9,
                                                    slideMargin:0,
                                                    enableDrag: false,
                                                    auto: true,
                                                    currentPagerPosition:'left',
                                                    onSliderLoad: function(el) {
                                                        el.lightGallery({
                                                            selector: '#imageGallery .lslide'
                                                        });
                                                    }
                                                });
                                            });
                                            </script>
                                        <div class="images-gallery">
                                            <ul id="lightSlider">
                                                  <?php

                                                    // check if the repeater field has rows of data
                                                    if (have_rows('resort_images')):

                                                        // loop through the rows of data
                                                        while (have_rows('resort_images')): the_row();

                                                            $image = get_sub_field('resortimages');
                                                            echo "<li data-thumb='{$image}' data-src='{$image}'>
                                                             <img src='{$image}' class='img-responsive' />
                                                            </li>";

                                                        endwhile;

                                                    else:

                                                        // no rows found

                                                    endif;

                                                    ?>
                                                  
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab-pane fade">
                                        <ul class="reviews-list custom-list">
                                            <li>
                                            <?php echo get_field( "resortreviews" ); ?>
                                            </li>
                                            <li>
                                                <hr>
                                                <form action="#" class="default-form">
                                                    <p>Write a review </p>
                                                    Name: <input type="text" name="name">
                                                    Review: <textarea cols="30" rows="4"></textarea>
                                                    <button class="btn btn-transparent-gray">Send</button>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Room -->


</div>
<!-- End Main-Wrapper -->

<script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/lightslider.css" rel="stylesheet" />

<script src="<?php echo get_template_directory_uri(); ?>/js/lightgallery.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/lightgallery.css" rel="stylesheet" />


<?php get_footer(); ?>