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
<?php get_template_part('inc.anchor-nav'); ?>									        													      
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
<!--Service pack options-->
<?php $page = get_post(77); ?>
<section id="lenovo" class="section row red-blue-heading red-sub-heads red-btns pac skewed centered-text grey top offset-down">
<div class="section-inner">
<div class="section-content"><header class="row">
<div class="small-12 columns">
<h2 class="block-heading"><span class="outer"><span class="start">Your</span><span class="logo">Lenovo</span><span class="end">Service Pack Options</span></span></h2>
</div>
</header>
<div class="pac-intro">
<?php echo $page->post_content; ?>
</div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>
<!-- Why choose a lenovo service pack -->
<section class="section row  light-grey above offset-down straight-top gutters logo">
<div class="section-inner">
<div class="section-content">
<?php $page = get_post(469); ?>
<h3 class="centered-text"><?php echo $page->post_title; ?></h3>
<div class="row" style="position: relative;">
<div class="small-12 medium-9 large-8 columns end">
<?php
	echo $page->post_content;
?>
</div>
<?php
if(has_post_thumbnail($page->ID)):
list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'full');
    $alt = get_post_meta(get_post_thumbnail_id($page->ID),'_wp_attachment_image_alt', true);
?>
<p><img src="<?php echo $src ?>" alt="<?php echo $alt ?>" /></p>
<?php endif ?>
</div>
</div>
</div>
</section>
<!-- /Why choose a lenovo service pack -->
<!-- servicepac options 1 & 2 -->
<section class="section row grey insets skewed straight-top spaced anchor"><a class="anchor-up">Top</a>
<div class="section-inner">
<div class="section-content">
<div class="row">
<!--column-->
<?php 
$page = get_post(473);
include( locate_template( 'partials/content-lenovo-service-pack-option-1.php' ));
?>
<!-- /column -->
<!--column-->
<?php 
$page = get_post(475);
include( locate_template( 'partials/content-lenovo-service-pack-option-2.php' ));
?>
<!--/column-->
</div>
<div class="row red-btns">
<div class="small-12 columns"><footer class="insets-footer">
<?php
$page = get_post(77);
 echo get_field('footer',$page->ID);
 ?>
<p><a href="<?php echo get_button_link($page->ID); ?>" class="read-more"><span class="inner"><?php echo get_field('button_label',$page->ID); ?></span></a></p>
</footer></div>
</div>
</div>
<div class="skewed-bg"></div>
</div>
</section>
<!-- /servicepac options 1 & 2 -->
<!-- maintenance contract -->
<?php $page = get_post(83) ?>
<section id="<?php echo get_field('anchor_link',$page->ID);?>" class="section row insets red skewed above">
<div class="section-inner">
<div class="section-content">
<div class="row">
<div class="small-12 large-6 columns">
<div class="nested-section white red-sub-heads spacing "><header class="ribbon-header">
<div class="ribbon yellow"><span class="inner"><?php echo get_field('ribbon_label',$page->ID); ?></span></div>
</header>
<?php $page = get_post(497) ?>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'large-image'); ?>
<figure><img class="alignnone size-full wp-image-184" src="<?php echo $src ?>" alt=""  /></figure>
<div class="content-wrap angle">
<div class="content">
<h3><?php echo $page->post_title ?></h3>
<?php echo $page->post_content ?>
</div>
</div>
</div>
</div>
<?php $page = get_post(83) ?>
<div class="small-12 large-6 columns">
<div class="nested-section white"><header class="icon-header">
<div class="icon">
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_field('icon',$page->ID),'full');
$alt = get_post_meta(get_field('icon',$page->ID),'_wp_attachment_image_alt', true);
?>
<img class="alignnone size-full wp-image-182" src="<?php echo $src ?>" alt="<?php echo $alt ?>" /></div>
<h2><?php echo $page->post_title ?></h2>
<h4><?php echo get_field('sub_heading',$page->ID) ?></h4>
</header>
<?php echo $page->post_content ?>
</div>
</div>
</div>
<div class="row blue-btns">
<div class="small-12 columns"><footer class="insets-footer">
<?php echo get_field('footer',$page->ID) ?>
<p><a href="<?php echo get_button_link($page->ID)?>" class="read-more"><span class="inner"><?php echo get_field('button_label',$page->ID)?></span></a></p>
</footer></div>
</div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>
<!-- /maintenance contract -->
<!-- multi country support / Lenovo software services -->
<section class="section row two-box">
<div class="section-content">
<div class="row">
	<!-- multi country support -->
<?php $page = get_post(186) ?>
<div class="small-12 large-6 columns black blue-red-heading red-btns white-sub-heads">
<div id="<?php echo get_field('anchor_link',$page->ID);?>" class="nested-section-content section-content-inner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/form-bg.jpg');">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php echo $page->post_content ?>
<footer class="text-right"><a href="<?php echo get_button_link($page->ID)?>" class="read-more"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></footer></div>
</div>
<!-- /multi country support -->
<!-- lenovo software services -->
<?php $page = get_post(520) ?>
<div class="small-12 large-6 columns red-blue-heading grey red-sub-heads red-btns">
<div id="<?php echo get_field('anchor_link',$page->ID);?>" class="nested-section-content section-content-inner second">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php echo $page->post_content ?>
<footer class="text-right"><a href="<?php echo get_button_link($page->ID)?>" class="read-more"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></footer></div>
</div>
</div>
</div>
</section>
<!--/multi country support / Lenovo software services -->
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php get_footer() ?> 
<?php endwhile ?>
<?php endif ?>