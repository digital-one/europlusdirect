<?php /* Template Name: News */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<section id="posts" class="section row  grey above skewed offset-up insets overlap-bottom spaced">
	<div class="section-inner">
<div class="section-content">
<h2 class="centered-text"><?php _e('Latest News','epd_theme'); ?></h2>
<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
	<?php
$args = array(
	'post_type'=>'cpt_news',
	'post_status' => 'publish',
	'paged' => 1,
	'posts_per_page' => 12,
	'orderby' => 'date',
	'order' => 'DESC'
	);
	query_posts($args);
	if(have_posts()) :
		while (have_posts() ) : the_post(); 
 get_template_part('partials/content','news-loop' ); 
 endwhile;
 endif;
 wp_reset_query();
 ?>
</ul>
<footer class="posts-footer"><a href="" class="more-posts">Load more</a></footer>



</div>
<div class="skewed-bg"></div>


</div>
</section>
<?php get_template_part('callback-form'); ?>



<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 