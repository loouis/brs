<?php
  $testimonials_repeater = get_field('testimonial_repeater');
?>
<?php if( have_rows('testimonial_repeater') ): ?>
  <ul class="testimonials__carousel">
    <?php while( have_rows('testimonial_repeater') ): the_row();?>
      <li class="testimonials__carousel__cell">
        <?php if( get_sub_field('testi_image') ):?>
          <i class="testimonials__carousel__cell__image"><?php the_sub_field('testi_image');?></i>
        <?php endif;?>
        <p class="testimonials__carousel__cell__copy"><?php the_sub_field('testi_quote');?></p>
        <?php if( get_sub_field('testi_person') ):?>
          <span class="testimonials__carousel__cell__person"><?php the_sub_field('testi_person');?></span>
        <?php endif;?>
      </li>
    <?php endwhile;?>
  </ul>
<?php endif;?>