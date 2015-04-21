<!--testimonials-->
<section  class="section row red-blue-heading white-sub-heads red-btns pac skewed centered-text blue offset-up spaced behind straight-top">
	<div class="section-inner">
		<div class="section-content">
<h3><?php _e('Testimonials','epd_theme'); ?></h3>
<?php
$args = array(
	'post_type'=>'cpt_testimonial',
	'post_status' => 'publish',
	'numberposts' => 1,
	'orderby' => 'rand'
	);
	if($testimonials = get_posts($args)):
		foreach($testimonials as $testimonial):
			?>
<div class="quote-outer">
<blockquote><?php echo get_field('testimonial_quote',$testimonial->ID) ?><footer><small><?php echo get_field('testimonial_company',$testimonial->ID) ?></small></footer></blockquote></div>
<a href="<?php echo get_permalink(45)?>" class="ribbon right yellow"><span><?php _e('Read more','epd_theme'); ?></span></a>
</div>
<?php endforeach;
endif;
?>

<div class="skewed-bg"></div>
</div>
</section>
<!--/testimonials-->