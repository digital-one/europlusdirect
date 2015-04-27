<div class="small-12 large-6 columns">
<div  id="<?php echo get_field('anchor_link',$page->ID);?>" class="nested-section white red-sub-heads right">
	<header class="ribbon-header">
<div class="ribbon right yellow"><span class="inner"><?php echo get_field('ribbon_label',$page->ID)?></span></div>
</header>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'large-image'); ?>
<figure><img src="<?php echo $src ?>" alt="" /></figure>
<div class="content-wrap angle">
<div class="content">
<h3><?php echo $page->post_title ?></h3>
<h4><?php echo get_field('sub_heading',$page->ID)?></h4>
<?php echo $page->post_content ?>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_field('icon',$page->ID),'full'); ?>
<footer><img src="<?php echo $src ?>" alt="" /></footer></div>
</div>
</div>
</div>