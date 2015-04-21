<?php /* Template Name: IT Services */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<?php the_content() ?>
<?php get_template_part('inc.testimonial') ?>
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->


<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 