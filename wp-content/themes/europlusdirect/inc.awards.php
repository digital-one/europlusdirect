<!--awards-->
<section id="awards" class="section row red-blue-heading white-sub-heads red-btns pac skewed centered-text blue offset-up spaced behind straight-top">
	<div class="section-inner">
		<div class="section-content">
<h3><?php _e('Our Awards','epd_theme'); ?></h3>
<div class="row">
	<div class="small-12 large-10 large-offset-1 columns">
		<div class="row">
			<?php
			$args = array(
	'post_type'=>'cpt_award',
	'post_status' => 'publish',
	'numberposts' => 3,
	'orderby' => 'menu_order',
	'order' => 'ASC'
	);
	if($awards = get_posts($args)):
		foreach($awards as $award):
			list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($award->ID),'award-logo');
			?>
			<div class="small-12 medium-4 columns"><div class="award"><figure><img src="<?php echo $src ?>" alt="<?php echo get_field('awards',$award->ID) ?>" /></figure><h4><?php echo $award->post_title ?></h4><p><a href="<?php echo get_permalink($award->ID)?>"><?php _e('Read more','epd_theme'); ?> +</a></p></div></div>
<?php
endforeach;
endif;
?>
</div>
</div>
</div>

</div>
<div class="skewed-bg">&nbsp;</div>
</div>
</section>
<!--/awards-->