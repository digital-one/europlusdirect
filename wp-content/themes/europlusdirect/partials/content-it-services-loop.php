<li>
<div class="nested-section white blue-sub-heads">
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large-image'); ?>
<figure><img class="alignnone size-full wp-image-184" src="<?php echo $src ?>" alt=""  /></figure>
<div class="content-wrap">
<div class="content">
<h3><?php the_title() ?></h3>
<?php the_content() ?>
<?php
$button =  get_field('button_label');
if(!empty($button)):
	?>
<footer class="clearfix"><a class="read-more" href="<?php echo get_button_link(get_the_ID())?>"><span class="inner"><?php echo get_field('button_label',get_the_ID()) ?></span></a></footer>
<?php endif ?>
</div>
</div>
</div>
</li>