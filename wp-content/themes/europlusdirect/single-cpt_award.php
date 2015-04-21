<?php /* Template Name: Award Single */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">

<!--awards-->
<section id="awards" class="section row red-blue-heading blue-sub-heads red-btns pac gutters above centered-text light-grey">
	<div class="section-inner">
		<div class="section-content">
<div class="row">
	
<div class="small-12 medium-6 medium-offset-3 columns">
	<div class="award">
		<?php list($src,$w,$h) = wp_get_attachment_image_src(get_field('award_logo_single',$post->ID),'award-logo'); ?>
		<figure class="large"><img src="<?php echo $src ?>" /></figure>
	</div>

</div>

</div>
<h3 class="centered-text"><?php the_title() ?></h3>
<?php the_content() ?>
</div>
</div>
</section>
<!--/awards-->

<!--awards-->
<section id="awards" class="section row red-blue-heading white-sub-heads straight-top offset-up skewed below centered-text blue offset-up spaced">
	<div class="section-inner">
		<div class="section-content">
<h3><?php _e('Our other awards...','epd_theme'); ?></h3>
<div class="row">
	<div class="small-12 large-10 large-offset-1 columns">
		<div class="row">
				<?php
			$args = array(
	'post_type'=>'cpt_award',
	'post_status' => 'publish',
	'numberposts' => 3,
	'orderby' => 'menu_order',
	'post__not_in' => array($post->ID),
	'order' => 'ASC'
	);
	query_posts($args);
	if(have_posts()) :
		global $wp_query; 
         $num = $wp_query->found_posts;
         $i=1;
         $single=1;
		while (have_posts() ) : the_post(); 
		include(locate_template('partials/content-award-loop.php'));
			// get_template_part('partials/content','award-loop' ); 
			 $i++;
endwhile;
endif;
wp_reset_query();
?>
</div>
</div>
</div>

</div>
<div class="skewed-bg"></div>
</div>
</section>
<!--/awards-->
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 