<?php
  /*
  * Template Name: Homepage
  */
  get_header();
?>

<main role="main">
  <?php 
    $hero_image = get_field('hero-image');
    if( wp_is_mobile() ){ ?>
      <section class="hero hero--home hero--full-screen" data-scroll-index="0" style="background-image: url(<?php echo $hero_image['sizes']['m_split-screen-image']?>)">
    <?php }else{ ?>
      <section class="hero hero--home hero--full-screen" data-scroll-index="0" style="background-image: url(<?php echo $hero_image['sizes']['d_full-screen']?>)">
    <?php } ?>
    <div class="wrapper">
      <h1><?php the_field('hero-main-title');?></h1>
      <header class="section-header">
        <div class="section-title">
          <span class="section-title__line"></span> 
          <h4><?php the_field('hero-section-title-clone_section-header-title');?></h4>
        </div>
        <?php if( get_field('hero-section-title-clone_section-header-copy') ):?>
          <div class="section-header__intro">
            <p><?php the_field('hero-section-title-clone_section-header-copy');?></p>
            <button class="btn btn-text-icon">
              <a href="#0" data-scroll-goto="1">
                <p class="btn-text-icon__text"><?php the_field('');?></p>
                <i class="btn-text-icon__icon"></i>
              </a>
            </button>
          </div>
        <?php endif;?>
      </header>
    </div><!-- //wrapper -->
  </section><!-- //home -->
  <section class="expertise" id="expertise" data-scroll-index="1">
    <div class="wrapper">
    <header class="section-header">
        <div class="section-title">
          <span class="section-title__line"></span> 
          <h4><?php the_field('expertise_clone_section-header-title');?></h4>
        </div>
        <?php if( get_field('expertise_clone_section-header-copy') ):?>
          <div class="section-header__intro">
            <p><?php the_field('hero-section-title-clone_section-header-copy');?></p>
            <button class="btn btn-text-icon">
              <a href="#0" data-scroll-goto="1">
                <p class="btn-text-icon__text"><?php the_field('');?></p>
                <i class="btn-text-icon__icon"></i>
              </a>
            </button>
          </div>
        <?php endif;?>
      </header>
      <?php get_template_part('parts/expertise-cells');?>  
    </div>
  </section><!-- //expertise -->
  <section class="testimonials" data-scroll-index="2">
    <div class="wrapper">
      <div class="testimonials__carousel-wrap">
        <?php get_template_part('parts/testimonials-carousel');?>
      </div>
    </div>
  </section><!-- //testimonials -->
  <section class="latest-jobs" id="jobs" data-scroll-index="3">
    <div class="wrapper">
      <header class="section-header">
        <div class="section-title">
          <span class="section-title__line"></span> 
          <h4><?php the_field('latest_jobs_clone_section-header-title');?></h4>
        </div>
        <?php if( get_field('latest_jobs_clone_section-header-copy') ):?>
          <div class="section-header__intro">
            <p><?php the_field('latest_jobs_clone_section-header-copy');?></p>
            <button class="btn btn-text-icon">
              <a href="#0" data-scroll-goto="1">
                <p class="btn-text-icon__text"><?php the_field('');?></p>
                <i class="btn-text-icon__icon"></i>
              </a>
            </button>
          </div>
        <?php endif;?>
      </header>
      <?php get_template_part('parts/latest-jobs');?>
    </div><!-- //wrapper -->
  </section><!-- //latest-jobs -->
</main>

<?php get_footer();?>