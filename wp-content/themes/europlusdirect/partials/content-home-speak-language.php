<section id="video-link" class="section row heading-left align-left  opaque-heading skewed video-link">
<div class="section-inner">
<div class="section-content">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<p><a class="video-btn shift-left-55" href="<?php echo get_button_link($page->ID)?>" target="_blank"><?php echo get_field('button_label',$page->ID)?></a></p>
</div>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'slide'); ?>
<div class="skewed-bg" style="background-image: url('<?php echo $src ?>');"> </div>
</div>
</section>