<?php /* Template Name: About */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<?php echo get_translation_content(array('en'=>13,'de'=>198)); ?>
<!-- Global Offices -->
<?php echo get_translation_content(array('en'=>239,'de'=>198)); ?>
<!-- /Global Offices -->


<?php get_template_part('inc.awards') ?>
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->

<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 