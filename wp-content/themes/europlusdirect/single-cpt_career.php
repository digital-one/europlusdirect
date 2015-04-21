<?php /* Template Name: Career Single */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">

<section id="intro" class="<?php echo $class ?>section row first light-grey overlap-bottom gutters">
	<div class="section-inner">
		<div class="section-content">
			<div class="row">
<div class="small-12 large-6 columns">
		

</div>
<div class="small-12 large-6 columns heading-right">

	<h2 class="block-heading">

<span class="line"><span class="block">Join a global company</span></span>
<span class="line"><span class="block secondary">with a great team</span></span>

</h2>
	</div>
</div>
</div>

</div>
</div>
</section>

<section id="article" class="section row grey above skewed offset-up gutters overlap-bottom">
	<div class="section-inner">
<div class="section-content">
	<?php $salary = get_field('career_salary',get_the_ID()); ?>
<header class="article-header"><h2 class="centered-text"><?php the_title() ?></h2>
<p><strong>Location: </strong><?php echo get_field('career_location',get_the_ID()) ?><br /><strong>Salary: </strong><?php if(!empty($salary)):?><?php echo get_field('career_salary',get_the_ID()); ?><?php else: ?>Neg<?php endif ?></p></header>
<?php the_content() ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->

</div>
<div class="skewed-bg"></div>


</div>

</section>
<section id="careers" class="section row  light-grey above offset-up gutters">
	<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php _e('More Vacancies','epd_theme'); ?></h3>
<ul class="small-block-grid-1 medium-block-grid-2">
	<?php
	$args = array(
	'post_type'=>'cpt_career',
	'post_status' => 'publish',
	'numberposts' => -1,
	'orderby' => 'date',
	'post__not_in' => array($post->ID),
	'order' => 'DESC'
	);

			query_posts($args);

		if(have_posts()) :
			$c=1;
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

</div>
</section>
<!--section-->
<?php get_template_part('inc.testimonial') ?>
<!--/section-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 