<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Rocky Point Travel & Realty specializes in luxury vacation rentals & real estate in Rocky Point / Puerto Peñasco, MEXICO at Princesa de Penasco, Sonoran Sea, Sonoran Spa, Sonoran Sun, Bella Sirena and Pinacate">
    <meta name="keywords" content="Rocky Point Mexico,rocky point hotel,rocky point condo,Puerto Penasco,Rocky Point,Rocky Point Reservations,Vacation in Mexico,Live in Mexico,Mexico Vacation,Mexico Property,Mexico Real Estate,Beach Resort,Sport Fishing,Puerto Penasco,Rocky Point,princesa,sonoran spa,sonoran sea,sonoran sun,bella sirena,las palomas,esmeralda,pinacate,condos,houses">

    <title>Rocky Point Travel - Luxury Oceanfront Vacation Rentals & Real Estate, Rocky Point / Puerto Penasco, MEXICO</title>
    <!-- Stylesheets -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=<?php echo rand(1,99999); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css?ver=<?php echo rand(1,99999); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/js.cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/populate.js"></script>
    
    <?php wp_head(); ?>
    <!--[if IE 9]>
    <script src="/js/media.match.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Start Main-Wrapper -->
<div id="main-wrapper">


    <!-- Start Header -->
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <ul class="contact-info custom-list list-inline">
                            <li><i class="fa fa-phone"></i><span><?php echo get_field('header_phone_text', 'options'); ?></span></li>
                            <!--li><i class="fa fa-phone"></i><span></span></li-->
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-right pull-right">
                        <div-- class="contact-right">
                            <ul class="social custom-list list-inline">
                                <li><a href="<?php echo get_field('social_facebook', 'options'); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="<?php echo get_field('social_twitter', 'options'); ?>"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="<?php echo get_field('social_linkedin', 'options'); ?>"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                            <!--div class="header-login">
                                <button class="login-toggle header-btn"><i class="fa fa-power-off"></i> Login</button>
                                <div class="header-form">
                                    <form action="index.php" class="default-form">
                                        <p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> All fields are required! <i class="fa fa-times close"></i></p>
                                        <p class="form-row">
                                            <input class="required email" type="text" placeholder="Email">
                                        </p>
                                        <p class="form-row">
                                            <input class="required" type="password" placeholder="Password">
                                        </p>
                                        <p class="form-row">
                                            <button class="submit-btn button btn-blue"><i class="fa fa-power-off"></i> Login</button>
                                        </p>
                                        <p class="form-row forgot-password">
                                            <a href="#">Forgot Password?</a>
                                        </p>
                                        <p class="form-row register">
                                            <a href="#">Register</a>
                                        </p>
                                    </form>
                                </div>
                            </div-->
                            <!--div class="header-language">
                              <button class="header-btn"><i class="fa fa-globe"></i>EN</button>
                              <nav class="header-nav">
                                <ul class="custom-list">
                                  <li class="active"><a href="#">EN</a></li>
                                  <li><a href="#">DE</a></li>
                                  <li><a href="#">FR</a></li>
                                  <li><a href="#">IT</a></li>
                                </ul>
                              </nav>
                            </div>
                          </div-->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navi">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="bs-example-navbar-collapse-1">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                
                                <?php 
                                $menu_name = 'left-of-logo';
                                $locations = get_nav_menu_locations();
                                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                                 $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'ASC'));

                                ?>
                                <ul id="menu-leftoflogo" class="nav navbar-nav main-nav">
                                <?php
 
                                $resortList = new Libraries\Resorts();
                                $resorts = $resortList->getAll(null, null, null, "ASC");
                                    
                                $subitems = "";
                                foreach ($resorts->posts as $resort) {
                                    $subitems .= "<li id='menu-item-' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-'><a href='$resort->url'>$resort->title</a></li>\n";
                                }

                                foreach($menuitems as $menu){
                                        if($menu->title == "RESORTS"){
                                            $subs = "<ul class='sub-menu' style='display:none;'>$subitems</ul>";
                                        }else{
                                            $subs = "";
                                        }
                                        echo "<li id='menu-item-' class='has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item current_page_item menu-item-'><a href='$menu->url'>$menu->title</a>$subs</li>\n";
                                    }
                                ?>
                                
                                </ul>
                                    
                                <?php        // $defaults1 = array( 'container' => 'ul', 'nav_menu_item_id'=>false, 'nav_menu_css_class' => false, 'menu_class' => 'nav navbar-nav main-nav', 'theme_location' => 'left-of-logo' );
                                        // wp_nav_menu( $defaults1 ); 
                                ?>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2 col-sm-12 col-sm-offset-0">
                                    <?php 
                                    $defaults = array( 'container' => 'ul',  'nav_menu_item_id'=>false, 'nav_menu_css_class' => false, 'menu_class' => 'nav navbar-nav main-nav pull-right text-right', 'theme_location' => 'right-of-logo' );
                                    wp_nav_menu( $defaults ); ?>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Header-Toggle -->
    <div id="header-toggle">
        <i class="fa fa-bars"></i>
    </div>
    <!-- End Header-Toggle -->

    <!-- Start Header-Logo -->
    <div class="header-logo">
        <div class="header-logo-inner">
            <div class="css-table">
                <div class="css-table-cell">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-responsive center-block">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header-Logo -->
