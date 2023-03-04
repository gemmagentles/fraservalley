<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header clear" role="banner" id="navbar-jsT">
        <div class="header__container">
            
            <div class="header__logo--mobile">
                <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/img/icons/FVG-logo.png" alt="FVG Logo">
            </div>
            <!-- Mobile Menu -->
            <div class="nav__hamburger-icon" id="hamburger">
                <div class="hamburger-bar1"></div>
                <div class="hamburger-bar2"></div>
                <div class="hamburger-bar3"></div>
            </div>

            <!-- Menu -->
            <nav class="header__nav" role="navigation">
                <div></div>
                <a class="header__nav--link" href="http://fvg.local/">Home</a>                                                        
                <a class="header__nav--link" href="http://fvg.local/history/">History</a>                                                                      
                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/img/icons/FVG-logo.png" alt="FVG Logo">
                    </a>
                </div>
                
                <a class="header__nav--link" href="http://fvg.local/committee/">Committee</a>                                          
                <a class="header__nav--link" href="http://fvg.local/contact-us/">Contact Us</a>                                                                
            </nav>

            <div class="header__social">
                <a class="header__social--link" title="Facebook" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
                    <svg aria-labelledby="title" class="header__social--icon">
                    <title id="title" lang="en">Facebook</title>
                    <use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon"/></svg>

                </a>
                <a class="header__social--link" title="Instagram" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
                    <svg aria-labelledby="title" class="header__social--icon">
                    <title id="title" lang="en">Instagram</title>
                    <use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon"/></svg>
                </a>
            </div>
        </div>
    </header>
