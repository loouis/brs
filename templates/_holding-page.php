<?php
  /*
  Template Name: Holding page
  */
?>

<main role="main" class="holding-page">
  <div class="wrapper">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/brsearch-logo.png" alt="BR Search - Recruitment">
    <ul class="contact-details">
      <li class="contact-details__contact"><a href="mailto:<?php echo the_field('cd_email_address', 'option');?>"><?php the_field('cd_email_address', 'options');?></a></li>
      <li class="contact-details__contact"><a href="tel:<?php echo the_field('cd_office-tel', 'option');?>"><?php the_field('cd_office-tel', 'option');?></a></li>
      <li class="contact-details__contact"><a href="tel:<?php echo the_field('cd_mobile-tel', 'option');?>"><?php the_field('cd_mobile-tel', 'option');?></a></li>
    </ul><!-- // contact-details -->
  </div><!-- // Wrapper -->
</main>

<?php get_footer(); ?>