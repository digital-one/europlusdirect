<div class="small-12 large-4 columns">
<div class="feature">
<h3><?php the_title() ?></h3>
<?php the_content() ?>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); ?>
<div class="icon"><img class="alignnone size-full wp-image-93" src="<?php echo $src ?>" alt="" /></div>
<h4><?php the_field('sub_heading');?></h4>
<p><a class="read-more" href="<?php the_field('button_link')?>" title="<?php the_field('button_label')?>"><span class="inner"><?php the_field('button_label')?></span></a></p>
</div>
</div>