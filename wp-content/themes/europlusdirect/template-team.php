<?php /* Template Name: Team */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<section id="posts" class="section row  grey above skewed offset-up insets overlap-bottom spaced">
	<div class="section-inner">
<div class="section-content">
<h2 class="centered-text"><?php _e('Meet the team','epd_theme'); ?></h2>


	<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
<?php
$args = array(
	'post_type'=>'cpt_team',
	'post_status' => 'publish',
	'numberposts' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC'
	);
	query_posts($args);
	if(have_posts()) :
		while (have_posts() ) : the_post(); 
			 get_template_part('partials/content','team-loop' ); 
endwhile;
endif;
wp_reset_query();
 ?>
</ul>
</div>
<div class="skewed-bg"></div>


</div>
</section>
<?php
$page = get_post(336);
include( locate_template( 'partials/content-culture.php' ));
?>
<section id="careers" class="section row  light-grey above offset-up gutters">
	<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php _e('Careers','epd_theme'); ?></h3>
<ul class="small-block-grid-1 medium-block-grid-2">
	<?php
	$args = array(
	'post_type'=>'cpt_career',
	'post_status' => 'publish',
	'numberposts' => -1,
	'orderby' => 'date',
	'order' => 'DESC'
	);
	query_posts($args);
	if(have_posts()) :
			while (have_posts() ) : the_post(); 
		$salary = get_field('career_salary',get_the_ID());
			?>
	<?php get_template_part('partials/content','job-loop' ); ?>
	<?php endwhile;
	endif;
	wp_reset_query();
	?>
</ul>

</div>
</section>
<?php get_template_part('inc.awards'); ?>
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 