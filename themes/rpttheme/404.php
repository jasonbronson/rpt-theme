<?php get_header(); ?>


<!-- Start Banner -->
<section id="banner">
  <div class="banner-bg">
<h1 class="entry-title"><?php _e( 'Not Found', 'rpttheme' ); ?></h1>
</div>
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'rpttheme' ); ?></p>
<?php get_search_form(); ?>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>