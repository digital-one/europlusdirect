<?php /* Template Name: Testimonials */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<!--testimonials-->
<section id="testimonials" class="section row red-blue-heading blue-sub-heads red-btns pac skewed centered-text light-grey offset-up spaced">
	<div class="section-inner">
		<div class="section-content">
<h3><?php _e('What our customers say...','epd_theme'); ?></h3>
<?php
$args = array(
	'post_type'=>'cpt_testimonial',
	'post_status' => 'publish',
	'numberposts' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC'
	);
	query_posts($args);
	if(have_posts()) :
		while (have_posts() ) : the_post(); 
 get_template_part('partials/content','testimonial-loop' ); 
 endwhile;
 endif;
 wp_reset_query();
 ?>
</div>
<div class="skewed-bg"></div>
</div>
</section>
<!--/testimonials-->
<?php get_template_part('inc.awards'); ?>
<?php get_template_part('callback-form'); ?>

<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 