
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
        <a href="<?php the_permalink();?>">
          <?php if( get_field('job_details-level') ):?>
            <span class="latest-jobs__cells__cell__level">
              <p class="f-uppercase f-bold f-small"><?php the_field('job_details-level');?></p>
            </span>
          <?php endif;?>
          <div class="latest-jobs__cells__cell__wrap">
            <i class="latest-jobs__cells__cell__wrap__icon"></i>
            <h3 class="latest-jobs__cells__cell__wrap__title f-white"><?php the_title();?></h3>
            <p class="latest-jobs__cells__cell__wrap__copy f-small"><?php the_excerpt();?></p>
            <button class="btn btn-text-icon latest-jobs__cells__cell__wrap__btn btn-text-icon--arrow">
              <div class="btn-text-icon__wrap">
                <p class="btn-text-icon__wrap__text">Read more</p>
                <i class="btn-text-icon__wrap__icon"></i>
              </div>
            </button>
          </div>
        </a>
      </li>
    <?php endwhile;?>
  </ul>
<?php endif;?>