<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
	<?php get_template_part('inc.header-banner') ?>

<section  class="section row grey above skewed offset-up insets overlap-bottom location spaced">
	<div class="section-inner">
<div class="section-content">
<?php
$args = array(
	'post_type'=>'cpt_office',
	'post_status' => 'publish',
	'numberposts' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC'
	);
	query_posts($args);
	if(have_posts()) :
		while (have_posts() ) : the_post(); 
			 get_template_part('partials/content','office-loop' ); 
endwhile;
endif;
wp_reset_query();
 ?>
</div>
<div class="skewed-bg"></div>


</div>

</section>
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 