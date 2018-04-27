<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <style src="<?php echo get_template_directory_uri();?>/style.css"/>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

    <!-- header -->
    <header class="header clear" role="banner">

        <!-- logo -->
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
          </a>
        </div>
        <!-- /logo -->

        <!-- nav -->
        <nav class="nav" role="navigation">
          <div class="nav__wrap">
            <ul class="nav__wrap__links">
              <?php if(is_front_page()){ ?>
                <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="0">Home</a></li>
                <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="1">Expertise</a></li>
                <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="3">Jobs</a></li>
                <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="4">Contact</a></li>
              <?php }else{ ?>
                <li class="nav__wrap__links__link"><a href="<?php site_url();?>">Home</a></li>
                <li class="nav__wrap__links__link"><a href="<?php site_url();?>/#expertise">Expertise</a></li>
                <li class="nav__wrap__links__link"><a href="<?php site_url();?>/#jobs">Jobs</a></li>
                <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="4">Contact</a></li>
              <?php } ?>
            </ul>
          </div>
        </nav>
        <!-- /nav -->

    </header>
    <!-- /header -->
