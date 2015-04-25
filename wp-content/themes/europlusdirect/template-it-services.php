<?php /* Template Name: IT Services */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<section class="section row  yellow above skewed offset-up gutters overlap-bottom">
<div class="section-inner">
<div class="section-content">
<?php the_content() ?>
</div>
<div class="skewed-bg"> </div>
</div>
</section>
<?php  $page = get_post(562);  ?>
<section class="section row  light-grey above offset-up gutters">
<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php echo $page->post_title ?></h3>
<?php echo $page->post_content ?>
</div>
</div>
</section>
<section class="section row light-grey insets above offset-up">
<div class="section-inner">
<div class="section-content">
<div class="row">
<ul class="small-block-grid-1 medium-block-grid-2">
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
			 get_template_part('partials/content','it-services-loop' ); 
endwhile;
endif;
wp_reset_query();
?>
</ul>
</div>
</div>
</section>

<?php get_template_part('inc.testimonial') ?>
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->


<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 