<?php
/* Template Name: Plain */
?>
<?php get_header(); ?>

    <section class="header-section autoinsurance" style="background: url(<?php $img = get_field('headerimage');
                                                                        echo $img['url']; ?>) no-repeat center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-section pull-left">

                    </h3>
                    <ul class="breadcrumbs custom-list list-inline pull-right">

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="information">
        <div class="container">
            <div class="row">
                <div class="preamble col-md-12">
                    <?php echo get_field("content"); ?>
                </div>
            </div>

        </div>

    </section>
    <!-- End About -->


    <?php get_footer(); ?>