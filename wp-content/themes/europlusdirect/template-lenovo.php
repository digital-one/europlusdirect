<?php /* Template Name: Lenovo */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<!--slider-->
	<div id="slider-wrap">
	<section id="slider">
		<?php
		if(have_rows('slider')):
	$slide_total = count(get_field('slider')); //number of rows in parent field
while(have_rows('slider')): //parent repeater field
the_row();
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'), 'slide');
?>
<!--slide-->
		<div class="slide" style="background-image:url('<?php echo $src ?>');">
			<div class="row">
				<div class="small-12 columns heading-right opaque-heading blue-red-heading">
			<div class="content"><div class="vcenter">
<?php
$rows = get_sub_field('caption'); //number of rows in nested field
if(have_rows('caption')): //nested repeater field
?>
<h2 class="block-heading">
<?php
$page_count=0;
$page_total = count($rows);
while( have_rows('caption')):
the_row();
$size = get_sub_field('text_block_size');
$colour = get_sub_field('text_block_colour');
$text = get_sub_field('text_block');
?>
<span class="line"><span class="block<?php if($size=='small'):?> small<?php endif ?><?php if($colour=='secondary'):?> secondary<?php endif ?>"><?php echo $text ?></span></span>
<?php
endwhile;
?>
</h2>
<?php 
endif;
?>
</div>
</div>
</div>
</div>
</div>
<?php
endwhile;
endif;
?>
</section>
	<nav id="anchor-nav"><ul><li><a href="">Lenovo</a></li><li><a href="">IBM support</a></li><li><a href="">Multi-country</a></li><li><a href="">Software support</a></li><li><a href="">Multi-manufacturer support</a></li><li><a href="">FAQs</a></li></ul></nav>
									        													      
</div>
<!--/slider-->
<main id="main">
<!--intro-->
<section id="intro" class="section row first gutters">
	<div class="section-inner">
		<div class="section-content">
<?php the_content() ?>
</div>

</div>
</div>
</section>
<!--/intro-->
<!--lenovo-->
<?php

echo get_translation_content(array('en'=>77,'de'=>198));

?>
<!--/lenovo-->
<!-- servicepac options 1 & 2 -->
<?php
echo get_translation_content(array('en'=>79,'de'=>200));
?>
<!-- / servicepac options 1 & 2 -->

<!-- maintenance contract -->
<?php
echo get_translation_content(array('en'=>83,'de'=>204));
?>
<!-- /maintenance contract -->

<!--multi country support / Lenovo software services -->
<?php
echo get_translation_content(array('en'=>186,'de'=>206));
?>

<!--/multi country support / Lenovo software services -->

<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php get_footer() ?> 
<?php endwhile ?>
<?php endif ?>