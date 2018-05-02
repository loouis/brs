<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css"/>
    
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

    <header class="main-header clear" role="banner">
      <div class="main-header__logo">
        <i><?php the_field('logo', 'option');?></i>
      </div>
      <nav class="nav" role="navigation">
        <div class="nav__wrap">
          <ul class="nav__wrap__links">
            <?php if(is_front_page()){ ?>
              <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="0" class="f-white f-largest f-bold">Home</a></li>
              <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="1" class="f-white f-largest f-bold">Expertise</a></li>
              <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="3" class="f-white f-largest f-bold">Jobs</a></li>
              <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="4" class="f-white f-largest f-bold">Contact</a></li>
            <?php }else{ ?>
              <li class="nav__wrap__links__link"><a href="<?php site_url();?>" class="f-white f-largest f-bold">Home</a></li>
              <li class="nav__wrap__links__link"><a href="<?php site_url();?>/#expertise" class="f-white f-largest f-bold">Expertise</a></li>
              <li class="nav__wrap__links__link"><a href="<?php site_url();?>/#jobs" class="f-white f-largest f-bold">Jobs</a></li>
              <li class="nav__wrap__links__link"><a href="#0" data-scroll-nav="4" class="f-white f-largest f-bold">Contact</a></li>
            <?php } ?>
          </ul>
          <ul class="nav__wrap__contact-links">
            <li class="nav__wrap__contact-links__social-link"><a href="<?php the_field('cd_linkedin', 'option')?>" class="f-white"><i><?php the_field('cd_linkedin_logo', 'options');?></i></a></li>
            <li class="btn-list-links__link"><a href="tel:<?php the_field('cd_office-tel', 'option');?>" class="f-white"><?php the_field('cd_office-tel', 'option');?></a></li>
            <li class="btn-list-links__link"><a href="mailto:<?php the_field('cd_email_address', 'option')?>" class="f-white"><?php the_field('cd_email_address', 'option');?></a></li>
          </ul>
        </div>
      </nav>
      <span class="main-header__close"></span>
    </header>