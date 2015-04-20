<?php /* Template Name: About */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<section id="intro" class="section row first grey overlap-bottom gutters">
	<div class="section-inner">
		<div class="section-content">
			<div class="row">
<div class="small-12 large-6 columns">
</div>
<div class="small-12 large-6 columns heading-right">
<h2 class="block-heading"><span class="line"><span class="block">Working together</span></span><span class="line"><span class="block">to protect</span></span><span class="line"><span class="secondary block">your business</span></span></h2>
	</div>
</div>
</div>

</div>
</div>
</section>
<?php echo get_translation_content(array('en'=>13,'de'=>198)); ?>
<!-- Global Offices -->
<?php echo get_translation_content(array('en'=>239,'de'=>198)); ?>
<!-- /Global Offices -->


<!--awards-->
<section id="awards" class="section row red-blue-heading white-sub-heads red-btns pac skewed centered-text blue offset-up spaced behind straight-top">
	<div class="section-inner">
		<div class="section-content">
<h3>Our Awards</h3>
<div class="row">
	<div class="small-12 large-10 large-offset-1 columns">
		<div class="row">
			<div class="small-12 medium-4 columns"><div class="award"><figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uk-trade-investment.jpg" /></figure><h4>Best Multilingual<br /> Website 2004</h4><p><a href="">Read more +</a></p></div></div>
<div class="small-12 medium-4 columns"><div class="award"><figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/queens-awards-2008.jpg" /></figure><h4>Queens Award for<br />International Trade 2008</h4><p><a href="">Read more +</a></p></div></div>
<div class="small-12 medium-4 columns"><div class="award"><figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/queens-awards-2013.jpg" /></figure><h4>Queen’s Award for<br />Enterprise 2013</h4><p><a href="">Read more +</a></p></div></div>
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