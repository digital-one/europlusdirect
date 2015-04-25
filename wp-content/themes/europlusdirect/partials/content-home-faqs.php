<section id="faqs" class="section yellow-white-heading light-yellow row skewed centered-text spaced">
	<div class="section-inner">
	<div class="section-content">
		<header class="yellow-white-heading centered-text spaced">
<h2 class="block-heading"><span class="line"><span class="block"><?php echo $page->post_title ?></span></span></h2>
		<?php echo $page->post_content; ?>
</header>
<div class="slider">
	<?php
	$args=array(
		'post_type' => 'cpt_question',
		'post_status' => 'publish',
		'meta_key' => 'display_in_homepage_widget',
    	'meta_value' => 1,
    	'meta_compare' => '=',
    	'order_by' => 'menu_order',
    	'order' => 'ASC'
		);
query_posts($args);
	if(have_posts()) :
		while (have_posts() ) : the_post(); 
			 get_template_part('partials/content','faq-widget-loop' ); 
endwhile;
endif;
wp_reset_query();
 ?>
</div>
</div>
<div class="skewed-bg"></div>
</div>
</section>