<!--awards-->
<section id="awards" class="section row red-blue-heading white-sub-heads red-btns pac skewed centered-text blue offset-up spaced behind straight-top">
	<div class="section-inner">
		<div class="section-content">
<h3><?php _e('What the industry says...','epd_theme'); ?></h3>
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
	query_posts($args);
	if(have_posts()) :
		global $wp_query; 
         $num = $wp_query->found_posts;
         $i=1;
		$single=0;
		while (have_posts() ) : the_post(); 
			 include(locate_template('partials/content-award-loop.php'));
			 $i++;
endwhile;
endif;
wp_reset_query();
?>
</div>
</div>
</div>

</div>
<div class="skewed-bg">&nbsp;</div>
</div>
</section>
<!--/awards-->