<?php 
/*
Template Post Type: jobs
*/
get_header();
?>

<?php while(have_posts()): the_post();?>
  <main rol="main">
    <section class="hero hero-single-job">
      <div class="wrapper">
        <div class="hero-single-job__text-wrap l-60">
          <h1><?php the_title();?></h1>
          <p><?php the_content();?></p>
        </div>
      </div>
    </section><!--//hero-single-job-->
    <section class="job-desc">
      <div class="wrapper">
        <aside class="job-desc__details">
          <ul class="job-desc__details__list">
            <?php if(get_field('job_details-term')):?>
              <li class="job-desc__details__list__item">
                <h4>Term</h4>
                <p><?php the_field('job_details-term');?></p>
              </li>
            <?php endif;?>
            <?php if(get_field('job_details-start-date')):?>
              <li class="job-desc__details__list__item">
                <h4>Start date</h4>
                <p><?php the_field('job_details-start-date');?></p>
              </li>
            <?php endif;?>
            <?php if(get_field('job_details-location')):?>
              <li class="job-desc__details__list__item">
                <h4>Location</h4>
                <p><?php the_field('job_details-location');?></p>
              </li>
            <?php endif;?>
            <?php if(get_field('job_details-salary')):?>
              <li class="job-desc__details__list__item">
                <h4>Salary</h4>
                <p><?php the_field('job_details-salary');?></p>
              </li>
            <?php endif;?>
          </ul>
          <button class="btn btn-text-icon">
            <a href="">
              <p class="btn-text-icon__text">Apply for job</p>
              <i class="btn-text-icon__icon"></i>
            </a>
          </button>
        </aside>
        <article class="job-desc__desc">
          <div>
            <h2>Job Description</h2>
            <?php the_field('job_description');?>
          </div>
          <div>
            <h2>Requirements</h2>
            <?php the_field('job_requirements');?>
          </div>
        </article>
      </div>
    </section>
  </main>
<?php endwhile;?>

<?php get_footer();?>