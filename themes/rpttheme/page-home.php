<?php
/* Template Name: HomePage */
?>
<?php get_header(); ?>


<!-- Start Banner -->
<section id="banner">
  <div class="banner-bg">
    <div class="banner-bg-item"><img src="<?php $img = get_field('homepageimage'); echo $img['url']; ?>" alt=""></div>
    <div class="banner-bg-item"><img src="<?php $img = get_field('homepage_traveldates_background_image'); echo $img['url']; ?>" alt=""></div>
  </div>

  <div class="css-table">
    <div class="css-table-cell">

      <!-- Start Banner-Search -->
      <div class="banner-search">
        <div class="container">
          <div id="hero-tabs" class="banner-search-inner">
            <ul class="custom-list tab-title-list clearfix">
              <li class="tab-title active"><a href="#">Reservation</a></li>
              <li class="tab-title"><a href="#pricingtab" class="tab-pricing hide">Pricing</a></li>
            </ul>
            <ul class="custom-list tab-content-list">
                <?php
                $step = (int) $_REQUEST['step']?$_REQUEST['step']:1;
                if(!empty($step))
                   get_template_part( "step".$step );

                  //@include("step{$step}")
                
                ?> 
                
            </ul>

          </div>

        </div>
      </div>
      <!-- End Banner-Search -->

    </div>
  </div>
</section>
<!-- End Banner -->
<!-- Start About -->
<section class="about">
  <div class="container">
    <div class="row">
      <div class="preamble col-md-12">
        <?php 
        the_field('homepagetext');
        //echo get_post_meta($post->ID, 'homepagetext', true); ?>
      </div>
      <!--div class="col-md-3 col-sm-6 feature text-center">
        <div class="overlay">
          <img src="img/about1.jpg" alt="" class="img-responsive">
          <div class="overlay-shadow">
            <div class="overlay-content">
              <a href="#" class="btn btn-transparent-white">Read More</a>
            </div>
          </div>
        </div>
        <h4>Our Services</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
      </div>

      <div class="col-md-3 col-sm-6 feature text-center">
        <div class="overlay">
          <img src="img/about2.jpg" alt="" class="img-responsive">
          <div class="overlay-shadow">
            <div class="overlay-content">
              <a href="#" class="btn btn-transparent-white">Read More</a>
            </div>
          </div>
        </div>
        <h4>Memberships</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
      </div>

     <div class="col-md-3 col-sm-6 feature text-center">
        <div class="overlay">
          <img src="img/about3.jpg" alt="" class="img-responsive">
          <div class="overlay-shadow">
            <div class="overlay-content">
              <a href="#" class="btn btn-transparent-white">Read More</a>
            </div>
          </div>
        </div>
        <h4>Our Agents</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
      </div>

      <div class="col-md-3 col-sm-6 feature text-center">
        <div class="overlay">
          <img src="img/about4.jpg" alt="" class="img-responsive">
          <div class="overlay-shadow">
            <div class="overlay-content">
              <a href="#" class="btn btn-transparent-white">Read More</a>
            </div>
          </div>
        </div>
        <h4>Our Offices</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
      </div>
    </div-->
    </div>
</section>
<!-- End About -->
<!-- Start Testimonials -->
<!-- <section class="testimonials">

  <div id="video_testimonials" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%"></div>
  <div class="video_gradient"></div>

  <div class="container">
    <div class="row">
      <div class="preamble light col-md-12">
        <h3>Testimonials</h3>
      </div>

      <div class="col-md-12">
        <div id="owl-testimonials" class="owl-carousel owl-theme">

          <div class="item">
            <div class="col-lg-12">
              <blockquote class="quote">
                <cite>Nancy B<span class="job"></span></cite>
                <p class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </p>
                Our stay at this property was wonderful! The kitchen was spacious and had all the necessary items for cooking. The property was beautiful and private. The property was well maintained with spacious bathrooms and bedrooms. The beds were comfortable. The beach was a short walk but the private patio was perfect for sitting outside and reading or enjoying the sun. We highly recommend this property for your Rocky Point vacation!
              </blockquote>
            </div>
          </div>
          <div class="item">
            <div class="col-lg-12">
              <blockquote class="quote">
                <cite>Ken S<span class="job"></span></cite>
                <p class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </p>
                Our stay was Awesome...the house itself was way more then we expected, three bedrooms, three baths...master bath was huge! Excellent kitchen fully stocked...built in bbq grill which we used everyday...built in jacuzzi which we used everyday...loved all the pools...the swim up bar was great..nice staff everywhere we went...the grounds maintained beautifully...short walk to beach...we hope to go back!
              </blockquote>
            </div>
          </div>
          <div class="item">
            <div class="col-lg-12">
              <blockquote class="quote">
                <cite>Mastaneh G.<span class="job"></span></cite>
                <p class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </p>
                We enjoyed our stay at this wonderfully appointed villa. The owner was very professional throughout the rental process. The villa was very clean and conveniently located in the ground floor close the pool and the beach. We look forwarding renting this villa again.
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- End Testimonials -->

<div class="loading">
   Please Wait <i class="fa fa-spinner fa-spin"></i>
</div>

<?php get_footer(); ?>