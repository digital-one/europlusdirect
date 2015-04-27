<section class="section row  yellow above skewed  gutters overlap-bottom">
<div class="section-inner">
<div class="section-content">
	<div class="row">
		<h3 class="centered-text"><?php echo $page->post_title ?></h3>
		<div class="small-12 medium-12 columns">
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'medium-image'); ?>
<img class="alignright" src="<?php echo $src ?>" />
<?php echo $page->post_content ?>
</div>

</div>
</div>
<div class="skewed-bg"></div>
</div>
</section>