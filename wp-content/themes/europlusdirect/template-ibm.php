<?php /* Template Name: IBM */ ?>
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
				<div class="small-12 columns heading-right opaque-heading blue-yellow-heading">
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
<section id="intro" class="section row first gutters">
	<div class="section-inner">
		<div class="section-content">

		
<p>You’ve invested time and money in choosing and deciding on your IBM equipment, whether that’s servers, desktop computers, laptops or a combination. Therefore, it makes sense to cover that kit–and your business–with a quality warranty, service or maintenance product from Europlus Direct.</p>
<p>You can protect your business by extending the current warranty on a newly bought IBM machine with our <a href="#">In-warranty upgrade</a>.  Or, if you have older IBM equipment or you’re looking for more robust predictive maintenance and repair support, you might need our IBM <a href="#">Service Suite Maintenance Contract</a>, which can also cover non-IBM kit. </p>
<p>Need IBM software support? <a href="#">Find out more</a>. </p>
<p>Using machines from different manufacturers? Then our IBM <a href="#">Multi-Manufacturer Services</a>  could be the option for you.</p>
<p>Whatever your reasons for protecting your IBM equipment and of course, your commercial interests, Europlus Direct can help. Not sure what your exact IBM needs are? We are more than happy to help, so why not <a href="#">contact us</a> today.</p>
</div>

</div>
</div>
</section>
<!--service pack options-->
<?php echo get_translation_content(array('en'=>212,'de'=>198)); ?>
<!--/service pack options-->
<!-- IBM ServicePac -->
<?php echo get_translation_content(array('en'=>214,'de'=>198)); ?>
	<!--/IBM ServicePac-->
<!-- IBM Service Suite Maintenance Contract -->
<?php echo get_translation_content(array('en'=>218,'de'=>198)); ?>
	<!--/IBM Service Suite Maintenance Contract-->

<!--two column split-->
<?php echo get_translation_content(array('en'=>225,'de'=>198)); ?>

<!--/two column split-->

<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->




<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 