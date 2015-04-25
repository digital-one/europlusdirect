<section id="ibm" class="section row light-blue pac skewed centered-text spaced anchor-bottom">
<div class="section-inner">
<div class="section-content"><header class="row">
<div class="small-12 columns">
<h2 class="block-heading"><span class="line"><span class="block"><?php echo $page->post_title ?></span></span></h2>
</div>
</header>
<div class="pac-intro spaced">
<?php echo $post->post_content ?>
</div>
<div class="row pac-features">
<?php
	$args = array(
		'post_type'=>'page',
		'post_status'=>'publish',
     	'post_parent' => $page->ID,
     	'order_by' => 'menu_order',
     	'order' => 'ASC'
		);
		query_posts($args);
	if(have_posts()) :
		while (have_posts() ) : the_post(); 
			 get_template_part('partials/content','service-pack-loop' ); 
endwhile;
endif;
wp_reset_query();
	?>
<footer class="section-footer"><a class="anchor-up">Top</a></footer></div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>