<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php
	$style='';
	$class='';
	if(has_post_thumbnail($post->ID)):
	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slide');
	$style = ' style="background-image:url(\''.$src.'\');"';
	$class='header-banner ';
	endif;
	?>

<section id="article" class="section row grey above gutters">
	<div class="section-inner">
<div class="section-content">
<header class="article-header"><h2 class="centered-text"><?php the_title() ?></h2>
<p><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'jS F Y' )) ?></time></p></header>
<?php the_content() ?>
<footer><a href="">Back to all articles</a></footer>
<!-- Go to www.addthis.com/dashboard to customize your tools -->

</div>


</div>

</section>
<section id="more-articles" class="section row light-grey above gutters">
	<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php _e('More Articles','epd_theme'); ?></h3>
<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
<?php
$args = array(
	'post_type'=>'cpt_news',
	'post_status' => 'publish',
	'posts_per_page' => 3,
	'post__not_in' => array($post->ID),
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
<footer><a href="">Back to all articles</a></footer>
</div>

</div>
</section>
<?php get_template_part('inc.testimonial'); ?>




<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 