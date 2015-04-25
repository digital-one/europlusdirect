<section id="support" class="section row skewed grey centered-text above">
<div class="section-inner">
<div class="section-content">
<div class="row">
<div class="small-12 large-5 columns">
	<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php /*<p>Whether you have another office outside the UK or you have a number of offices in multiple countries, Europlus Direct can help you protect your IT system, quickly, easily and stress-free.</p>*/ ?>
<?php echo $page->post_content ?>
<p><a href="<?php echo get_field('button_link',$page->ID) ?>" title="<?php echo get_field('button_label',$page->ID) ?>" class="ribbon left blue"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></p>
</div>
<div class="small-12 large-7 columns">
<figure>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'full'); ?>
	<img class="alignnone size-medium wp-image-110" src="<?php echo $src ?>" alt="map" /></figure>
</div>
</div>
</div>
<div class="skewed-bg"></div>
</div>
</section>