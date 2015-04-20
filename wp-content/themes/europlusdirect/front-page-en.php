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
				<div class="small-12 columns heading-right opaque-heading">
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
$text = get_sub_field('text_block');
?>
<span class="line"><span class="block<?php if($size=='small'):?> small secondary<?php endif ?>"><?php echo $text ?></span></span>
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
			<?php
			$page = get_post(2);
			echo $page->post_content;
			?>
</div>
</div>
</div>
</section>
<!--/intro-->
<!--lenovo-->
<?php
$page = get_post(65);
echo $page->post_content;
?>
<!--/lenovo-->
<!--IBM-->
<?php
$page = get_post(67);
echo $page->post_content;
?>
<!--/IBM-->
<?php get_template_part('callback-form') ?>

<!--Multi country support-->
<?php
$page = get_post(69);
echo $page->post_content;
?>
	<!--/Multi country support-->
	<!--two column split-->
<?php
$page = get_post(71);
echo $page->post_content;
?>

<!--/two column split-->
<!--faqs-->
<section id="faqs" class="section yellow-white-heading light-yellow row skewed centered-text spaced">
	<div class="section-inner">
	<div class="section-content">
		<?php
$page = get_post(75);
echo $page->post_content;
?>
<div class="slider">
<div class="slide"><p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet?</p></div>
<div class="slide"><p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet?</p></div>

</div>
</div>
<div class="skewed-bg"></div>
</div>
</section>
<!--/faqs-->
<!--video-->
<?php
$page = get_post(73);
echo $page->post_content;
?>
<!--/video-->

<?php get_footer() ?> 
<?php endwhile ?>
<?php endif ?>