<?php /* Template Name: IT Services */ ?>
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
<h2 class="block-heading"><span class="line"><span class="block">When it comes to</span></span><span class="line"><span class="block">worldwide IT support</span></span><span class="line"><span class="secondary block">Europlus Direct can help</span></span></h2>
	</div>
</div>
</div>

</div>
</div>
</section>
<!--section-->
<?php the_content() ?>
<!--testimonials-->
<section  class="section row red-blue-heading white-sub-heads red-btns pac skewed centered-text blue offset-up spaced behind straight-top">
	<div class="section-inner">
		<div class="section-content">
<h3><?php _e('Testimonials','epd_theme'); ?></h3>
<div class="quote-outer">
<blockquote><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nib. Lorem ipsum amet, consectetuer adipiscing elit olor sit amet, consectetue. L orem ipsum dolor sit amet, elit. Consectetuer adipiscing elit, sed diam nonummy nib. Lorem ipsum amet, consectetuer adipiscing elit olor sit amet, consectetue</p><footer><small>A Customer, Leeds.</small></footer></blockquote></div>
<a href="" class="ribbon right yellow"><span><?php _e('Read more','epd_theme'); ?></span></a>

</div>
<div class="skewed-bg"></div>
</div>
</section>
<!--/testimonials-->
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->


<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 