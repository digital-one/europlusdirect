<section class="section row yellow blue-btns gutters above centered-text">
<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php echo $page->post_title ?></h3>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'small-image'); ?>
<img class="aligncenter" src="<?php echo $src ?>" />
<?php echo $page->post_content ?>

<footer class="clearfix">
<a href="<?php echo get_button_link($page->ID)?>" class="read-more"><span class="inner"><?php echo get_field('button_label',$page->ID)?></span></a>
<?php /* <a class="read-more"><span class="inner">View all our locations</span></a> */ ?>
</footer></div>
</div>
</section>