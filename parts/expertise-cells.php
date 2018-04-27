<?php $expertise_repeater = get_field('expertise_repeater');?>
<?php if( have_rows('expertise_repeater') ): ?>
  <ul class="expertise__cells">
    <?php while( have_rows('expertise_repeater') ): the_row();?>
      <li class="expertise__cells__cell">
        <i class="expertise__cells__cell__icon"><?php the_sub_field('expertise-cell-icon');?></i>
        <h2 class="expertise__cells__cell__title f-small f-bold"><?php the_sub_field('expertise-cell-title');?></h2>
        <p class="expertise__cells__cell__copy"><?php the_sub_field('expertise-cell-copy');?></p>
      </li>
    <?php endwhile;?>
  </ul>
<?php endif;?>