<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="main">
<?php include( locate_template( 'inc.header-banner.php' )); ?>
<section class="section row grey above skewed offset-up overlap-bottom spaced">
<div class="section-inner">
<div class="section-content">
	<h1 class="centered-text"><?php the_title() ?></h1>
<?php the_content() ?>
</div>
<div class="skewed-bg"></div>
</div>
</section>
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 