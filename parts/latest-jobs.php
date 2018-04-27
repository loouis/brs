
<?php 
  $args = array (
    'post_type' => 'jobs',
    'posts_per_page' => '3',
    'order' => 'DESC'
  );
  $the_query = new WP_query( $args );
?>
<?php if( $the_query->have_posts() ):?>
  <ul class="latest-jobs__cells">
    <?php while( $the_query->have_posts() ): $the_query->the_post();?>
      <li class="latest-jobs__cells__cell">
        <?php if( get_field('job_details-level') ):?>
          <span class="latest-jobs__cells__cell__level">
            <p><?php the_field('job_details-level');?></p>
          </span>
        <?php endif;?>
        <div class="latest-jobs__cells__cell__wrap">
          <i class="latest-jobs__cells__cell__wrap__icon"></i>
          <h2 class="latest-jobs__cells__cell__wrap__title"><?php the_title();?></h2>
          <p class="latest-jobs__cells__cell__wrap__copy"><?php the_excerpt();?></p>
          <button class="btn btn-text-icon">
            <a href="<?php the_permalink();?>">
              <p class="btn-text-icon__text">Read more</p>
              <i class="btn-text-icon__icon"></i>
            </a>
          </button>
        </div>
      </li>
    <?php endwhile;?>
  </ul>
<?php endif;?>