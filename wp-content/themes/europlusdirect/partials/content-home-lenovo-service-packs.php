<section id="lenovo" class="section row red-blue-heading red-sub-heads red-btns pac skewed grey centered-text spaced">
<div class="section-inner">
<div class="section-content"><header class="row">
<div class="small-12 columns"><a class="gold-partner"><img src="http://europlusdirect.localhost/wp-content/uploads/2015/04/lenovo-gold-business-partner.png" alt="Lenovo Gold Business Partner 2015" /></a>
<div class="inner">
<div class="vcenter">
<h2 class="block-heading"><span class="outer"><span class="logo">Lenovo</span><span class="end">Service Packs</span></span></h2>
</div>
</div>
</div>
</header>
<div class="pac-intro spaced">
<?php echo $page->post_content ?>
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
</div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>