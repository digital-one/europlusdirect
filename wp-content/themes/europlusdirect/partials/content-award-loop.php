<?php
list($src,$w,$h) = wp_get_attachment_image_src(get_field('awards_logo',get_the_ID()),'award-logo');
?>
<?php if($single): ?>
<div class="small-12 medium-4<?php if($i==1):?> medium-offset-2<?php endif ?> columns<?php if($i==$num):?> end<?php endif ?>"><div class="award"><figure><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo $src ?>" alt="<?php echo get_field('awards',get_the_ID()) ?>" /></a></figure><h4><?php the_title() ?></h4><p><a href="<?php the_permalink() ?> "><?php _e('Read more','epd_theme'); ?> +</a></p></div></div>
<?php else: ?>
<div class="small-12 medium-4 columns<?php if($i==$num):?> end<?php endif ?>"><div class="award"><figure><img src="<?php echo $src ?>" alt="<?php echo get_field('awards',get_the_ID()) ?>" /></figure><h4><?php the_title() ?></h4><p><a href="<?php the_permalink() ?> "><?php _e('Read more','epd_theme'); ?> +</a></p></div></div>
<?php endif ?>
